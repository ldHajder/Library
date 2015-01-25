<?php

namespace Library\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Form used to search books
 * @author Lucy
 */
class SearchFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => 'Tytul'))
            ->add('author', 'text', array('label' => 'Autor'))
            ->add('publishing', 'text', array('label' => 'Wydawtnictwo'))
            ->add('category', 'entity', array('mapped'   => true,
                                            'class'    => 'LibraryMainBundle:Category',
                                            'property' => 'name',
                                            'required' => false,
                                            'label' => 'Gatunek'))
            ->add('submit', 'submit', array('label' => 'Szukaj'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'required' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'library_mainbundle_search';
    }
}
