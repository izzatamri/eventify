<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('status', ChoiceType::class, [
            'label' => 'Status',
            'choices' => [
                'Pending' => Order::STATUS_PENDING,
                'Confirmed' => Order::STATUS_CONFIRMED,
                'Cancelled' => Order::STATUS_CANCELLED,
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
