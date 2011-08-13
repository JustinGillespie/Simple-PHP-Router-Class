<?php

class Router_Interpreter {

	function __construct() {
	
		$uri = $_SERVER['REQUEST_URI'];
		$uri_format = (substr($uri, -1) == '/') ? $uri : $uri . '/';
		
		$request = explode('/', $uri_format);
		$script  = explode('/', $_SERVER['SCRIPT_NAME']);  

		for($i = 0; $i < sizeof($script); $i++) {	
			if($request[$i] == $script[$i]) { unset($request[$i]); }
		}
		
		$command_array =  array_values($request);
		$command_name  =  $command_array[0];
		$param 		   =  array_slice($command_array, 1);

		$this->command = new Router_Command($command_array[0], $param); 
		
	}
	
	function get_command() {
		return $this->command;
	}
	
} /* end of file */