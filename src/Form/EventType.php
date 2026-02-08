<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Event;
use App\Entity\Organizer;
use App\Entity\Venue;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
                'attr' => ['maxlength' => 255],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('startDatetime', DateTimeType::class, [
                'label' => 'Start',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
            ->add('endDatetime', DateTimeType::class, [
                'label' => 'End',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Draft' => Event::STATUS_DRAFT,
                    'Published' => Event::STATUS_PUBLISHED,
                    'Cancelled' => Event::STATUS_CANCELLED,
                ],
            ])
            ->add('image', TextType::class, [
                'label' => 'Image URL',
                'required' => false,
                'attr' => ['placeholder' => 'https://...'],
            ])
            ->add('organizer', EntityType::class, [
                'class' => Organizer::class,
                'choice_label' => 'name',
                'label' => 'Organizer',
                'placeholder' => '-- Select organizer --',
            ])
            ->add('venue', EntityType::class, [
                'class' => Venue::class,
                'choice_label' => 'name',
                'label' => 'Venue',
                'placeholder' => '-- Optional --',
                'required' => false,
            ])
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'label' => 'Categories',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
