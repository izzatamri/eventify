<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class AdminUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $requirePassword = (bool) ($options['require_password'] ?? false);

        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email address',
                'attr' => ['placeholder' => 'user@example.com', 'autocomplete' => 'email'],
            ])
            ->add('firstName', TextType::class, [
                'label' => 'First name',
                'attr' => ['placeholder' => 'First name', 'maxlength' => 100],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Last name',
                'attr' => ['placeholder' => 'Last name', 'maxlength' => 100],
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Roles',
                'choices' => [
                    'Client' => User::ROLE_CLIENT,
                    'Organizer' => User::ROLE_ORGANIZER,
                    'Admin' => User::ROLE_ADMIN,
                ],
                'multiple' => true,
                'expanded' => false,
                'attr' => ['data-choices' => 'true', 'data-choices-removeItem' => 'true'],
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Active account',
                'required' => false,
            ])
            ->add('plainPassword', RepeatedType::class, [
                'mapped' => false,
                'required' => $requirePassword,
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => $requirePassword ? 'Password' : 'New password',
                    'attr' => ['autocomplete' => $requirePassword ? 'new-password' : 'off'],
                    'constraints' => $requirePassword ? [
                        new Length(min: 6, minMessage: 'Password should be at least {{ limit }} characters'),
                    ] : [],
                ],
                'second_options' => [
                    'label' => $requirePassword ? 'Repeat password' : 'Repeat new password',
                    'attr' => ['autocomplete' => $requirePassword ? 'new-password' : 'off'],
                ],
                'invalid_message' => 'The password fields must match.',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'admin_user',
            'require_password' => false,
        ]);
    }
}

