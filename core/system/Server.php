<?php
namespace core\system;

class Server{
    
    private $s;
    
    function __construct(){
        $this->fetch();
        print_r($this->s);
    }
    private function fetch(){
        foreach($_SERVER as $llave => $valor){
            $this->s[$llave]=$valor;
        }
    }
    public function leer($llave){
        return $this->s[$llave];
    }
    
    public function cargar($llave, $valor){
        $this->s=[$llave => $valor];
    }
    
    public function volcarLlaves(){
        return array_keys($this->s);
    }
}