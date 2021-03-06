<?php

namespace App\Form;

use App\Entity\Syukuhaku;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SyukuhakuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('famillyName')
            ->add('firstName')
            ->add('check_in')
            ->add('check_out')
            ->add('number_of_guests')
            ->add('type',ChoiceType::class,[
                'choices' => [
                    'a'=>'a',
                    'b'=>'b',
            ]])
            ->add('syukuhaku_option')
            ->add('comment')
            ->add('tel')
            ->add('address')
            ->add('created_at')
            ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Syukuhaku::class,
        ]);
    }
}
