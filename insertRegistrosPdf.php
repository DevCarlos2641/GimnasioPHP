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

    $sent = $con->prepare("insert into registrospdf values(?, ?, ?, ?, ?, ?)");
    $result = $sent->execute([$jsonDatos->idUsuario, $jsonDatos->folio, $jsonDatos->fechaPago,
                            $jsonDatos->monto, $jsonDatos->pago, $jsonDatos->cambio]);

    echo "Alta Exitosa";
?>