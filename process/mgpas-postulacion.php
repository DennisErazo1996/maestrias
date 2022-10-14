<?php
/*
	Este proceso guarda en BD, los datos obtenidos de la postulación de MCA
*/

// Conexión
require_once('../class/conexion.php');
$dataConnection = new Conectar();
$connection = $dataConnection->getConexion();

// CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding');
header('Access-Control-Allow-Methods: POST');

// Functions
require_once('../functions/limpiaVariables.php');
require_once("../functions/fechaHora-server.php");
require_once("../functions/hyphenize.php");

// Determinación tiempo
$fechaHora = fechaHora();
$fecha = $fechaHora[0];
$hora = $fechaHora[1];

// Default
$response['estatus'] = false;
$response['mensaje'] = 'Proceso denegado';

// Validación origen
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(
        isset($_POST['apellido_paterno']) && 
        isset($_POST['apellido_materno']) && 
        isset($_POST['nombres']) && 
        isset($_POST['identidad']) && 
        isset($_POST['fnac']) && 
        isset($_POST['edad']) && 
        isset($_POST['genero']) && 
        isset($_POST['pais']) && 
        isset($_POST['ciudad']) && 
        isset($_POST['direccion']) && 
        isset($_POST['telefono']) && 
        isset($_POST['celular']) && 
        isset($_POST['correo']) && 
        isset($_POST['universidad1']) && 
        isset($_POST['lugar1']) && 
        isset($_POST['carrera1']) && 
        isset($_POST['anio_inicio1']) && 
        isset($_POST['anio_termino1']) && 
        isset($_POST['titulo1']) && 
        isset($_POST['universidad2']) && 
        isset($_POST['lugar2']) && 
        isset($_POST['carrera2']) && 
        isset($_POST['anio_inicio2']) && 
        isset($_POST['anio_termino2']) && 
        isset($_POST['titulo2']) &&
        isset($_POST['institucion1']) && 
        isset($_POST['localidad1']) && 
        isset($_POST['cargo1']) && 
        isset($_POST['desde1']) && 
        isset($_POST['hasta1']) && 
        isset($_POST['institucion2']) && 
        isset($_POST['localidad2']) && 
        isset($_POST['cargo2']) && 
        isset($_POST['desde2']) && 
        isset($_POST['hasta2']) && 
        isset($_POST['institucion3']) && 
        isset($_POST['localidad3']) && 
        isset($_POST['cargo3']) && 
        isset($_POST['desde3']) && 
        isset($_POST['hasta3']) && 
        isset($_POST['institucion']) && 
        isset($_POST['cargo']) && 
        isset($_POST['pais_trabajo']) && 
        isset($_POST['ciudad_trabajo']) && 
        isset($_POST['telefono_trabajo']) && 
        isset($_POST['correo_trabajo']) && 
        isset($_POST['espaniol']) && 
        isset($_POST['ingles']) && 
        isset($_POST['frances']) && 
        isset($_POST['aleman']) && 
        isset($_POST['portugues']) && 
        isset($_POST['otro_idioma']) && 
        isset($_POST['nivel_otro_idioma']) && 
        isset($_POST['fuente']) && 
        isset($_POST['p1'])
    ){

        $apellido_paterno = test_input($_POST['apellido_paterno']);
        $apellido_materno = test_input($_POST['apellido_materno']);
        $nombres = test_input($_POST['nombres']);
        $identidad = test_input($_POST['identidad']);
        $fnac = test_input($_POST['fnac']);
        $edad = test_input($_POST['edad']);
        $genero = test_input($_POST['genero']);
        $pais = test_input($_POST['pais']);
        $ciudad = test_input($_POST['ciudad']);
        $direccion = test_input($_POST['direccion']);
        $telefono = test_input($_POST['telefono']);
        $celular = test_input($_POST['celular']);
        $correo = test_input($_POST['correo']);
        $universidad1 = test_input($_POST['universidad1']);
        $lugar1 = test_input($_POST['lugar1']);
        $carrera1 = test_input($_POST['carrera1']);
        $anio_inicio1 = test_input($_POST['anio_inicio1']);
        $anio_termino1 = test_input($_POST['anio_termino1']);
        $titulo1 = test_input($_POST['titulo1']);
        $universidad2 = test_input($_POST['universidad2']);
        $lugar2 = test_input($_POST['lugar2']);
        $carrera2 = test_input($_POST['carrera2']);
        $anio_inicio2 = test_input($_POST['anio_inicio2']);
        $anio_termino2 = test_input($_POST['anio_termino2']);
        $titulo2 = test_input($_POST['titulo2']);
        $institucion1 = test_input($_POST['institucion1']);
        $localidad1 = test_input($_POST['localidad1']);
        $cargo1 = test_input($_POST['cargo1']);
        $desde1 = test_input($_POST['desde1']);
        $hasta1 = test_input($_POST['hasta1']);
        $institucion2 = test_input($_POST['institucion2']);
        $localidad2 = test_input($_POST['localidad2']);
        $cargo2 = test_input($_POST['cargo2']);
        $desde2 = test_input($_POST['desde2']);
        $hasta2 = test_input($_POST['hasta2']);
        $institucion3 = test_input($_POST['institucion3']);
        $localidad3 = test_input($_POST['localidad3']);
        $cargo3 = test_input($_POST['cargo3']);
        $desde3 = test_input($_POST['desde3']);
        $hasta3 = test_input($_POST['hasta3']);
        $institucion = test_input($_POST['institucion']);
        $cargo = test_input($_POST['cargo']);
        $pais_trabajo = test_input($_POST['pais_trabajo']);
        $ciudad_trabajo = test_input($_POST['ciudad_trabajo']);
        $telefono_trabajo = test_input($_POST['telefono_trabajo']);
        $correo_trabajo = test_input($_POST['correo_trabajo']);
        $espaniol = test_input($_POST['espaniol']);
        $ingles = test_input($_POST['ingles']);
        $frances = test_input($_POST['frances']);
        $aleman = test_input($_POST['aleman']);
        $portugues = test_input($_POST['portugues']);
        $otro_idioma = test_input($_POST['otro_idioma']);
        $nivel_otro_idioma = test_input($_POST['nivel_otro_idioma']);
        $fuente = test_input($_POST['fuente']);
        $p1 = test_input($_POST['p1']);
    

        $response['estatus'] = true;
    }
}


