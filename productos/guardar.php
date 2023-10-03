<?php
    include("../conexion/conexion.php");
    $descripcion = $_REQUEST["descripcion"];
    $estado = $_REQUEST["estado"] != null ? '1' : '0';

    if($_FILES["imagen"]['name'] != null){
        if($_FILES["imagen"]["error"]>0){
            echo "Error al cargar archivo.";
        }else{
            $nombreA = $_FILES["imagen"]["name"];
            $tipoA = $_FILES["imagen"]["type"];
            $tamanoA = $_FILES["imagen"]["size"];
            $tempA = $_FILES["imagen"]["tmp_name"];
            $carpeta = "files/";
            $nombreUnico = uniqid() . "_" . $nombreA;
            $ruta = $carpeta . $nombreUnico;
            $permitidos = array("image/png", "image/jpeg");

            if(in_array($tipoA, $permitidos)) {
                if(move_uploaded_file($tempA, $ruta)){
                    $sql = "INSERT INTO productos (descripcion, imagen, estado) VALUES ('$descripcion', '$ruta', '$estado')";
                    $conexion->query($sql);
                    header("location: index.php");
                }else{
                    echo "Error al subir la img";
                    ?><a href="formulario_crear.php">VOLVER</a><?php
                }
            }else{
                echo "Archivo no permitido";
                ?><a href="formulario_crear.php">VOLVER</a><?php
            }
        }
    }else{
        $sql = "INSERT INTO productos (descripcion, estado) VALUES ('$descripcion', '$estado')";
        $conexion->query($sql);
        header("location: index.php");
    }
?>


        


