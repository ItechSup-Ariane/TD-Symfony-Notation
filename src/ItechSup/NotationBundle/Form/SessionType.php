<?php

namespace ItechSup\NotationBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('dateDebut', 'date')
            ->add('dateFin', 'date')
            ->add('enseignant', EntityType::class, array(
                'class' => 'ItechSupNotationBundle:Enseignant',
                'choice_label' => 'NomPrenom',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ItechSup\NotationBundle\Entity\Session'
        ));
    }
}
