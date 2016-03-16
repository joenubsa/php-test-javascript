<?php

namespace app\Controlador;
use General\app_core;

class Controlador extends app_core{
    function __construct() {
        
    }

    public function iniciarApp() {
        echo $this->cargarModulo();
    }

    private function cargarModulo() {
        var_dump($this->server);
        $RequestUri = substr($_SERVER['REQUEST_URI'], 1);
        $modulo = substr($RequestUri, 0, strpos($RequestUri, '/'));        
    }

    private function cargarHTML() {
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        $RequestUri = substr($_SERVER['REQUEST_URI'], 1);
        $PaginaSolicitada = $RequestUri ? $RequestUri : "inicio";
        print_r($PaginaSolicitada);
        $pagina = file_get_contents('app/vista/pagmaestra.html');
        $modulo = file_get_contents('app/vista/forma/f.' . $PaginaSolicitada . '.html'); //si el sistema tuviese más de un módulo, aqui pondría una variable. pero el requerimiento consiste sólo en un módulo
        $pagina = str_replace('##CONTENIDOS##', $modulo, $pagina);
        return $pagina;
    }
    
    private function leer($o){
        
    }
    
    private function leerRouter(){
        
    }
    

}

?>