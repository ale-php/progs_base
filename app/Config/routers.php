<?php

use Progs\Controller\HomeController;

$router->get('/?', function($nome){

    return (new HomeController())->home($nome);

});


$router->mount('/site', function() use ($router) {

    $router->get('/artigos/?/?', function($nome ,$sobrenome){


        return (new HomeController())->artigos($nome,$sobrenome);

    });




});

//erro 404

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
   return (new \Progs\Lib\BaseController())->error404();
});
?>