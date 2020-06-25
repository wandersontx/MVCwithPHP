<?php
namespace App;
class Route{

	private $routes;

	public function getRoutes()
	{
		return $this->routes;
	}

	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	public function __construct()
	{
		$this->iniRoutes();
		$this->run($this->getUrl());
	}

	public function iniRoutes()
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

	public function run($url)
	{
		foreach ($this->getRoutes() as $key => $routes) {
			if($url == $routes['route']){
				$class = "App\\Controllers\\".ucfirst($routes['controller']);

				$controller = new $class;
				$action = $routes['action'];
				$controller->$action();
			}
		}
	}

	public function getUrl()
	{
		return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
	}
}
?>
