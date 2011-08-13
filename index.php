<?php

include('_lib/router.php');

$router = new Router();

$controller = $router->get_controller();
$param      = $router->get_param();

$router->init($controller, $param);

?>