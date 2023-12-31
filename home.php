<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeloveDogs</title>
  <!-- Bootstrap CSS -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/carousel.css">
  <!-- JavaScript y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top nav-margin">
    <a class="navbar-brand" href="home.php">
      <img src="favicon.ico" alt="Home" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="adopta.php">Adopta</a>
        </li>
        <li class="nav-item">
          <?php if (!isset($_SESSION['username'])): ?>
            <a class="nav-link" href="login.php">Login</a>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])): ?>
            <a class="nav-link" href="logout.php">Logout</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ayuda.php">Ayuda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="otros.php">Conoce Otros Dueños</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- Primer carrusel sobre eventos de animales -->
  <div class="carousel-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <!-- Aquí está el cambio, de 'col-sm-12' a 'col-sm-6' para ocupar la mitad del ancho de la pantalla -->
          <div id="carouselExampleCaptions" class="carousel slide carousel-full-height" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active carousel-1-item">
                <img src="images/perroton.jpg" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-block">
                  <h5>Perrotón Madrid</h5>
                  <p>Entradas Perrotón Madrid 2023 Nicka Run en Madrid</p>
                  <a href="https://www.elcorteingles.es/entradas/deporte/entradas-perroton-madrid-2023-madrid/"
                    target="_blank">Ver más</a>
                </div>
              </div>
              <div class="carousel-item carousel-1-item">
                <img src="images/taller_obediencia4.jpg" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-block">
                  <h5>Taller de obediencia canina</h5>
                  <p>Taller de obediencia y educación canina en Madrid</p>
                  <a href="https://www.facebook.com/events/1973777872985160/1973793782983569/?active_tab=about"
                    target="_blank">Ver más</a>
                </div>
              </div>
              <div class="carousel-item carousel-1-item">
                <img src="images/bienestar_animal2.jpg" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-block">
                  <h5>Bienestar animal curso</h5>
                  <p>Curso Bienestar Animal en el Transporte online + examen presencial</p>
                  <a href="https://inalocal.com/convocatorias/etiqueta/bienestar-animal/" target="_blank">Ver más</a>
                </div>
              </div>
              <div class="carousel-item carousel-1-item">
                <img src="images/animales_salvajes.jpg" class="d-block w-100" alt="Imagen 4">
                <div class="carousel-caption d-block">
                  <h5>Entrenamiento de animales salvajes</h5>
                  <p>Especializacion entreamiento avanzado para cuidados veSSterinarios de animales salvajes</p>
                  <a href="https://www.emagister.com/especializacion-entrenamiento-avanzado-para-cuidados-veterinarios-animales-salvajes-cursos-3461075.htm"
                    target="_blank">Ver más</a>
                </div>
              </div>
              <div class="carousel-item carousel-1-item">
                <img src="images/Zolopotrokeando.jpg" class="d-block w-100" alt="Imagen 5">
                <div class="carousel-caption d-block">
                  <h5>Zolopotrokeando</h5>
                  <p>Nuevo espectáculo infantil y familiar para fiestas. Un espectáculo en el que tanto niños como
                    pequeños disfrutarán de las canciones y coreografías que bailarán nuestras mascotas junto a Tina.
                  </p>
                  <a href="https://zolopotrokoteatro.com/events/zolopotrokeando-862-584-101-914-192-758-644-513-301-810-887/"
                    target="_blank">Ver más</a>
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
        </div>
      </div>
    </div>
  </div>

  <!-- Segundo carrusel sobre centros de adopción -->
  <div class="col-sm-6" style="position: absolute; right: 0; top: 0;">
    <!-- Está posicionado en la esquina superior derecha -->
    <div id="carouselExampleCaptions2" class="carousel slide carousel-half-height" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active carousel-2-item">
          <img src="images/el_refugio.jpg" class="d-block w-100" alt="Imagen 1">
          <div class="carousel-caption d-block">
            <h5>EL REFUGIO, MADRID</h5>
            <p>El Refugio nació en 1996 como una organización especializada en la ayuda a perros y gatos abandonados y/o
              maltratados. A día de hoy, cuentan con un precioso
              proyecto llamado Edén, al que cualquier persona se puede apuntar de manera totalmente gratuita para
              garantizar que sus mascotas tengan un hogar seguro en caso de fallecimiento.
            </p>
            <a href="https://www.instagram.com/el_refugio/?utm_source=ig_embed&ig_rid=780ddc83-87ad-463e-b7aa-07ea67036e3f"
              target="_blank">Ver más</a>
          </div>
        </div>
        <div class="carousel-item carousel-2-item">
          <img src="images/helpguau2.2.jpg" class="d-block w-100" alt="Imagen 2">
          <div class="carousel-caption d-block">
            <h5>HELP GUAU, BARCELONA</h5>
            <p>Ubicada a pocos kilómetros de Barcelona, la protectora Help Guau ofrece distintos métodos de adopción,
              haciendo distinciones entre perros senior,
              perros potencialmente peligrosos y una adopción bonificada para animales que por un motivo u otro
              requieran de un trato diferente.
            </p>
            <a href="https://www.instagram.com/helpguau/?utm_source=ig_embed&ig_rid=8f77b3fb-0840-4560-9cb2-d5022c3237c5"
              target="_blank">Ver más</a>
          </div>
        </div>
        <div class="carousel-item carousel-2-item">
          <img src="images/propatas.jpg" class="d-block w-100" alt="Imagen 3">
          <div class="carousel-caption d-block">
            <h5>PROPATAS PROTECTORA, VALLADOLID</h5>
            <p>Esta protectora de animales de Valladolid se encarga de cuidar a los perros que han sido maltratados y a
              aquellos en riesgo de ser sacrificados.</p>
            <a href="https://www.instagram.com/propatas.oficial/?utm_source=ig_embed&ig_rid=49b397de-7b4f-4b04-ba64-7d6c1e46a195"
              target="_blank">Ver más</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>

  <!-- Cajas para las tiendas de artículos de mascotas -->
  <div class="col-sm-6 divsContainer">
    <div class="container divsTitle">
      <h2 style="margin-top: 30px" class="fontWhite">¡Las mejores tiendas de Madrid!</h2>
      <div class="row rowDivs">
        <div class="storeDiv">
          <h5 class="fontWhite">By Mascota 4.5/5⭐</h5>
          <a href="https://www.expertoanimal.com/by-mascota-madrid-neg-7240.html">¡Visita la tienda!</a>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.358818631912!2d-3.6814389999999997!3d40.423052899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228a2b8460eff%3A0xc8d72c008724689c!2sCalle%20de%20Castell%C3%B3%2C%2010%2C%2028001%20Madrid!5e0!3m2!1ses!2ses!4v1687082479998!5m2!1ses!2ses" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
        <div class="storeDiv">
          <h5 class="fontWhite">PETuluku  4.3/5⭐</h5>
          <a href="https://www.expertoanimal.com/petuluku-madrid-neg-7238.html">¡Visita la tienda!</a>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.004918002914!2d-3.7145182!3d40.43088999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228685cc4cdf3%3A0xecf993eab4a7494b!2sC.%20de%20Andr%C3%A9s%20Mellado%2C%204%2C%2028015%20Madrid!5e0!3m2!1ses!2ses!4v1687085261137!5m2!1ses!2ses" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>   
    </div>
  </div>
</body>

</html>