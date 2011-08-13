<?php

include('_lib/router.command.php');
include('_lib/router.interpreter.php');
include('_lib/router.dispatcher.php');

$interpreter =  new Router_Interpreter();
$command     =  $interpreter->get_command();
$dispatch    =  new Router_Dispatcher($command);

$dispatch->Dispatch();

?>