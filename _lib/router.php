<?php

class Router {

	var $controller = "";
	var $param = array();

	function __construct() {
	
		$uri = $_SERVER['REQUEST_URI'];
		$uri_format = (substr($uri, -1) == '/') ? $uri : $uri . '/';
		
		$request = explode('/', $uri_format);
		$script  = explode('/', $_SERVER['SCRIPT_NAME']);  

		for($i = 0; $i < sizeof($script); $i++) {	
			if($request[$i] == $script[$i]) { unset($request[$i]); }
		}
		
		$controller_array =  array_values($request);
		$controller    =  $controller_array[0];
		$param 		   =  array_slice($controller_array, 1);
		
		$this->controller = $controller;
		$this->param = $param;
		
	}

	function init($controller, $param) {
		
		switch($controller) {
		
			case "home" : 
				echo "Homepage Controller<br><br>";
				print_r($param);
				break;
				
			case "about" : 
				die('This is the about me page.');
				print_r($param);
				break;
				
			case "" : 
				die('Hompage (Root)');
				print_r($param);
				break;				
				
			default : 
				die('404 Motherfucker.  Do you speak it?');
				print_r($param);
				break;					
				
		}
		
	}
	
	function get_controller() {
		return $this->controller;
	}
	
	function get_param() {
		return $this->param;
	}
	
	
	
	
	

}