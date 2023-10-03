<?php
    include("../conexion/conexion.php");
    $id = $_POST["id"];
    $descripcion = $_POST["descripcion"];
    $estado = $_REQUEST["estado"] != null ? '1' : '0';
    $sqlProd = "SELECT * FROM `productos` WHERE `productos`.`id` = $id";
    $resultado = $conexion->query($sqlProd);
    $producto = $resultado-> fetch_assoc();
    $imagenA = $producto["imagen"];

    if($_FILES["imagen"]["error"]>0){
        $sql = "UPDATE `productos` SET descripcion = '$descripcion', estado = '$estado' WHERE id= $id";
        $conexion->query($sql);
        header("location: index.php");
    }else{
        $nombreA = $_FILES["imagen"]["name"];
        $tipoA = $_FILES["imagen"]["type"];
        $tempA = $_FILES["imagen"]["tmp_name"];
        $carpeta = "files/";
        $nombreUnico = uniqid() . "_" . $nombreA;
        $ruta = $carpeta . $nombreUnico;
        $permitidos = array("image/png", "image/jpeg");

        if(in_array($tipoA, $permitidos)) {
            if(move_uploaded_file($tempA, $ruta)){
                $sql = "UPDATE `productos` SET descripcion = '$descripcion', imagen = '$ruta', estado = '$estado' WHERE id= $id";
                $conexion->query($sql);
                unlink($imagenA);
                header("location: index.php");
            }else{
                echo "Error al subir la img";
            }
        }else{
            echo "Archivo no permitido";
        }
    }
?>
