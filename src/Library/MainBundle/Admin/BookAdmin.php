<?php

namespace Library\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of BookAdmin
 *
 * @author Piotrek
 */
class BookAdmin extends Admin {
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $image = $this->getSubject();

        // use $fileFieldOptions so we can add other options to the field
        $fileFieldOptions = array('required' => false);
        if ($image && ($webPath = $image->getWebPath())) {
            // get the container so the full path to the image can be set
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath().'/'.$webPath;

            // add a 'help' option containing the preview's img tag
            $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
        }
        $fileFieldOptions['label'] = 'Zdjecie slajdera';
        
        $formMapper
            ->add('name', null, array('label' => 'Tytul'))
            ->add('year', 'integer', array('label' => 'Rok wydania'))
            ->add('author', null, array('label' => 'Autor'))
            ->add('publishing', null, array('label' => 'Wydawnictwo'))
            ->add('description', 'text', array('label' => 'Opis'))
            ->add('category', 'entity', array('class' => 'Library\MainBundle\Entity\Category'))
            ->add('file', 'file', $fileFieldOptions)
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('year')
            ->add('author')
            ->add('publishing')
            ->add('description')
            ->add('category')
            ->add('path')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('author')
            ->add('year')
            ->add('publishing')
            ->add('description')
            ->add('category')
            ->add('path')
        ;
    }
}
