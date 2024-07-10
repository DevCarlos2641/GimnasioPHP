<?php

    // header("Access-Control-Allow-Origin: https://project.cclmtechsolutions.online");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");
    
    include_once '../conexion.php';

    $jsonDatos = json_decode(file_get_contents('php://input'));
    if(!$jsonDatos)
        exit("No hay datos");
    

    $sent = $con->prepare("insert into membresia values(?, ?, ?, ?, ?)");
    $result = $sent->execute([$jsonDatos->idUsuario, $jsonDatos->fechaPago, $jsonDatos->fechaExpiracion,
                            $jsonDatos->monto, $jsonDatos->estudiante]);

    echo "Alta Correcta";
?>