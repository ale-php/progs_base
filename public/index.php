<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 06/03/16
 * Time: 11:26
 */



//AutoLoader do Composer
$loader = require '../vendor/autoload.php';

//vamos adicionar nossas classes ao AutoLoader
//$loader->add('DoctrineNaPratica', __DIR__.'/app/Models');





// Create Router instance
$router = new \Bramus\Router\Router();


// Define routes
require '../conf.php';
require '../app/Config/routers.php';
require '../app/Config/db.php';

// Run it!
$router->run();

