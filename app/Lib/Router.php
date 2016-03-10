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

    private $params;

    public function get($pattern, $fn) {


        if($pattern == '/') {
            $this->match('GET', $pattern, $fn);
        }else{


          $pattern = str_replace('?','(\w+)?',$pattern);

                $this->match('GET',$pattern,$fn);
            }





    }

    private function clean_string($string) {

        if($string){
            $string = str_replace(array('á','à','â','ã'),"a",$string);
            $string = str_replace(array('Á','À','Â','Ã'),"A",$string);
            $string = str_replace(array('é','è','ê'),"e",$string);
            $string = str_replace(array('É','È','Ê'),"E",$string);
            $string = str_replace(array('í','ì'),"i",$string);
            $string = str_replace(array('Í','Ì'),"I",$string);
            $string = str_replace(array('ó','ò','ô','õ','º'),"o",$string);
            $string = str_replace(array('Ó','Ò','Ô','Õ'),"O",$string);
            $string = str_replace(array('ú','ù','û'),"u",$string);
            $string = str_replace(array('Ú','Ù','Û'),"U",$string);
            $string = str_replace("ç","c",$string);
            $string = str_replace("Ç","C",$string);
            $string = str_replace(array('[',']','[','}','{',')'
            ,'(',',',':',',',';','!','*','%','~','^','-',"'",'`','&',
                '#',']','"',','),"",$string);
             $string = str_replace(" ","",$string);
            //  $string = str_replace(" ","_",$string);

            return $string;
        }
    }

}
