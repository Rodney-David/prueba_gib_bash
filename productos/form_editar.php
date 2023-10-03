<?php
    include("../plantilla_cabecera.php");
    include("../conexion/conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM `productos` WHERE `productos`.`id` = $id";
    $resultado = $conexion->query($sql);

    if($resultado-> num_rows > 0){
        $productos = $resultado-> fetch_assoc();
        $descripcion = $productos["descripcion"];
        $imagen = $productos["imagen"];
        $estado = $productos["estado"];
    }else{
        echo "No existe el rol con el id: ". $id;
    }
?>
<h1>Editar Producto</h1>

<form action="editar.php" method="post" enctype ="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="" name="descripcion"  required value="<?= $descripcion ?>">
        <label for="floatingInput">Descripcion:</label>
    </div>
    <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" accept="image/*" value=""> 
            <label for="imagen">Url de Imagen:</label>
    </div>
    <div>
        <p>Imagen actual:</p>
        <img src="<?= $productos['imagen'] ?>" width="25" height="25" loading="lazy" style="max-width: 25%; height: auto;">
    </div>
    <div class="form-check" >
        <input class="form-check-input" type="checkbox" name="estado" value="1" id="flexCheckDefault" <?= $productos['estado'] == '1' ? 'checked' : ''; ?> >
        <label class="form-check-label" for="flexCheckDefault" style="color: white">
            Estado
        </label>
    </div>
    
    <button type="submit" class="btn btn-primary" name="enviar" value="Enviar">Enviar</button>
</form>

<?php include("../plantilla_pie.php"); ?>
