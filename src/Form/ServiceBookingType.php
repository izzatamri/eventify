<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\ServiceBooking;
use App\Entity\ServiceProvider;
use App\Repository\ServiceProviderRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceBookingType extends AbstractType
{
    public function __construct(
        private readonly ServiceProviderRepository $serviceProviderRepository,
    ) {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $serviceType = $options['service_type'] ?? null;
        $providers = $this->serviceProviderRepository->findActiveByServiceType($serviceType);

        $builder
            ->add('serviceProvider', EntityType::class, [
                'label' => 'Service provider',
                'class' => ServiceProvider::class,
                'choices' => $providers,
                'choice_label' => fn (ServiceProvider $sp) => $sp->getName() . ' (' . $sp->getServiceType() . ')',
                'placeholder' => '-- Select provider --',
            ])
            ->add('scheduledDate', DateType::class, [
                'label' => 'Scheduled date',
                'widget' => 'single_text',
            ])
            ->add('startTime', TimeType::class, [
                'label' => 'Start time',
                'widget' => 'single_text',
            ])
            ->add('endTime', TimeType::class, [
                'label' => 'End time',
                'widget' => 'single_text',
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantity (staff or meals)',
            ])
            ->add('agreedPrice', MoneyType::class, [
                'label' => 'Agreed price',
                'currency' => $options['currency'] ?? 'USD',
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Notes (special requirements)',
                'required' => false,
                'attr' => ['rows' => 3],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ServiceBooking::class,
            'currency' => 'USD',
            'service_type' => null,
        ]);
        $resolver->setAllowedTypes('service_type', ['null', 'string']);
    }
}
