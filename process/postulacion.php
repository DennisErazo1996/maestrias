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
$pdfOK = false;
$mime_permitida = 'application/pdf';
$maxPesoFile = 5500000;
$ruta = '../documents/aspirantes/';
$ext = '.pdf';
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
        isset($_POST['salario']) && 
        isset($_POST['dedicaion']) && 
        isset($_POST['universidad1']) && 
        isset($_POST['lugar1']) && 
        isset($_POST['carrera1']) && 
        isset($_POST['anio_inicio1']) && 
        isset($_POST['anio_termino1']) && 
        isset($_POST['titulo1']) && 
        isset($_POST['tesis1']) && 
        isset($_POST['universidad2']) && 
        isset($_POST['lugar2']) && 
        isset($_POST['carrera2']) && 
        isset($_POST['anio_inicio2']) && 
        isset($_POST['anio_termino2']) && 
        isset($_POST['titulo2']) && 
        isset($_POST['tesis2']) && 
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
        isset($_POST['nombreR1']) && 
        isset($_POST['cargoR1']) && 
        isset($_POST['correoR1']) && 
        isset($_POST['nombreR2']) && 
        isset($_POST['cargoR2']) && 
        isset($_POST['correoR2']) && 
        isset($_POST['nombreR3']) && 
        isset($_POST['cargoR3']) && 
        isset($_POST['correoR3']) && 
        /*isset($_POST['espaniol']) && 
        isset($_POST['ingles']) && 
        isset($_POST['frances']) && 
        isset($_POST['aleman']) && 
        isset($_POST['portugues']) && 
        isset($_POST['otro_idioma']) && 
        isset($_POST['nivel_otro_idioma']) && */

        isset($_POST['lecturaEspaniol']) && 
        isset($_POST['lecturaIngles']) && 
        isset($_POST['lecturaOtros']) && 
        isset($_POST['escrituraEspaniol']) && 
        isset($_POST['escrituraIngles']) && 
        isset($_POST['escrituraOtros']) && 
        isset($_POST['conversacionEspaniol']) && 
        isset($_POST['conversacionIngles']) && 
        isset($_POST['conversacionOtros']) && 
        isset($_POST['fuente']) && 
        isset($_POST['p1']) && 
        isset($_POST['p2']) && 
        isset($_POST['p3']) && 
        isset($_POST['p4']) && 
        isset($_POST['p5']) && 
        isset($_POST['maestria']) && 
        isset($_FILES['pdf'])
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
        $salario = test_input($_POST['salario']);
        $dedicacion = test_input($_POST['dedicacion']);
        $universidad1 = test_input($_POST['universidad1']);
        $lugar1 = test_input($_POST['lugar1']);
        $carrera1 = test_input($_POST['carrera1']);
        $anio_inicio1 = test_input($_POST['anio_inicio1']);
        $anio_termino1 = test_input($_POST['anio_termino1']);
        $titulo1 = test_input($_POST['titulo1']);
        $tesis1 = test_input($_POST['tesis1']);
        $universidad2 = test_input($_POST['universidad2']);
        $lugar2 = test_input($_POST['lugar2']);
        $carrera2 = test_input($_POST['carrera2']);
        $anio_inicio2 = test_input($_POST['anio_inicio2']);
        $anio_termino2 = test_input($_POST['anio_termino2']);
        $titulo2 = test_input($_POST['titulo2']);
        $tesis2 = test_input($_POST['tesis2']);
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
        $nombreR1 = test_input($_POST['nombreR1']);
        $cargoR1 = test_input($_POST['cargoR1']);
        $correoR1 = test_input($_POST['correoR1']);
        $nombreR2 = test_input($_POST['nombreR2']);
        $cargoR2 = test_input($_POST['cargoR2']);
        $correoR2 = test_input($_POST['correoR2']);
        $nombreR3 = test_input($_POST['nombreR3']);
        $cargoR3 = test_input($_POST['cargoR3']);
        $correoR3 = test_input($_POST['correoR3']);
        /*$espaniol = test_input($_POST['espaniol']);
        $ingles = test_input($_POST['ingles']);
        $frances = test_input($_POST['frances']);
        $aleman = test_input($_POST['aleman']);
        $portugues = test_input($_POST['portugues']);
        $otro_idioma = test_input($_POST['otro_idioma']);
        $nivel_otro_idioma = test_input($_POST['nivel_otro_idioma']);*/
        $lecturaEspaniol = test_input($_POST['lecturaEspaniol']);
        $lecturaIngles = test_input($_POST['lecturaIngles']);
        $lecturaOtros = test_input($_POST['lecturaOtros']);
        $escrituraEspaniol = test_input($_POST['escrituraEspaniol']);
        $escrituraIngles = test_input($_POST['escrituraIngles']);
        $escrituraOtros = test_input($_POST['escrituraOtros']);
        $conversacionEspaniol = test_input($_POST['conversacionEspaniol']);
        $conversacionIngles = test_input($_POST['conversacionIngles']);
        $conversacionOtros = test_input($_POST['conversacionOtros']);
        $fuente = test_input($_POST['fuente']);
        $p1 = test_input($_POST['p1']);
        $p2 = test_input($_POST['p2']);
        $p3 = test_input($_POST['p3']);
        $p4 = test_input($_POST['p4']);
        $p5 = test_input($_POST['p5']);
        $maestria = test_input($_POST['maestria']);
        $pdfFile = $_FILES['pdf'];

        $response['estatus'] = true;
    }
}

