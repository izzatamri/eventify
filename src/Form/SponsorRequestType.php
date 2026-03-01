<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Sponsor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

/**
 * Public form for "Become a sponsor" request (no status, payment or notes).
 */
class SponsorRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Company name',
                'attr' => ['placeholder' => 'Your company or organization'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('phone', TextType::class, [
                'label' => 'Phone',
                'required' => false,
            ])
            ->add('website', UrlType::class, [
                'label' => 'Website',
                'required' => false,
                'attr' => ['placeholder' => 'https://...'],
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo (optional)',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File(
                        maxSize: '2M',
                        mimeTypes: ['image/png', 'image/jpeg', 'image/jpg', 'image/webp', 'image/gif'],
                        mimeTypesMessage: 'Please upload a valid image (PNG, JPEG, JPG, WebP or GIF).',
                    ),
                ],
                'attr' => ['accept' => 'image/png,image/jpeg,image/jpg,image/webp,image/gif'],
            ])
            ->add('logoUrl', TextType::class, [
                'label' => 'Or logo URL',
                'required' => false,
                'attr' => ['placeholder' => 'https://...'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'About your company',
                'required' => false,
                'attr' => ['rows' => 3],
            ])
            ->add('contactPersonName', TextType::class, [
                'label' => 'Contact person name',
                'required' => false,
            ])
            ->add('contactPersonEmail', EmailType::class, [
                'label' => 'Contact person email',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}
