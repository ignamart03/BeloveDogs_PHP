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



  <!-- Bootstrap JavaScript y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <div class="carrusel">
    <img src="ruta/a/tu/imagen1.jpg" alt="Imagen 1" class="imagen-activa">
    <img src="ruta/a/tu/imagen2.jpg" alt="Imagen 2">
    <img src="ruta/a/tu/imagen3.jpg" alt="Imagen 3">
    <!-- Agrega más imágenes según necesites -->
  </div>
  <!-- <div id="carousel">
    <section id="container-slider">
      <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i
          class="fas fa-chevron-circle-left"></i></a>
      <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i
          class="fas fa-chevron-circle-right"></i></a>
      <ul class="listslider">
        <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
        <li><a itlist="itList_1" href="#"></a></li>
        <li><a itlist="itList_2" href="#"></a></li>
      </ul>
      <ul id="slider">
        <li style="background-image: url(../images/5.jpg); z-index:0; opacity: 1;">
          <div class="content_slider">
            <div>
              <h2>Viking</h2>
              <a href="portfolio.html" target="_blank" class="btnSlider">Check it out at the galery</a>
            </div>
          </div>
        </li>
        <li style="background-image: url(../images/paliorch2.png); width: 100%;">
          <div class="content_slider">
            <div>
              <h2>Knight</h2>
              <a href="portfolio.html" target="_blank" class="btnSlider">Check it out at the galery</a>
            </div>
          </div>
        </li>
        <li style="background-image: url(../images/Casa\ cartoon.png); ">
          <div class="content_slider">
            <div>
              <h2>Cartoon House</h2>
              <a href="portfolio.html" target="_blank" class="btnSlider">Check it out at the galery</a>
            </div>
          </div>
        </li>
      </ul>
    </section>
  </div> -->

</body>

</html>