<?php 
    session_start();
    include("../conexion/conexion.php");
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);
    $array = mysqli_fetch_array($resultado);
    if($array){
        $nombre = $resultado->fetch_assoc();
        $_SESSION['usuario'] = $array;
        header("Location: ../index.php");


         
        /*if($array['id_rol'] == '1'){
            
        }else{
            header("Location: index.php");
        }*/

    } else {
        echo "No existe el usuario con el nombre: ". $nombre;
    }
?> 