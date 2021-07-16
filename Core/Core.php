<?php
namespace Core;

class Core
{
    private $route, $ctrlr, $action;
    public function run(){
        //hybride
            $url= substr($_SERVER['REQUEST_URI'], 7);
            include "/var/www/html/PiePHP/src/routes.php";
            $route= Router :: get($url);
            $ctrlr=ucfirst($route["controller"])."Controller";
            require_once("/var/www/html/PiePHP/src/Controller/$ctrlr.php");
            $ctrlr=new $ctrlr();
            $action=$route["action"];
            $ctrlr->$action();
        //dynamique
            
        // echo __CLASS__ . "[OK]" . PHP_EOL;
    }
}