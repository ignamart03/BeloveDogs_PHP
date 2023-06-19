<?php
session_start();
require_once 'connect.php';
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
  <script src="scripts/otros.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .divC {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
    }

    h3 {
      text-align: center;
      margin-bottom: 50px;
    }
  </style>
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
  <h1 class="titulo-otros">Otros usuarios</h1>
  <h3>¿Buscas gente con quien pasear? Encuentra a tu compañero amante de las mascotas</h3>
  <br>
  <div class="divC">
    <!-- Dividimos las flip cards en filas -->
    <?php

    $sql = "SELECT username, email, telefono
    FROM users
    WHERE role_type LIKE 'CLIENT'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
      $nombre = $row['username'];
      $email = $row['email'];
      $telefono = $row['telefono'];

      echo '<div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="images/user.jpg" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>' . $nombre . '</h1>
                <p>Email: ' . $email . '</p>
                <p>Teléfono: ' . $telefono . '</p>
              </div>
            </div>
          </div>';
    }
    ?>

</body>

</html>