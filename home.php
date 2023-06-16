<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="base.css">
    <script src="home.js"></script>
</head>

<body>
    <nav class="navbar">
        <a href="home.php" class="nav-button" alt="Home">
            <div style="margin-left: 1.5rem; margin-right: 1.5rem;">
                <img src="favicon.ico">
            </div>
        </a>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="adopta.php" class="nav-button">Adopta</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-button">Login</a>
            </li>
            <li class="nav-item">
                <a href="shop.php" class="nav-button">Tienda</a>
            </li>
            <li class="nav-item">
                <a href="quienes.php" class="nav-button">Quienes Somos</a>
            </li>
            <li class="nav-item">
                <a href="ayuda.php" class="nav-button">Ayuda</a>
            </li>
            <li class="nav-item">
                <a href="otros.php" class="nav-button">Conoce Otros Dueños</a>
            </li>
        </ul>
    </nav>

    <div id="carousel">
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
  </div>

</body>

</html>