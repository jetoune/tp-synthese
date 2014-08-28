<?php

namespace Imie\WorkgroupsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkgroupsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
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
            'data_class' => 'Imie\WorkgroupsBundle\Entity\Workgroups'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_workgroupsbundle_workgroups';
    }
}
