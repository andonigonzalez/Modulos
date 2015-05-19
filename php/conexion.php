<?php

class Conexion{

	private $conexion;

	function __construct(){

		$host = "localhost";
		$user = "root";
		$pass = "Pant258alla";
		$bd = "milart";

		$conect = new mysqli($host, $user, $pass, $bd);

		if($conect->connect_error){
			die("Error al conectar con la BD");
		}
		else{
			$this->conexion = $conect;
			$this->conexion->query("set names 'utf8'");
		}

	}

	public function getConexion(){
		return $this->conexion;
	}

}

?>