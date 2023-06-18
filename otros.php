<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeloveDogs · Conoce Otros Usuarios</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/otros.css">
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

    <!--<div>
        <div class="cardC">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/adoptap1.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                <div class="flip-card-back">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>

        <div class="cardC">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/adoptap1.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                <div class="flip-card-back">
                    <h1>John asdasdasd</h1>
                    <p>asdasdasd & Engineer</p>
                    <p>We adadadad that guy</p>
                </div>
            </div>
        </div>

        <div class="cardC">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/adoptap1.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                <div class="flip-card-back">
                    <h1>John asdasdasd</h1>
                    <p>asdasdasd & Engineer</p>
                    <p>We adadadad that guy</p>
                </div>
            </div>
        </div>

        <div class="cardC">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/adoptap1.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                <div class="flip-card-back">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
    </div>-->
<br><br><br><br><br>
<h1>Otros usuarios</h1>
<h3>¿Buscas gente con quien pasear? Encuentra a tu compañero amante de las mascotas</h3>
<br>
<div class="divC">
<!-- Dividimos las flip cards en filas -->
<div class="row">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 1</h1> 
        <p>Información 1</p> 
        <p>Contacto 1</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 2</h1> 
        <p>Información 2</p> 
        <p>Contacto 2</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 3</h1> 
        <p>Información 3</p> 
        <p>Contacto 3</p>
      </div>
    </div>
  </div>
</div>

<!-- Segunda fila de flip cards -->
<div class="row">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 4</h1> 
        <p>Información 4</p> 
        <p>Contacto 4</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 5</h1> 
        <p>Información 5</p> 
        <p>Contacto 5</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 6</h1> 
        <p>Información 6</p> 
        <p>Contacto 6</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 1</h1> 
        <p>Información 1</p> 
        <p>Contacto 1</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 2</h1> 
        <p>Información 2</p> 
        <p>Contacto 2</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Usuario 3</h1> 
        <p>Información 3</p> 
        <p>Contacto 3</p>
      </div>
    </div>
  </div>
</div>
                    </div>

  <script src="scripts/otros.js"></script>
</body>

</html>