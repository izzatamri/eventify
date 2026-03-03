<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Sponsor;
use App\Entity\SponsorshipPackage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Company name',
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
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo (image file)',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File(
                        maxSize: '2M',
                        mimeTypes: [
                            'image/png',
                            'image/jpeg',
                            'image/jpg',
                            'image/webp',
                            'image/gif',
                        ],
                        mimeTypesMessage: 'Please upload a valid image (PNG, JPEG, JPG, WebP or GIF).',
                    ),
                ],
                'attr' => ['accept' => 'image/png,image/jpeg,image/jpg,image/webp,image/gif'],
            ])
            ->add('logoUrl', TextType::class, [
                'label' => 'Or logo URL',
                'required' => false,
                'attr' => ['placeholder' => 'https://... (optional if you upload a file)'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'About the company',
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
            ->add('sponsorshipPackage', EntityType::class, [
                'class' => SponsorshipPackage::class,
                'choice_label' => fn (SponsorshipPackage $p) => $p->getName() . ' — ' . $p->getPrice(),
                'label' => 'Sponsorship package',
                'placeholder' => '-- Select package --',
                'choices' => $options['packages'] ?? [],
            ])
            ->add('paymentStatus', ChoiceType::class, [
                'label' => 'Payment status',
                'choices' => [
                    'Pending' => Sponsor::PAYMENT_STATUS_PENDING,
                    'Paid' => Sponsor::PAYMENT_STATUS_PAID,
                    'Partially paid' => Sponsor::PAYMENT_STATUS_PARTIALLY_PAID,
                ],
            ])
            ->add('amountPaid', MoneyType::class, [
                'label' => 'Amount paid',
                'required' => false,
                'currency' => $options['currency'] ?? 'USD',
            ])
            ->add('paymentDate', DateTimeType::class, [
                'label' => 'Payment date',
                'required' => false,
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => Sponsor::STATUS_ACTIVE,
                    'Inactive' => Sponsor::STATUS_INACTIVE,
                    'Pending approval' => Sponsor::STATUS_PENDING_APPROVAL,
                    'Rejected' => Sponsor::STATUS_REJECTED,
                ],
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Internal notes',
                'required' => false,
                'attr' => ['rows' => 3],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
            'currency' => 'USD',
            'packages' => [],
        ]);
        $resolver->setAllowedTypes('packages', 'array');
    }
}
