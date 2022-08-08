<?php
/*
	Este proceso envía correo cuando se hace un registro de interesado en el front
*/

// CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

// Functions
require_once('../functions/limpiaVariables.php');
require_once("../functions/fechaHora-server.php");

// Mailing
require_once("../mailing/contactenos.php");

// Determinación tiempo
$fechaHora = fechaHora();
$fecha = $fechaHora[0];
$hora = $fechaHora[1];

// Default
$response["estatus"] = false;
$response["mensaje"] = "Proceso denegado";

// Validación origen
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		// Recepción de la data
		$fp = fopen('php://input', 'r');
		$rawData = stream_get_contents($fp);
		$data = json_decode($rawData, true);
		
		// Validación de campos
		if(
			isset($data["nombre"]) &&
			isset($data["correo"]) &&
			isset($data["telefono"]) &&
			isset($data["maestria"]) &&
			isset($data["mensaje"]) 
		)
		{
			$nombre = test_input($data["nombre"]);
			$correo = test_input($data["correo"]);
			$telefono = test_input($data["telefono"]);
			$maestria = test_input($data["maestria"]);
			$mensaje = test_input($data["mensaje"]);		
			$response["estatus"] = true;
		}
	}
}

// Proceder
if($response["estatus"]){	
    // Envía mensaje a personal
	if(strrpos($_SERVER['SERVER_NAME'],"localhost") === false){
        enviaCorreo($nombre,$correo,$telefono,$maestria,$mensaje,$fecha,$hora);
	}
	$response["estatus"] = true;
	$response["mensaje"] = 'OK';
}

// Respuesta
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
