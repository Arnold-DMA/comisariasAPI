<?php namespace App\Http\Controllers;
use App\MiModelo;

class MiControlador extends Controller{

	function index(){
		$modelo = new MiModelo();
		$resultado = $modelo->saludar("Jorge");
		return view("prueba/index",["saludo"=>$resultado]);
	}

	
}




 ?>