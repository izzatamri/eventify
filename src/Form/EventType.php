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
                'label' => 'Event title',
                'attr' => ['maxlength' => 255, 'placeholder' => 'Event title *'],
            ])
            ->add('summary', TextType::class, [
                'label' => 'Summary',
                'required' => false,
                'attr' => ['maxlength' => 140, 'placeholder' => 'Summary *'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Overview',
                'attr' => ['rows' => 6, 'placeholder' => 'Add more details about your event...'],
            ])
            ->add('startDatetime', DateTimeType::class, [
                'label' => 'Start time',
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
            ->add('endDatetime', DateTimeType::class, [
                'label' => 'End time',
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
                'label' => 'Cover image URL',
                'required' => false,
                'attr' => ['placeholder' => 'https://...'],
            ])
        ;
        if ($options['allow_organizer_choice']) {
            $builder->add('organizer', EntityType::class, [
                'class' => Organizer::class,
                'choice_label' => 'name',
                'label' => 'Organizer',
                'placeholder' => '-- Select organizer --',
            ]);
        }
        $builder
            ->add('venue', EntityType::class, [
                'class' => Venue::class,
                'choice_label' => 'name',
                'label' => 'Venue',
                'placeholder' => '-- Optional --',
                'required' => false,
                'choice_attr' => function (Venue $venue) {
                    return [
                        'data-lat' => $venue->getLatitude() ?? '',
                        'data-lng' => $venue->getLongitude() ?? '',
                    ];
                },
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
            'allow_organizer_choice' => true,
        ]);
    }
}
