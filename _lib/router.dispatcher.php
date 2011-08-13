<?php

class Router_Dispatcher {

	var $command;
	
	function Router_Dispatcher($command) {
		$this->command = $command;
	}
	
	function Dispatch() {

		switch($this->command->get_command_name()) {
		
			case "home" : 
				die('Homepage (Controller)');
				break;
				
			case "about" : 
				die('This is the about me page.');
				break;
				
			case "" : 
				die('Hompage (Root)');
				break;				
				
			default : 
				die('404 Motherfucker.  Do you speak it?');
				break;					
				
		}

	} /* end dispatch */
	
} /* end of file */