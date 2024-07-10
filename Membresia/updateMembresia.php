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

    $sent = $con->prepare("update membresia set monto=? where idUsuario=?");
    $result = $sent->execute([$jsonDatos->monto, $jsonDatos->idUsuario]);

    echo json_encode("Alta Correcta");
?>