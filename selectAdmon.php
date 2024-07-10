<?php

    // header("Access-Control-Allow-Origin: https://project.cclmtechsolutions.online");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");
    
    include_once 'conexion.php';

    try{
        $jsonDatos = json_decode(file_get_contents('php://input'));
        if(!$jsonDatos)
            exit("No hay datos");
        
        $sent = $con->query("select * from admon where user = '$jsonDatos->user'");
        
        $array = [];
        foreach($sent as $values)
            array_push($array, $values);
        
        if(count($array) == 0){ 
            $sent = $con->query("select * from admon");
            $array = [];
            foreach($sent as $values)
                array_push($array, $values);
            echo json_encode(['', count($array)]);
        }
        else echo json_encode(["error"]);
        
    }catch(Exception $e){
        echo json_encode($e->getMessage());
        die();
    }
?>