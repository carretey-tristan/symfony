<?php

namespace App\Form;

use App\Entity\Devis;
use App\Entity\Haie;
use App\Entity\Tailler;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaillerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('hauteur')
            ->add('longueur')
            ->add('Haie', EntityType::class, [
                'class' => Haie::class,
                'choice_label' => 'code',
            ])
            ->add('devis', EntityType::class, [
                'class' => Devis::class,
                'choice_label' => function (?Devis $d) {
                    return $d ? (string) $d->getno() : '';
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tailler::class,
        ]);
    }
}
