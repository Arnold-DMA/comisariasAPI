<?php namespace App;

//use Illuminate\Foundation\Auth\User as Authenticatable;

class MiModelo /*extends Authenticatable*/{
	function saludar($nombre){
		return "hola $nombre";
	}
}