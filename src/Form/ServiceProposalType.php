<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\ServiceProposal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceProposalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price', MoneyType::class, [
                'label' => 'Prix proposé',
                'currency' => 'EUR',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de votre proposition',
                'attr' => ['rows' => 5, 'placeholder' => 'Détaillez votre offre...'],
            ])
            ->add('estimatedDuration', TextType::class, [
                'label' => 'Durée estimée',
                'attr' => ['placeholder' => 'Ex: 3 jours, 8 heures'],
            ])
            ->add('proposedTeamSize', IntegerType::class, [
                'label' => 'Taille de l\'équipe proposée',
                'attr' => ['placeholder' => 'Nombre de personnes', 'min' => 1],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ServiceProposal::class,
        ]);
    }
}
