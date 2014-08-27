<?php

namespace Imie\ProjectsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('startDate')
            ->add('endDate')
            ->add('description')
            ->add('rate', 'hidden', array('data' => 0))
            ->add('save', 'submit', array(
                    'attr' => array('class' => 'save'),
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imie\ProjectsBundle\Entity\Projects'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_projectsbundle_projects';
    }
}
