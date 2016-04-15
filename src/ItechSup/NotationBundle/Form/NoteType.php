<?php

namespace ItechSup\NotationBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('valeur')
            ->add('etudiant', EntityType::class, array(
                'class' => 'ItechSupNotationBundle:Etudiant',
                'choice_label' => 'NomPrenom',
            ))
            ->add('session', EntityType::class, array(
                'class' => 'ItechSupNotationBundle:Session',
                'choice_label' => 'Titre',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ItechSup\NotationBundle\Entity\Note'
        ));
    }
}
