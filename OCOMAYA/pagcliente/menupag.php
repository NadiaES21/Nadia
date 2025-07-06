<?php include('headpag.php'); ?>
<body>
  <div class="contenedor-pagina">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-artesanal">
      <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center" href="#">
          OCOMAYA 
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
          <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">

            <li class="nav-item">
              <a class="nav-link" href="indexpag.php">INICIO</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="opcionesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PRODUCTOS
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="opcionesDropdown">
                <li><a class="dropdown-item" href="trajes.php">TRAJES</a></li>
                <li><a class="dropdown-item" href="ceramica.php">CERÁMICA</a></li>
                <li><a class="dropdown-item" href="accesorios.php">ACCESORIOS</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-person"></i></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

  

  </div>
  <!-- Bootstrap 5 JS (bundle incluye Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>