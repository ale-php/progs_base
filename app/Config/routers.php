<?php

use Progs\Controller\HomeController;

$router->get('/', function(){

    return (new HomeController())->home();

});

?>