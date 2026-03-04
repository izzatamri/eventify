<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

// Improved error handling
class EmailVerificationCodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'label' => 'Verification code',
                'attr' => [
                    'placeholder' => '000000',
                    'autocomplete' => 'one-time-code',
                    'maxlength' => 6,
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*',
                ],
                'constraints' => [
                    new NotBlank(message: 'Please enter the 6-digit code from your email.'),
                    new Length(exactly: 6, exactMessage: 'The code must be exactly {{ limit }} digits.'),
                    new Regex(pattern: '/^\d{6}$/', message: 'The code must be 6 digits.'),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_token_id' => 'verify_email',
        ]);
    }
}
