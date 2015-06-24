<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ExperienceAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('dateAdd')
            ->add('idUser', 'entity',array('class' => 'Application\Sonata\UserBundle\Entity\User'))
            ->add('isValid')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('dateAdd')
            ->add('idUser')
            ->add('isValid')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name', null, array('editable' => true))
            ->add('dateAdd')
            ->add('idUser', 'entity',array('class' => 'Application\Sonata\UserBundle\Entity\User'))
            ->add('isValid', null, array('editable' => true))
        ;
    }
}