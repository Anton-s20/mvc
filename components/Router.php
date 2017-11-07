<?php

class Router
{
	private $routes;

	private function getURI(){
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	public function run(){
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);

		$uri = $this->getURI();
		foreach ($this->routes as $uriPattern => $path) {
			if(strpos($uri, $path)  !== FALSE){

				$segments = explode('/', $path);

				$controllerName = array_shift($segments).'Controller';

				$controllerName = ucfirst($controllerName);

				$actionName = ucfirst((array_shift($segments)));
				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				if (file_exists($controllerFile)){
					include_once($controllerFile);
				}
				$controllerObject = new $controllerName;
				$result = $controllerObject->$actionName();
				if ($result != null){
					break;
				}

			}
		}
	}
}
?>