// Validar PDF
if($response['estatus']){
    $response['estatus'] = false;

    $ruta_provisional = $pdfFile['tmp_name'];
    $peso = $pdfFile['size'];
    $nombre_original = $pdfFile["name"];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $ruta_provisional);

    if($mime !== $mime_permitida){
        $response['mensaje'] = 'Formato no soportado. El archivo debe estar en formato PDF [2]';
        unlink($ruta_provisional);
    } else if($peso > $maxPesoFile){
        $response['mensaje'] = 'Archivo muy pesado. El archivo debe tener un peso máximo de 5MB [2]';
        unlink($ruta_provisional);
    } else {
        $nombrePDF = hyphenize($apellido_paterno.' '.$apellido_materno.' '.$nombres).$ext;
        $pdfOK = true;
        $response['estatus'] = true;
    }
}

// Proceder
if($response['estatus']){
    $sql = '
    INSERT INTO `mca_postulacion` (
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
        `salario`,
        `dedicacion`,
        `universidad1`,
        `lugar1`,
        `carrera1`,
        `anio_inicio1`,
        `anio_termino1`,
        `titulo1`,
        `tesis1`,
        `universidad2`,
        `lugar2`,
        `carrera2`,
        `anio_inicio2`,
        `anio_termino2`,
        `titulo2`,
        `tesis2`,
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
        `correo_trabajo`,
        `nombrer1`,
        `cargor1`,
        `correor1`,
        `nombrer2`,
        `cargor2`,
        `correor2`,
        `nombrer3`,
        `cargor3`,
        `correor3`,
        `espaniol`,
        `lectura_espaniol`,
        `escritura_espaniol`,
        `conversacion_espaniol`,
        `lectura_ingles`,
        `escritura_ingles`,
        `conversacion_ingles`,
        `lectura_otros`,
        `escritura_otros`,
        `conversacion_otros`,
        `nivel_otro_idioma`,
        `fuente`,
        `p1`,
        `p2`,
        `p3`,
        `p4`,
        `p5`,
        `pdf`,
        `maestria`,
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
        :salario,
        :dedicacion,
        :universidad1,
        :lugar1,
        :carrera1,
        :anio_inicio1,
        :anio_termino1,
        :titulo1,
        :tesis1,
        :universidad2,
        :lugar2,
        :carrera2,
        :anio_inicio2,
        :anio_termino2,
        :titulo2,
        :tesis2,
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
        :nombreR1,
        :cargoR1,
        :correoR1,
        :nombreR2,
        :cargoR2,
        :correoR2,
        :nombreR3,
        :cargoR3,
        :correoR3,
        :lecturaEspaniol,
        :lecturaIngles,
        :lecturaOtros,
        :escrituraEspaniol,
        :escrituraIngles,
        :escrituraOtros,
        :conversacionEspaniol,
        :conversacionIngles,
        :conversacionOtros,
        :fuente,
        :p1,
        :p2,
        :p3,
        :p4,
        :maestria,
        :pdf,
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
    $statement->bindParam(':salario',$salario);
    $statement->bindParam(':dedicacion',$dedicacion);
    $statement->bindParam(':universidad1',$universidad1);
    $statement->bindParam(':lugar1',$lugar1);
    $statement->bindParam(':carrera1',$carrera1);
    $statement->bindParam(':anio_inicio1',$anio_inicio1);
    $statement->bindParam(':anio_termino1',$anio_termino1);
    $statement->bindParam(':titulo1',$titulo1);
    $statement->bindParam(':tesis1',$tesis1);
    $statement->bindParam(':universidad2',$universidad2);
    $statement->bindParam(':lugar2',$lugar2);
    $statement->bindParam(':carrera2',$carrera2);
    $statement->bindParam(':anio_inicio2',$anio_inicio2);
    $statement->bindParam(':anio_termino2',$anio_termino2);
    $statement->bindParam(':titulo2',$titulo2);
    $statement->bindParam(':tesis2',$tesis2);
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
    $statement->bindParam(':nombreR1',$nombreR1);
    $statement->bindParam(':cargoR1',$cargoR1);
    $statement->bindParam(':correoR1',$correoR1);
    $statement->bindParam(':nombreR2',$nombreR2);
    $statement->bindParam(':cargoR2',$cargoR2);
    $statement->bindParam(':correoR2',$correoR2);
    $statement->bindParam(':nombreR3',$nombreR3);
    $statement->bindParam(':cargoR3',$cargoR3);
    $statement->bindParam(':correoR3',$correoR3);
    $statement->bindParam(':espaniol',$espaniol);
    $statement->bindParam(':lecturaEspaniol', $lecturaEspaniol);
    $statement->bindParam(':lecturaIngles', $lecturaIngles);
    $statement->bindParam(':lecturaOtros', $lecturaOtros);
    $statement->bindParam(':escrituraEspaniol', $escrituraEspaniol);
    $statement->bindParam(':escrituraIngles', $escrituraIngles);
    $statement->bindParam(':escrituraOtros', $escrituraOtros);
    $statement->bindParam(':conversacionEspaniol', $conversacionEspaniol);
    $statement->bindParam(':conversacionIngles', $conversacionIngles);
    $statement->bindParam(':conversacionOtros', $conversacionOtros);
    $statement->bindParam(':fuente',$fuente);
    $statement->bindParam(':p1',$p1);
    $statement->bindParam(':p2',$p2);
    $statement->bindParam(':p3',$p3);
    $statement->bindParam(':p4',$p4);
    $statement->bindParam(':p5',$p5);
    $statement->bindParam(':maestria',$maestria);
    $statement->bindParam(':pdf',$nombrePDF);
    $statement->bindParam(':fecha',$fecha);
    $statement->bindParam(':hora',$hora);
    $statement->execute();
    $result = $statement->errorInfo();
    // var_dump($result);

    $response['mensaje'] = 'OK';
    move_uploaded_file($ruta_provisional, $ruta.$nombrePDF);
}

// Respuesta
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