// Proceder
if($response['estatus']){
    $sql = '
    INSERT INTO `mgpas_postulacion` (
        `apellido_paterno`,
        `apellido_materno`,
        `nombres`,
        `identidad`,
        `fnac`,
        `edad`,
        `genero`,
        `pais`,
        `ciudad`,
        `direccion`,
        `telefono`,
        `celular`,
        `correo`,
        `universidad1`,
        `lugar1`,
        `carrera1`,
        `anio_inicio1`,
        `anio_termino1`,
        `titulo1`,
        `universidad2`,
        `lugar2`,
        `carrera2`,
        `anio_inicio2`,
        `anio_termino2`,
        `titulo2`,
        `institucion1`,
        `localidad1`,
        `cargo1`,
        `desde1`,
        `hasta1`,
        `institucion2`,
        `localidad2`,
        `cargo2`,
        `desde2`,
        `hasta2`,
        `institucion3`,
        `localidad3`,
        `cargo3`,
        `desde3`,
        `hasta3`,
        `institucion`,
        `cargo`,
        `pais_trabajo`,
        `ciudad_trabajo`,
        `telefono_trabajo`,
        `correo_trabajo`
        `espaniol`,
        `ingles`,
        `frances`,
        `aleman`,
        `portugues`,
        `otro_idioma`,
        `nivel_otro_idioma`,
        `fuente`,
        `p1`,
        `fecha`,
        `hora`
    )
    VALUES (
        :apellido_paterno,
        :apellido_materno,
        :nombres,
        :identidad,
        :fnac,
        :edad,
        :genero,
        :pais,
        :ciudad,
        :direccion,
        :telefono,
        :celular,
        :correo,
        :universidad1,
        :lugar1,
        :carrera1,
        :anio_inicio1,
        :anio_termino1,
        :titulo1,
        :universidad2,
        :lugar2,
        :carrera2,
        :anio_inicio2,
        :anio_termino2,
        :titulo2,
        :institucion1,
        :localidad1,
        :cargo1,
        :desde1,
        :hasta1,
        :institucion2,
        :localidad2,
        :cargo2,
        :desde2,
        :hasta2,
        :institucion3,
        :localidad3,
        :cargo3,
        :desde3,
        :hasta3,
        :institucion,
        :cargo,
        :pais_trabajo,
        :ciudad_trabajo,
        :telefono_trabajo,
        :correo_trabajo,
        :espaniol,
        :ingles,
        :frances,
        :aleman,
        :portugues,
        :otro_idioma,
        :nivel_otro_idioma,
        :fuente,
        :p1,
        :fecha,
        :hora
    )';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':apellido_paterno',$apellido_paterno);
    $statement->bindParam(':apellido_materno',$apellido_materno);
    $statement->bindParam(':nombres',$nombres);
    $statement->bindParam(':identidad',$identidad);
    $statement->bindParam(':fnac',$fnac);
    $statement->bindParam(':edad',$edad);
    $statement->bindParam(':genero',$genero);
    $statement->bindParam(':pais',$pais);
    $statement->bindParam(':ciudad',$ciudad);
    $statement->bindParam(':direccion',$direccion);
    $statement->bindParam(':telefono',$telefono);
    $statement->bindParam(':celular',$celular);
    $statement->bindParam(':correo',$correo);
    $statement->bindParam(':universidad1',$universidad1);
    $statement->bindParam(':lugar1',$lugar1);
    $statement->bindParam(':carrera1',$carrera1);
    $statement->bindParam(':anio_inicio1',$anio_inicio1);
    $statement->bindParam(':anio_termino1',$anio_termino1);
    $statement->bindParam(':titulo1',$titulo1);
    $statement->bindParam(':universidad2',$universidad2);
    $statement->bindParam(':lugar2',$lugar2);
    $statement->bindParam(':carrera2',$carrera2);
    $statement->bindParam(':anio_inicio2',$anio_inicio2);
    $statement->bindParam(':anio_termino2',$anio_termino2);
    $statement->bindParam(':titulo2',$titulo2);
    $statement->bindParam(':institucion1',$institucion1);
    $statement->bindParam(':localidad1',$localidad1);
    $statement->bindParam(':cargo1',$cargo1);
    $statement->bindParam(':desde1',$desde1);
    $statement->bindParam(':hasta1',$hasta1);
    $statement->bindParam(':institucion2',$institucion2);
    $statement->bindParam(':localidad2',$localidad2);
    $statement->bindParam(':cargo2',$cargo2);
    $statement->bindParam(':desde2',$desde2);
    $statement->bindParam(':hasta2',$hasta2);
    $statement->bindParam(':institucion3',$institucion3);
    $statement->bindParam(':localidad3',$localidad3);
    $statement->bindParam(':cargo3',$cargo3);
    $statement->bindParam(':desde3',$desde3);
    $statement->bindParam(':hasta3',$hasta3);
    $statement->bindParam(':institucion',$institucion);
    $statement->bindParam(':cargo',$cargo);
    $statement->bindParam(':pais_trabajo',$pais_trabajo);
    $statement->bindParam(':ciudad_trabajo',$ciudad_trabajo);
    $statement->bindParam(':telefono_trabajo',$telefono_trabajo);
    $statement->bindParam(':correo_trabajo',$correo_trabajo);
    $statement->bindParam(':espaniol',$espaniol);
    $statement->bindParam(':ingles',$ingles);
    $statement->bindParam(':frances',$frances);
    $statement->bindParam(':aleman',$aleman);
    $statement->bindParam(':portugues',$portugues);
    $statement->bindParam(':otro_idioma',$otro_idioma);
    $statement->bindParam(':nivel_otro_idioma',$nivel_otro_idioma);
    $statement->bindParam(':fuente',$fuente);
    $statement->bindParam(':p1',$p1);
    $statement->bindParam(':fecha',$fecha);
    $statement->bindParam(':hora',$hora);
    $statement->execute();
    $result = $statement->errorInfo();
    // var_dump($result);

    $response['mensaje'] = 'OK';
}

// Respuesta
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
