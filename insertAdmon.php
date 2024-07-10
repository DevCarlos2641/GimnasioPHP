<?php

    // hheader("Access-Control-Allow-Origin: https://project.cclmtechsolutions.online");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");
    
    include_once 'conexion.php';

    $jsonDatos = json_decode(file_get_contents('php://input'));
    if(!$jsonDatos){
        exit("No hay datos");
    }

    $sent = $con->prepare("insert into admon values(?, ?, ?)");
    $result = $sent->execute([$jsonDatos->idAdmon, $jsonDatos->user, $jsonDatos->password]);

    echo json_encode(["Ok"]);
?>