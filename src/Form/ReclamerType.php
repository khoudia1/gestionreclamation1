<?php

namespace App\Form;

use App\Entity\Reclamer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ReclamerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objet')
            ->add('corps')
            ->add('professeur', ChoiceType::class, [ 'choices' => ['Papa DIOP'=>'Papa DIOP', 'Mohamadou THIAM'=>'Mohamadou THIAM', ]])
           // ->add('dateCreation')
            ->add('ufr', ChoiceType::class, [ 'choices' => ['SET'=>'SET', 'SES'=>'SES', ]])
            ->add('filiere' , ChoiceType::class, [ 'choices' => ['INFORMATIQUE'=>'INFORMATIQUE', 'PHYSIQUE CHIMIE'=>'PHYSIQUE CHIMIE', 'LANGUES ETRANGERES APPLIQUEES'=>'LANGUES ETRANGERES APPLIQUEES',]])
            ->add('niveau', ChoiceType::class, [ 'choices' => ['LICENCE 1'=>'LICENCE 1', 'LICENCE 2'=>'LICENCE 2', 'LICENCE 3'=>'LICENCE 3','MASTER 1'=>'MASTER 1','MASTER 2'=>'MASTER 2',]])
           // ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamer::class,
        ]);
    }
}
