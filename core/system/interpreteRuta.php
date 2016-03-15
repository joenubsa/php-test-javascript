<?php
namespace General;

class interpreteRuta{
    function __construct() {
        
    }
    private function interpretar(){
        $ruta=  filter_input("SERVER", "REQUEST_URI");
        echo debug_backtrace()[1]['function'];
    }
}