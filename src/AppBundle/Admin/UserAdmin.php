<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('email');
        $formMapper->add('lastName');
        $formMapper->add('firstName');
        $formMapper->add('surName');
        $formMapper->add('status');
        $formMapper->add('birthDate');
        $formMapper->add('sex');

        $formMapper->add('country');
        $formMapper->add('city');

        $formMapper->add('workPlace');
        $formMapper->add('workPost');
        $formMapper->add('roles');

        $formMapper->add('password', 'password');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('lastName');
        $datagridMapper->add('firstName');
        $datagridMapper->add('email');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('lastName');
        $listMapper->add('firstName');
        $listMapper->add('email');
        $listMapper->add('workPlace');
    }

}