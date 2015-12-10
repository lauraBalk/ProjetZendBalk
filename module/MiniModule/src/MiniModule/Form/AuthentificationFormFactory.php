<?php
namespace MiniModule\Form;

use Zend\Form\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;


class AuthentificationFormFactory implements  FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config_authentification_form');
        $factory = new Factory();
        $form = $factory->createForm( $config );
        return $form;
    }
}