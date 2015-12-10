<?php
namespace MiniModule\Controller;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController {
	public function indexAction(){
		return array ('nom'=>'tintin');
	}
	public function formAction(){
		
	}
}