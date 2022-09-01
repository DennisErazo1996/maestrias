<?php
class Conectar{
	public function getConexion(){
		try{
			$dsn = 'mysql:host=localhost;dbname=maestriasBD;charset=utf8mb4';
			$usuario = 'maestriasUBD';
			$clave = '+*-SiMeVienesABuscarMeEncontras987-*+';
			$opciones = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
			);
			$conexion = new PDO($dsn,$usuario,$clave,$opciones);
			return $conexion;
		}
		catch(Exception $e){
			return 'Error';
		}
	}
}