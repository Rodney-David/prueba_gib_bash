<?php
include("../plantilla_cabecera.php");
include("../conexion/conexion.php");
$sql = "SELECT id, descripcion, imagen, estado from productos";
$consulta = $conexion->query($sql);
?>

<div class="live-stream">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Todos los</em> Productos</h4>
        </div>
    </div>
    <div class="row">

        <?php
        foreach ($consulta as $productos) {
        ?>
        <div class="col-lg-3 col-sm-6">
            <div class="item">
                <div class="thumb">
                    <img src="<?= $productos['imagen'] ?>" alt="" style="width: 200px; height: 200px; border-radius: 20px; " ></td>
                    <div class="hover-effect">
                        <div class="content">
                            <div class="live">
                                <a ><?= $productos["estado"] == '1' ? 'Disponible' : 'Agotado'; ?></a>
                            </div>
                            <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id_rol']== '1'){ ?>
                            <ul>
                                <li><a href="eliminar.php?id=<?= $productos["id"]?>"><i class="fa fa-eye"></i> Eliminar</a></li>
                                <li><a href="form_editar.php?id=<?= $productos["id"]?>"><i class="fa fa-gamepad"></i> Editar</a></li>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div >
                    <h4 style="text-align: center; margin-top: 0;"><?= $productos["descripcion"] ?></h4>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id_rol']== '1'){ ?>
    <button style="background-color: purple; color: #fff; text-align: center; font-size: 16px; margin: 4px 2px; cursor: pointer;">
        <a href="formulario_crear.php">CREAR PRODUCTO</a>
    </button>
<?php }
 include("../plantilla_pie.php"); ?>