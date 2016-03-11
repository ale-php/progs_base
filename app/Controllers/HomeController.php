<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 06/03/16
 * Time: 17:48
 */

namespace Progs\Controller;

use Progs\Lib\BaseController;

class HomeController extends BaseController
{

    public function home()
    {

        $this->render('home/home',['msg'=>'Seja bem vindo ']);
    }


    
}