<?php
namespace App;
use MF\Init\Bootstrap;

class Route  extends Bootstrap{

	protected function initRoutes()
	{
		$routes['home'] = array(
			'route' => '/', //rota raiz
			'controller' => 'indexController',//Para onde a rota aponta
			'action' => 'index' //e para metodo
		);
		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' =>'sobreNos'
		);

		$this->setRoutes($routes);
	}

	

	
}
?>
