<?php

    // header("Access-Control-Allow-Origin: https://project.cclmtechsolutions.online");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");

    include_once 'conexion.php';

    $jsonDatos = json_decode(file_get_contents('php://input'));
    if(!$jsonDatos)
        exit("No hay datos");

    $result = $con->query("insert into asistencia values(?, ?, ?, ?)");
    $result = $sent->execute([$jsonDatos->fecha, $jsonDatos->hora, $jsonDatos->idUsuario, $jsonDatos->servicio]);

    echo json_encode(["Asistencia"]);
?>