<?php

namespace General;
use core\system\Server;

class app_core {
    protected $server;
    function __construct() {
        $this->registrarClases();
        $this->server = new Server();
    }

    private function registrarClases() {
        //print_r($_SERVER['REQUEST_URI']);
        spl_autoload_register(function($className) {
            if (!file_exists($className . ".php")) {
                throw new \Exception("La clase " . $className . " no pudo ser encontrada");
            }
            include $className . ".php";
        });
        return true;
    }

    private function registrarGlobales() {

    }

}
