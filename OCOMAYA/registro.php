<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrarse - Ocomaya</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <header class="banner">
    <h1>BIENVENIDO A OCOMAYA</h1>
  </header>

  <div class="form-container">
    <h2>REGISTRARSE</h2>

    <form method="post" action="#">
      <label for="nombre">NOMBRE.</label>
      <input type="text" name="nombre" placeholder="Ingresa tu nombre completo">

      <label for="correo">CORREO ELECTRONICO</label>
      <input type="email" name="correo" placeholder="Ingresa tu correo">

      <label for="telefono">TELEFONO</label>
      <input type="text" name="telefono" placeholder="Ingresa tu telefono">

      <label for="contrasena">CONTRASEÑA</label>
      <input type="password" name="contrasena" placeholder="Ingresar tu contraseña">

      <label for="confirmar_contrasena">CONFIRMAR CONTRASEÑA</label>
      <input type="password" name="confirmar_contrasena" placeholder="Verifica a ingresar tu contraseña">

      <button type="submit">CREAR CUENTA</button>
    </form>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>