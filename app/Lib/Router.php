<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 10/03/16
 * Time: 14:21
 */

namespace Progs\Lib;


use Bramus\Router\Router as BaseRouter;


class Router extends BaseRouter{



    public function get($pattern, $fn) {


        if($pattern == '/') {
            $this->match('GET', $pattern, $fn);
        }else{


          $pattern = str_replace('?','(\w+)?',$pattern);

                $this->match('GET',$pattern,$fn);
            }




    }



}
