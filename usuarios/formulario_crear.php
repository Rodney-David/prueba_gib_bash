<?php 
    include("../conexion/conexion.php");
    include("../plantilla_cabecera.php");
    ?>

    <h1>CREAR USUARIO</h1>

    <form action="guardar.php" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="" name="nombre"  required>
            <label for="floatingInput">Nombres:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="" name="apellido"  required>
            <label for="floatingInput">Apellidos:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="" name="edad"  required>
            <label for="floatingInput">Edad:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="" name="telefono"  required>
            <label for="floatingInput">Telefono:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="" name="correo"  required>
            <label for="floatingInput">Correo:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="" name="password"  required>
            <label for="floatingInput">Contraseña:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="" name="estado"  required>
            <label for="floatingInput">Estado:</label>
        </div>
        
        <button type="submit" class="btn btn-primary" name="enviar" value="Enviar">Enviar</button>
    </form>

<?php include("../plantilla_pie.php"); ?>