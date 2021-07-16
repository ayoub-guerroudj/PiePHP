<?php
// include "Core.php";
spl_autoload_register(
    function ($class){
        $class= str_replace('\\', '/', $class);

        if(file_exists("$class.php")){
            require_once "$class.php";
        }elseif(file_exists("src/$class.php")){
            require_once "src/$class.php";
        }
    }
);
