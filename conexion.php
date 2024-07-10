<?php

$con;

try{
    $con = new mysqli("localhost", "root", "", "gimnasio");
} catch(Exception $e){
    print "Error: ".$e->getMessage()."<br/>";
    die();
}
?>