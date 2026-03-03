<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => ['maxlength' => 50, 'placeholder' => 'e.g. General Admission'],
            ])
            ->add('quantityAvailable', IntegerType::class, [
                'label' => 'Available quantity',
                'attr' => ['min' => 1],
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Price',
                'currency' => $options['currency'] ?? 'USD',
                'required' => true,
                'attr' => ['min' => '0', 'step' => '0.01'],
            ])
            ->add('saleStart', DateTimeType::class, [
                'label' => 'Sales start',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
            ->add('saleEnd', DateTimeType::class, [
                'label' => 'Sales end',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
            'currency' => 'USD',
        ]);
    }
}
