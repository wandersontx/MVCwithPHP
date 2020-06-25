<?php
namespace App;
class Route{

	public function iniRoutes()
	{
		$routes['home'] = array(
			'route' => '/', //rota raiz
			'controller' => 'indexController',//controle do home
			'action' => 'index' //ação disparada quando '/' for disparada para o indexController
		);
		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' =>'sobreNos'
		);
	}

	public function getUrl(){
		return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
	}
}
?>
