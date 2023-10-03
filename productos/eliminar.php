<?php
    include("../conexion/conexion.php");
    $id = $_GET["id"];

    $sqlProd = "SELECT * FROM `productos` WHERE `productos`.`id` = $id";
    $resultado = $conexion->query($sqlProd);
    if($resultado-> num_rows > 0){
        $producto = $resultado-> fetch_assoc();
        $imagen = $producto["imagen"];
        $sql = "DELETE FROM `productos` WHERE `productos`.`id` = $id";
        $conexion->query($sql);
        unlink($imagen);
        header("location: index.php");

    }else{
        echo "No existe el prducto con el id: ". $id;
    }
?>
