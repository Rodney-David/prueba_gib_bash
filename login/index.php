<?php include("..\plantilla_cabecera.php")  ?>
<main class="form-signin m-auto col-md-3 offset-md-4">
  <form action="validacionUsuario.php" method="post">
    <img class="mb-4" src="../assets/recursos/imagenes/login.jpg" alt="" style="width: 100px; height: 100px; display: block; margin: 0 auto;">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Nombre</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault" >
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
  </form>
  <button style="background-color: purple; color: #fff; text-align: center; font-size: 16px; margin: 4px 2px; cursor: pointer;">
        <a href="../usuarios/formulario_crear.php">CREAR USUARIO</a>
  </button>
</main>
<?php include("..\plantilla_pie.php")  ?>