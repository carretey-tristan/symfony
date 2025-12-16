<?php

namespace App\Form;

use App\Entity\Haie;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HaieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, array('label'=>'Code haie'))
            ->add('nom', TextType::class, array('label'=>'Nom haie'))
            ->add('prix', NumberType::class, array('label'=>'Tarif haie',
            'invalid_message'=>'Saisir un nombre'))
            ->add('categorie', EntityType::class,[
                'label'=>'Catégorie de haie',
                'class'=>Categorie::class,
                'choice_label'=>'libelle'
            ])
            ->add('save', SubmitType::class, array('label' => 'AJOUTER'))
        
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Haie::class,
        ]);
    }
}
