<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 06/03/16
 * Time: 18:46
 */

namespace Progs\Lib;

use Twig_Loader_Filesystem;
use Twig_Environment;
use Progs\Lib\Progs_Extension;

class BaseController
{


    private $loader;
    private $twig;


    function __construct()
    {

        $this->loader = new Twig_Loader_Filesystem( BASEPATCH.'/app/resources/view');
        $this->twig = new Twig_Environment($this->loader, array(
            'cache' => BASEPATCH.'/app/resources/cache',
        ));
        $this->twig->addExtension(new Progs_Extension());


    }

    public function render($view,$params = array()){

        echo $this->twig->render($view.'.html.twig', $params);
    }


    public function error404(){

        $this->render('error/404');
    }


}