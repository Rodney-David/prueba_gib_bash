<?php
    include("../conexion/conexion.php");

    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $edad = $_REQUEST["edad"];
    $telefono = $_REQUEST["telefono"];
    $correo = $_REQUEST["correo"];
    $id_rol = '2';
    $password = $_REQUEST["password"];
    $estado = $_REQUEST["estado"];

    
    if(strlen($telefono) == 10 ){
        $sql = "insert into usuarios(nombre, apellido, edad, telefono, correo, id_rol, password, estado) 
        values('$nombre' , '$apellido', '$edad', '$telefono', '$correo', '$id_rol', '$password', '$estado')";
        $conexion->query($sql);
        header("location: ../login/");
    }else{
        ?> <h1>Error en la cantidad de caracteres en telefono. [Ingrese 10 caracteres.]</h1>
        <a class="btn btn-primary" href="formulario_crear.php" role="button">Regresar</a><?php
    }
?>