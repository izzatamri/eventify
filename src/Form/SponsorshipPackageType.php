<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\SponsorshipPackage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SponsorshipPackageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', ChoiceType::class, [
                'label' => 'Package name',
                'choices' => array_combine(SponsorshipPackage::NAMES, SponsorshipPackage::NAMES),
                'placeholder' => '-- Select package --',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 3],
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Price',
                'currency' => $options['currency'] ?? 'USD',
            ])
            ->add('numberOfTables', IntegerType::class, [
                'label' => 'Number of tables',
            ])
            ->add('seatsPerTable', IntegerType::class, [
                'label' => 'Seats per table',
            ])
            ->add('benefits', TextareaType::class, [
                'label' => 'Benefits (what\'s included)',
                'required' => false,
                'attr' => ['rows' => 4],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SponsorshipPackage::class,
            'currency' => 'USD',
        ]);
    }
}
