<?php include("plantilla_cabecera.php"); 
      include("conexion/conexion.php");
?>



        <!-- ***** Banner Start ***** -->
        <div class="main-banner">
          <div class="row">
            <div class="col-lg-7">
              <div class="header-text">
                <h6>Bienvenido a RONIVRU</h6>
                <h4><em>Descubre</em> nuestro catalogo aqui</h4>
                <div class="main-button">
                  <a href="http://localhost/landing/productos/">Ir ahora</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Banner End ***** -->

        <!-- ***** Most Popular Start ***** -->
        <div class="most-popular">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Más poplar</em> Ahora</h4>
              </div>
              <div class="row">
                <?php
              $sql = "SELECT id, descripcion, imagen, estado from productos";
              $consulta = $conexion->query($sql);
                  foreach($consulta as $producto){ 
                    $rutaN = "productos/" . $producto['imagen'];
                    ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="<?= $rutaN ?>" width="200px" height="150px" loading="lazy">
                      <h4><?= $producto["descripcion"] ?><br><span><?= $producto['estado'] == '1' ? 'Disponible' : 'No Disponible';?></span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                    <?php 
                  }
                
                  ?>
                


                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="http://localhost/landing/productos/">Más Productos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
<?php include("plantilla_pie.php"); ?>