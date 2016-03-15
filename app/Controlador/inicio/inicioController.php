<?php
namespace app\Controlador;
use app\Modelo\inicioController;
class c_inicio{
	function __construct(){
		$this->m=new m_inicio();
		}
	private $m;
	public function consultarEmpleado($P){
		$res=$this->m->consultarEmpleado($P);
		echo $res;
		}
	public function grabarEmpleado($P){		
		$res=$this->m->grabarEmpleado($P);
		echo $res;
		}
	public function editarEmpleado($P){
		$res=$this->m->editarEmpleado($P);
		echo $res;
		}
	public function borrarEmpleado($P){
		$res=$this->m->borrarEmpleado($P);
		echo $res;
		}
	}

$cInicio=new c_inicio();
switch($_POST["accion"]){
	case "consultarEmpleado":
		$cInicio->consultarEmpleado($_POST);
		break;
	case "guardarEmpleado":
		$cInicio->grabarEmpleado($_POST);
		break;
	case "editarEmpleado":
		$cInicio->editarEmpleado($_POST);
		break;
	case "borrarEmpleado":
		$cInicio->borrarEmpleado($_POST);
		break;
	}
?>