<?php

namespace MF\Controller;

abstract class Action{
	protected $view;

	public function __construct(){
		$this->view = new \stdClass();
	}

	protected function render($view){
		$classeAtual = get_class($this);
		$classeAtual = str_replace("App\\Controllers\\", '', $classeAtual );
		$classeAtual = strtolower(str_replace("Controller", '', $classeAtual));
		echo $classeAtual;
		require_once "../app/views/".$classeAtual."/".$view.".phtml";
	}
}
?>