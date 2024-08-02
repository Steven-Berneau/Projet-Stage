<?php

namespace App\Form;

use App\Entity\Salon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', NULL, ['label_attr' => ['class' => 'link-light text-decoration-underline fw-bold']])
            ->add('Description', NULL, ['label_attr' => ['class' => 'link-light text-decoration-underline fw-bold']])
            ->add('image', NULL, ['label_attr' => ['class' => 'link-light text-decoration-underline fw-bold']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Salon::class,
        ]);
    }
}
