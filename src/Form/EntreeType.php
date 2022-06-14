<?php

namespace App\Form;

use App\Entity\Entree;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntreeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quatite',TextType::class,[  
                'attr'=>[
                   'class'=>'form-control'
                ]
               ])
            
            ->add('dateE',DateType::class,[  
                'attr'=>[
                   'class'=>'data-provider '
                ]
               ])
            ->add('product')
           
               ->add('submit', SubmitType::class, [
                'attr' => 
              [ 
                  'class'=>'btn btn-lg btn-primary mt-4'
                ],
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entree::class,
        ])
        
        
        ;
    }
}
