<?php

    // header("Access-Control-Allow-Origin: https://cclmtechsolutions.online");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");

    include_once '../conexion.php';

    $result = $con->query("select * from membresia");
    $array = [];
    foreach($result as $values)
        array_push($array, $values);
    echo json_encode($array);
?>