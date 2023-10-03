<?php include("../plantilla_cabecera.php");  ?>

    <h1>Formulario Productos</h1> 

    <form action="guardar.php" method="post" enctype ="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="" name="descripcion"  required>
            <label for="floatingInput">Descripcion:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" accept="image/*">
            <label for="imagen">Url de Imagen:</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="estado" value="1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="color: white">
                Estado
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar" value="Enviar">Enviar</button>
    </form>
    
    <?php include("../plantilla_pie.php"); ?>
    