<?php
$frutaPrincipal = "Ocomaya";
$textoDescripcion = "$frutaPrincipal es una página que distribuye y promueve el talento de los artesanos, incluyendo trajes típicos, accesorios, cerámicas y muchas otras creaciones que reflejan cultura, raíces y tradición.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?= $frutaPrincipal ?> | Artesanías con sabor</title>
  <link rel="stylesheet" href="css/estilo_frutas.css">
</head>
<body>

  <header class="piña-banner">
    <h1><?= $frutaPrincipal ?></h1>
  </header>

  <main class="sandia-contenedor">
    <section class="mango-mensaje">
      <h2>¿Qué es <?= $frutaPrincipal ?>?</h2>
      <p><?= $textoDescripcion ?></p>
    </section>
  </main>
</body>
</html>

