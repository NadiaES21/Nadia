<?php include('menupagdos.php'); ?>

<?php
$trajesFila1 = [
  [
    'artesano' => 'María Tzunún',
    'nombre' => 'Raíz Bordada',
    'precio' => '$950.00',
    'imagen' => 'imagen/1.jpg'
  ],
  [
    'artesano' => 'Juan Tzeltal',
    'nombre' => 'Flor Tzeltal',
    'precio' => '$1100.00',
    'imagen' => 'imagen/5.jpg'
  ],
  [
    'artesano' => 'Colectiva Jlumaltik',
    'nombre' => 'Alma de Maíz',
    'precio' => '$890.00',
    'imagen' => 'imagen/3.jpg'
  ],
  [
    'artesano' => 'Tejedoras Sakil',
    'nombre' => 'Tradición Viva',
    'precio' => '$1200.00',
    'imagen' => 'imagen/6.jpg'
  ]
];

$trajesFila2 = [
  [
    'artesano' => 'Hilanderas de Ocosingo',
    'nombre' => 'Sendero Jaguar',
    'precio' => '$980.00',
    'imagen' => 'imagen/4.jpg'
  ],
  [
    'artesano' => 'Manos de Maíz',
    'nombre' => 'Sol del Mayab',
    'precio' => '$1050.00',
    'imagen' => 'imagen/2.jpg'
  ],
  [
    'artesano' => 'Mujeres del Viento',
    'nombre' => 'Estrella de Monte',
    'precio' => '$920.00',
    'imagen' => 'imagen/7.jpg'
  ],
  [
    'artesano' => 'Bordadoras U Lum',
    'nombre' => 'Susurro de Copal',
    'precio' => '$1250.00',
    'imagen' => 'imagen/9.jpg'
  ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Trajes Típicos</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  <div class="galeria-trajes">
    <?php foreach ($trajesFila1 as $traje): ?>
      <div class="tarjeta-traje">
        <img class="imagen-traje" src="<?= $traje['imagen'] ?>" alt="<?= $traje['nombre'] ?>">
        <h4 class="nombre-artesano"><?= $traje['artesano'] ?></h4>
        <p class="nombre-traje"><?= $traje['nombre'] ?></p>
        <p class="precio-traje"><?= $traje['precio'] ?></p>
        <button class="boton-traje">Descripción</button>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="galeria-trajes">
    <?php foreach ($trajesFila2 as $traje): ?>
      <div class="tarjeta-traje">
        <img class="imagen-traje" src="<?= $traje['imagen'] ?>" alt="<?= $traje['nombre'] ?>">
        <h4 class="nombre-artesano"><?= $traje['artesano'] ?></h4>
        <p class="nombre-traje"><?= $traje['nombre'] ?></p>
        <p class="precio-traje"><?= $traje['precio'] ?></p>
        <button class="boton-traje">Descripción</button>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>