<?php

namespace App\Form;

use App\Entity\Riyousya;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RiyousyaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('familyName')
            ->add('firstName')
            ->add('birthYear')
            ->add('birthMonth')
            ->add('birthDay')
            ->add('tel')
            ->add('address')
            ->add('sns')
            ->add('created_at')
            ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Riyousya::class,
        ]);
    }
}
