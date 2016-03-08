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


    }

    public function render($view,$params = null){

        echo $this->twig->render($view.'.html.twig', $params);
    }

}