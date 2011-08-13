<?php

class Router_Command {

	var $command_name = "";
	var $param = array();
	
	function Router_Command($command_name, $param) {
		$this->command_name = $command_name;
		$this->param = $param;
	}
	
	function get_command_name() {
		return $this->command_name;
	}
	
	function get_param() {
		return $this->parameters;
	}
	
}
