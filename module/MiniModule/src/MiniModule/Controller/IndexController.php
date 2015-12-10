<?php
namespace MiniModule\Controller;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController {
	public function indexAction(){
		return array ('nom'=>'tintin');
	}
	public function formAction(){
		 /*$configForm = array(
           'elements' => array(
                // la saisie du login (type text)
                array(
                    'spec' => array(
                        'type' => 'Zend\Form\Element\Text',
                        'name' => 'log',
                        'attributes' => array(
                            'size' => '20',
                        ),
                        'options' => array(
                          'label' => 'Login : ',
                        ),
                    ),
                ),
                // le boutton de validation
                array(
                    'spec' => array(
                        'type' => 'Zend\Form\Element\Submit',
                        'name' => 'submit',
                        'attributes' => array(
                            'value' => 'Suite',
                        ),
                    ),
                ),
            ),
        );

        $factory = new Factory();
        $form = $factory->createForm( $configForm );*/
        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\Authentification');

         return array( 'form' => $form );
	}
}