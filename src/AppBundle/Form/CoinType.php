<?php

namespace AppBundle\Form;

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('name', TextType::class, array('label'=>'Naziv'))
                ->add('price', NumberType::class, array('label'=>'Cijena','scale'=>2))
                ->add('qualityPercent', NumberType::class, array('label'=>'Kvaliteta u postotcima','scale'=>2))
                ->add('save', SubmitType::class,array('label'=>'Spremi'))
                ->add('printedValue', NumberType::class, array('label'=>'Vrijednost napisana na novcu','scale'=>2))
                ->add('isCurrentlyInUse', CheckboxType::class, array('label'=>'Je li kovanica trenutno u upotrebi?',
                                                                'required'=>false))
                ->add('isRare', CheckboxType::class, array('label'=>'Je li kovanica rijetka?',
                                                            'required'=>false))
                ->add('productionMaterial', TextType::class, array('label'=>'Materijal izrade (zlato,srebro, ...)'));
    }
}
