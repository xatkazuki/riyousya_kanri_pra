<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/13
 * Time: 18:42
 */

namespace App\Form;


use App\Entity\YadoStaff;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class YadoStaffType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $optiobns
     */
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('famillyName')
            ->add('firstName')
            ->add('position',ChoiceType::class,[
                'choices' => [
                    '正社員'=>'正社員',
                    '契約社員'=>'契約社員',
                    'パート'=>'パート',
                    '学生アルバイト'=>'学生アルバイト',
                ]])
            ->add('nyuusya_at')
            ->add('taisya_at')
            ->add('created_at')
            ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => YadoStaff::class,
        ]);
    }

}