<?php
namespace App\Controllers;

class IndexController{

	private $view;

	public function __construct(){
		$this->view = new \stdClass();//classe nativa do PHP, a partir dela e possivel cria objetos padrões, semelhando ao Object do Java, std de standard.
	}

	public function index(){
		//index.phtml terá acesso ao array
		$this->view->dados = array('Sofá','Cadeira','Cama' );
		$this->render("index");
	}

	public function sobreNos(){
		$this->view->dados = array('Notebook','Mouse','Headset' );
		$this->render("sobreNos");
	}

	public function render($view){
		$classeAtual = get_class($this);
		$classeAtual = str_replace("App\\Controllers\\", '', $classeAtual );
		$classeAtual = strtolower(str_replace("Controller", '', $classeAtual));
		echo $classeAtual;
		require_once "../app/views/".$classeAtual."/".$view.".phtml";
	}
}

?>