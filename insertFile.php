<?php

    // header('Access-Control-Allow-Origin: http://localhost:4200');
    // header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Origin: http://localhost:4200");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");
    
    include_once 'conexion.php';

    if(isset($_FILES['archivo'])){
        extract($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        //Definimos destino de archivos.
        $url = "Files/";

        // Obtenemos el nombre y la extenison del archivo
        $nombre_file = basename($_FILES["archivo"]["name"]);

        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $url.$nombre_file)){

            $sent = $con->prepare("insert into files values (?, ?, ?, ?)");
            $result = $sent->execute([$id, $nombre, $descripcion, $nombre_file]);
            if($result) echo "Excelente";
            else echo "Algo Salio Mal";
        } else echo "Algo Salio Mal";


    }

?>