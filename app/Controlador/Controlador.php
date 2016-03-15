<?php
namespace app\controlador;
class Controlador{
	function __construct(){}
	public function iniciarApp(){
		echo $this->cargarHTML();
		}
	private function cargarHTML(){
		$pagina=file_get_contents('app/vista/pagmaestra.html');
		$modulo=file_get_contents('app/vista/forma/f.inicio.html');//si el sistema tuviese más de un módulo, aqui pondría una variable. pero el requerimiento consiste sólo en un módulo
		$pagina=str_replace('##CONTENIDOS##',$modulo,$pagina);
		return $pagina;
		}
	}
?>