<?php

namespace General;
include "core/app_core.php";
use app\Controlador\Controlador;
class index {

    function __construct() {
        $this->inicializarApp();
    }

    private function inicializarApp() {
        $core = new app_core();
        $C = new Controlador;
        $C->iniciarApp();
    }

}

new index;
