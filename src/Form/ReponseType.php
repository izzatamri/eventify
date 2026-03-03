<?php
// src/Form/ReponseType.php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_rep', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'attr' => ['placeholder' => 'Votre nom']
            ])
            ->add('adressmail_rep', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => ['placeholder' => 'votre@email.com']
            ])
            ->add('reponse_rep', TextareaType::class, [
                'label' => 'Réponse',
                'required' => true,
                'attr' => ['rows' => 5, 'placeholder' => 'Votre réponse...']
            ])
            ->add('reclamation', EntityType::class, [
                'class' => Reclamation::class,
                'choice_label' => function(Reclamation $reclamation) {
                    return sprintf('#%d - %s (%s)', 
                        $reclamation->getId(), 
                        $reclamation->getSujetrec(),
                        $reclamation->getNomrec()
                    );
                },
                'placeholder' => 'Choisir une réclamation',
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}