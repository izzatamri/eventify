<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Event;
use App\Entity\Order;
use App\Entity\Ticket;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /** @var Event $event */
        $event = $options['event'];

        $builder
            ->add('ticket', EntityType::class, [
                'class' => Ticket::class,
                'choices' => $event->getTickets(),
                'choice_label' => fn (Ticket $t) => $t->getName() . ' — $' . $t->getPrice(),
                'label' => 'Ticket',
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantity',
                'data' => 1,
                'constraints' => [
                    new GreaterThan(0),
                    new LessThanOrEqual(100),
                ],
                'attr' => ['min' => 1, 'max' => 100],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
            'event' => null,
        ]);
        $resolver->setRequired('event');
        $resolver->setAllowedTypes('event', Event::class);
    }
}
