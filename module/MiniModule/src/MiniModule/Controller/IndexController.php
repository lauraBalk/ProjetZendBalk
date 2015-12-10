<?php
namespace MiniModule\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Form\Factory;
use Zend\Form\Form;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController {
	public function indexAction(){
		return array ('nom'=>'tintin');
	}
	public function formAction(){

        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\Authentification');
        $validator= new Zend\I18n\Validator\Alpha();
        if ($validator->isValid ('Abcd')) {
        	//OK cest bon


        }else {

        	//Pas bon

        }

         return array( 'form' => $form );
	}
}