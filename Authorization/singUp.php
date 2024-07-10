<?php

    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");

    include_once '../conexion.php';
    include_once 'Token.php';

    $jsonDatos = json_decode(file_get_contents('php://input'));

    $sent = $con->query("SELECT * FROM admon WHERE user = '$jsonDatos->user'");
    $num = $sent->num_rows;
    if($num > 0){
        echo json_encode(array("message"=>'Error', "status"=>''));
        exit();
    }

    $sent = $con->query("SELECT count(*) as count FROM admon");
    $num = mysqli_fetch_assoc($sent)['count'];
    $jsonDatos->idAdmon = $num;

    $sent = $con->prepare("INSERT INTO admon VALUES(?, ?, ?)");
    $result = $sent->execute([$jsonDatos->idAdmon, $jsonDatos->user, $jsonDatos->password]);
    
    echo json_encode(array("message"=> 'OK', "status"=> getToken((array)$jsonDatos)));

?>