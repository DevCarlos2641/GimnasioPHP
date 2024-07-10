<?php
    require 'vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;
    $key = "Gimnasio2024";

    function getToken($payload){
        global $key;
        return JWT::encode($payload, $key, 'HS256');
    }

    function verificToken(){
        global $key;
        $header = apache_request_headers();
        $token = $header['Authorization'];
        if($token){
            try {
                JWT::decode($token, new Key($key, 'HS256'));
                echo json_encode(["OK"]);
            } catch (Exception $e){
                echo json_encode(["ERROR"]);
            }
        } else echo json_encode(["ERROR"]);
    }

?>