<?php
namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

	public function index(){
		//index.phtml terá acesso ao array
		$this->view->dados = array('Sofá','Cadeira','Cama' );
		$this->render("index","layout2");
	}

	public function sobreNos(){
		$this->view->dados = array('Notebook','Mouse','Headset' );
		$this->render("sobreNos","layout1");
	}

	
}

?>