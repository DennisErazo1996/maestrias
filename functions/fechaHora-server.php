<?php
function fechaHora(){
	// Determinación tiempo
	date_default_timezone_set('America/Tegucigalpa');
	$fechaHora = getdate();
	$anio = $fechaHora["year"];
	$mes = $fechaHora["mon"];
	$dia = $fechaHora["mday"];
	if($mes < 10){$mes = "0".$mes;}
	if($dia < 10){$dia = "0".$dia;}
	$fecha = $anio."-".$mes."-".$dia;
	$horas = $fechaHora["hours"];
	$minutos = $fechaHora["minutes"];
	$segundos = $fechaHora["seconds"];
	if($horas < 10){$horas = "0".$fechaHora["hours"];}
	if($minutos < 10){$minutos = "0".$fechaHora["minutes"];}
	if($segundos < 10){$segundos = "0".$fechaHora["seconds"];}
	$hora = $horas.":".$minutos.":".$segundos;
	
	return [$fecha,$hora];
}
?>