<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Event;
use App\Entity\Order;
use App\Entity\Ticket;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class OrderService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    /**
     * Create an order and update event/ticket totals in a single transaction.
     *
     * @throws \InvalidArgumentException if quantity invalid or ticket not for event
     */
    public function createOrder(User $user, Event $event, Ticket $ticket, int $quantity): Order
    {
        if ($quantity < 1) {
            throw new \InvalidArgumentException('Quantity must be at least 1.');
        }
        if ($ticket->getEvent() !== $event) {
            throw new \InvalidArgumentException('Ticket does not belong to this event.');
        }
        $remaining = $ticket->getQuantityRemaining();
        if ($quantity > $remaining) {
            throw new \InvalidArgumentException(sprintf('Only %d ticket(s) available.', $remaining));
        }

        $price = $ticket->getPrice() ?? '0';
        $totalPrice = bcmul((string) $price, (string) $quantity, 2);

        $order = new Order();
        $order->setUser($user);
        $order->setEvent($event);
        $order->setTicket($ticket);
        $order->setQuantity($quantity);
        $order->setTotalPrice($totalPrice);
        $order->setStatus(Order::STATUS_CONFIRMED);

        $this->entityManager->wrapInTransaction(function () use ($order, $event, $ticket, $quantity, $totalPrice): void {
            $this->entityManager->persist($order);

            $event->setSold($event->getSold() + $quantity);
            $event->setGross(bcadd($event->getGross(), $totalPrice, 2));

            $ticket->setQuantitySold($ticket->getQuantitySold() + $quantity);

            $this->entityManager->flush();
        });

        return $order;
    }

    /**
     * Cancel an order: reverse sold/gross and ticket.quantitySold.
     *
     * @throws \InvalidArgumentException if order already cancelled
     */
    public function cancelOrder(Order $order): void
    {
        $this->entityManager->refresh($order);
        if ($order->getStatus() === Order::STATUS_CANCELLED) {
            return;
        }

        $quantity = $order->getQuantity();
        $totalPrice = $order->getTotalPrice() ?? '0';
        $event = $order->getEvent();
        $ticket = $order->getTicket();

        $this->entityManager->wrapInTransaction(function () use ($order, $event, $ticket, $quantity, $totalPrice): void {
            $order->setStatus(Order::STATUS_CANCELLED);

            $event->setSold(max(0, $event->getSold() - $quantity));
            $event->setGross(bcsub($event->getGross(), $totalPrice, 2));
            if (bccomp($event->getGross(), '0', 2) < 0) {
                $event->setGross('0.00');
            }

            $ticket->setQuantitySold(max(0, $ticket->getQuantitySold() - $quantity));

            $this->entityManager->flush();
        });
    }
}
