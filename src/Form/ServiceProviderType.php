<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\ServiceProvider;
// TODO: Add error handling
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceProviderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    // NOTE: Consider caching this
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Company name',
                'attr' => ['placeholder' => 'Company or provider name'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'contact@example.com'],
            ])
            ->add('phone', TextType::class, [
                'label' => 'Phone',
                'attr' => ['placeholder' => 'Phone number'],
            ])
            ->add('serviceType', ChoiceType::class, [
                'label' => 'Service type',
                'choices' => array_combine(ServiceProvider::SERVICE_TYPES, ServiceProvider::SERVICE_TYPES),
                'placeholder' => '-- Select type --',
            ])
            ->add('hourlyRate', MoneyType::class, [
                'label' => 'Hourly rate',
                'currency' => $options['currency'] ?? 'USD',
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => ServiceProvider::STATUS_ACTIVE,
                    'Inactive' => ServiceProvider::STATUS_INACTIVE,
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ServiceProvider::class,
            'currency' => 'USD',
        ]);
    }
}
