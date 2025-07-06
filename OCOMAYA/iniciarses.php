<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión - Ocomaya</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <header class="banner">
    <h1>BIENVENIDO A OCOMAYA</h1>
  </header>

  <div class="form-container">
    <h2>INICIAR SESIÓN</h2>

    <form method="post" action="#">
      <label for="nombre">NOMBRE</label>
      <input type="text" name="nombre" placeholder="Ingresa tu nombre completo">

      <label for="correo">CORREO ELECTRÓNICO</label>
      <input type="email" name="correo" placeholder="Ingresa tu correo">

      <label for="password">CONTRASEÑA</label>
      <input type="password" name="password" placeholder="Ingresa tu contraseña">

      <button type="submit">ENTRAR</button>
    </form>

    <p class="registro-texto">¿No tienes una cuenta? <a href="registro.php">regístrate aquí</a></p>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>