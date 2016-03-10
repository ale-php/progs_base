<?php

use Progs\Controller\HomeController;

$router->get('/', function(){

    return (new HomeController())->home();

});

$router->get('/hello/?/?', function($name,$nome2) {
    echo 'Hello ' . htmlentities($name.$nome2);
});

$router->mount('/site', function() use ($router) {

    $router->get('/artigos/?/?', function($nome ,$sobrenome){


        return (new HomeController())->artigos($nome,$sobrenome);

    });

    $router->get('/ebooks', function(){

        return (new HomeController())->ebooks();

    });

    $router->get('/contato', function(){

        return (new HomeController())->contatos();

    });


})

?>