<?php
namespace General;
class app_core{
    function __construct(){
        $this->registerClasses();
    }
    private function registerClasses(){
        print_r($_SERVER['REQUEST_URI']);
        spl_autoload_register(function($className){
            if(!file_exists($className . ".php")){
                throw new Exception("La clase " . $className . " no pudo ser encontrada");
            }
            include $className . ".php";
        });
    }
    
}


