<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "db_crud";
    $conexion = new mysqli($servidor, $usuario, $password, $db);
    if($conexion->connect_error){
        die("Hubo un error en la conexion." . $conexion->connect_error);
    }else{
        echo "Ok.";
    }

?>