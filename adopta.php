<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeloveDogs · Adopta un animal</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/adopta.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
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
                    <a class="nav-link" href="quienes.php">Quienes Somos</a>
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

<!--<div class="buttons">
    <button onclick="changeImages('images1')">Nuestros perretes</button>
    <button onclick="changeImages('images2')">Nuestros gatetes</button>
  </div>

  <div class="container" id="imageContainer">
  </div>-->

  <div class="buttons">
    <button onclick="showContainer('container1')">Nuestros perretes</button>
    <button onclick="showContainer('container2')">Nuestros gatetes</button>
  </div>

  <div class="container" id="perretes">
    <div class="row">
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap1.jpg" alt="Imagen 1">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 1</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 2">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 2</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap3.jpg" alt="Imagen 3">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 3</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap4.jpg" alt="Imagen 4">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 4</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Break -->
    <div class="row">
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 1">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 1</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 2">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 2</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 3">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 3</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 4">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 4</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Break -->
    <div class="row">
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap1.jpg" alt="Imagen 1">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 1</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 2">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 2</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap3.jpg" alt="Imagen 3">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 3</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap4.jpg" alt="Imagen 4">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 4</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Break -->
    <div class="row">
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap1.jpg" alt="Imagen 1">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 1</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 2">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 2</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap3.jpg" alt="Imagen 3">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 3</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap4.jpg" alt="Imagen 4">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 4</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--<div class="container container1">
    <div class="row">
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap1.jpg" alt="Imagen 1">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 1</div>
          </div>
        </div>
      </div>
    </div>
  </div>-->

  <!--<div class="container container2">
    <div class="row">
      <div class="col-md-3">
        <div class="image-container">
          <img src="images/adoptap2.jpg" alt="Imagen 5">
          <div class="overlay">
            <div class="overlay-text">Texto de la imagen 5</div>
          </div>
        </div>
      </div>
    </div>
  </div>-->

    <script type="text/javascript" src="scripts/adopta.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>