<?php
namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action{

	public function index(){
		//index.phtml terá acesso ao array
		//$this->view->dados = array('Sofá','Cadeira','Cama' );

		$conn = Connection::getDb();
		$produto = new Produto($conn);

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render("index","layout2");
	}

	public function sobreNos(){
		//$this->view->dados = array('Notebook','Mouse','Headset' );
		$this->render("sobreNos","layout1");
	}

	
}

?>