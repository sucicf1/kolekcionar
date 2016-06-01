<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('name', TextType::class, array('label'=>'Naziv'))
                ->add('price', NumberType::class, array('label'=>'Cijena','scale'=>2))
                ->add('qualityPercent', NumberType::class, array('label'=>'Kvaliteta u postotcima','scale'=>2))
                ->add('model', TextType::class, array('label'=>'Model'))
                ->add('isMechanical', CheckboxType::class, array('label'=>'Mehanički',
                                                                'required'=>false))
                ->add('isDigital', CheckboxType::class, array('label'=>'Digitalni',
                                                                'required'=>false))
                ->add('maxDepthWaterResistant', NumberType::class, array('label'=>'Maksimalna dubina','scale'=>2))
                ->add('isDisplayingCurrentDate', CheckboxType::class, array('label'=>'Prikazuje datum',
                                                                'required'=>false))
                ->add('isDisplayingDayName', CheckboxType::class, array('label'=>'Prikazuje danasnji dan',
                                                                'required'=>false))
                ->add('batteryType', TextType::class, array('label'=>'Vrsta baterije'))
                ->add('save', SubmitType::class,array('label'=>'Spremi'));
    }
}
