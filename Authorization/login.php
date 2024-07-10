<?php

    // header("Access-Control-Allow-Origin: https://project.cclmtechsolutions.online");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");
    
    include_once '../conexion.php';
    include_once 'Token.php';

    $jsonDatos = json_decode(file_get_contents('php://input'));

    $sent = $con->query("select * from admon where user = '$jsonDatos->user' and password = '$jsonDatos->password'");

    $row = mysqli_fetch_assoc($sent);
    if($row) echo json_encode([getToken($row)]);
    else echo json_encode(["error"]);
?>