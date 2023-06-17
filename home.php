<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="home.php">
      <img src="favicon.ico" alt="Home" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="adopta.php">Adopta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes.php">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ayuda.php">Ayuda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="otros.php">Conoce Otros Dueños</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/perroton.jpg" class="d-block w-100" alt="Imagen 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Perrotón Madrid</h5>
          <p>Entradas Perrotón Madrid 2023 Nicka Run en Madrid</p>
          <a href="https://www.elcorteingles.es/entradas/deporte/entradas-perroton-madrid-2023-madrid/">Ver más</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/taller_obediencia.jpg" class="d-block w-100" alt="Imagen 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Taller de obediencia canina</h5>
          <p>Taller de obediencia y educación canina en Madrid</p>
          <a href="https://www.facebook.com/events/1973777872985160/1973793782983569/?active_tab=about">Ver más</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/curso_bienestar.jpg" class="d-block w-100" alt="Imagen 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bienestar animal curso</h5>
          <p>Curso Bienestar Animal en el Transporte online + examen presencial</p>
          <a href="https://inalocal.com/convocatorias/etiqueta/bienestar-animal/">Ver más</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/animales_salvajes.jpg" class="d-block w-100" alt="Imagen 4">
        <div class="carousel-caption d-none d-md-block">
          <h5>Entrenamiento de animales salvajes</h5>
          <p>Especializacion entreamiento avanzado para cuidados veterinarios de animales salvajes</p>
          <a href="https://www.emagister.com/especializacion-entrenamiento-avanzado-para-cuidados-veterinarios-animales-salvajes-cursos-3461075.htm">Ver más</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Zolopotrokeando.jpg" class="d-block w-100" alt="Imagen 5">
        <div class="carousel-caption d-none d-md-block">
          <h5>Zolopotrokeando</h5>
          <p>Nuevo espectáculo infantil y familiar para fiestas</p>
          <a href="https://zolopotrokoteatro.com/events/zolopotrokeando-862-584-101-914-192-758-644-513-301-810-887/">Ver más</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>


  <!-- Bootstrap JavaScript y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>