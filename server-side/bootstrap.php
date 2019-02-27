<?php

/** do routing **/

if( ! function_exists('run')){
	function run($routes){
		$method = strtolower($_SERVER['REQUEST_METHOD']);
		$uri = $_SERVER['REQUEST_URI'];
		$requestUri = explode('?', $uri);

		$route = $method . ':' . $requestUri[0];

		if( ! isset($routes[$route])) {
			return response(404);
		}//endif

		if(isset($routes[$route])) {

			return $routes[$route]();
		}//endif
	}//endfunction
}//endif