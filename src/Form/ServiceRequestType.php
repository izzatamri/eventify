<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\ServiceProvider;
use App\Entity\ServiceRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de la demande',
                'attr' => ['placeholder' => 'Ex: Service traiteur pour gala annuel'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description détaillée',
                'attr' => ['rows' => 6, 'placeholder' => 'Décrivez vos besoins en détail...'],
            ])
            ->add('serviceType', ChoiceType::class, [
                'label' => 'Catégorie de service',
                'choices' => array_combine(ServiceProvider::SERVICE_TYPES, ServiceProvider::SERVICE_TYPES),
                'placeholder' => '-- Sélectionner --',
            ])
            ->add('expectedDate', DateTimeType::class, [
                'label' => 'Date prévue',
                'widget' => 'single_text',
            ])
            ->add('deadline', DateTimeType::class, [
                'label' => 'Date limite de réponse',
                'widget' => 'single_text',
            ])
            ->add('budgetMin', MoneyType::class, [
                'label' => 'Budget minimum',
                'currency' => 'EUR',
            ])
            ->add('budgetMax', MoneyType::class, [
                'label' => 'Budget maximum',
                'currency' => 'EUR',
            ])
            ->add('location', TextType::class, [
                'label' => 'Lieu',
                'attr' => ['placeholder' => 'Ville ou adresse'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ServiceRequest::class,
        ]);
    }
}
