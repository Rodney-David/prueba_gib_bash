<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RONIVRU</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="http://localhost/landing/assets/css/fontawesome.css">
    <link rel="stylesheet" href="http://localhost/landing/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="http://localhost/landing/assets/css/owl.css">
    <link rel="stylesheet" href="http://localhost/landing/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav" style= "display: flex; justify-content: space-between; align-items: center;">
                    <!-- ***** Logo Start ***** -->
                    <a href="http://localhost/landing/" >
                    <img src="http://localhost/landing/assets/recursos/imagenes/logo.png" style=" width: 150px; border-radius: 10px; margin-right: 15px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="http://localhost/landing/" class="active">Home</a></li>
                        <li><a href="http://localhost/landing/productos/">Productos</a></li>
                      <?php 
                      session_start(); 
                      if (isset($_SESSION['usuario'])) {
                        ?>
                          <li><a href="http://localhost/landing/login/logout.php"><?=$_SESSION['usuario']['nombre']?><img src="assets/images/profile-header.jpg" alt=""></a></li>
                          
                        <?php
                      }else{
                      ?>
                        <li><a href="http://localhost/landing/login/">Iniciar Sesion <img src="http://localhost/landing/assets/recursos/imagenes/profile.png" alt=""></a></li>
                      <?php
                      }
                      ?>
                    </ul>   
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">