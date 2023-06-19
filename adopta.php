<?php
session_start();
require_once 'connect.php';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <!-- JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="scripts/ayuda.js"></script>
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

    <div class="buttons">
        <div class="caja" onclick="toggleDropdown(this)">
            <p class="titulo"><b>Más centros de adopción</b></p>
            <div class="dropdown">
                <ul>
                    <li>
                        <a href="https://elrefugio.org/" class="adopta-link" target="_blank">El Refugio, MAD</a>
                    </li>
                    <li>
                        <a href="https://galgoespanolespana.org/" class="adopta-link" target="_blank">Asociación Galgo, MAD</a>
                    </li>
                    <li>
                        <a href="https://www.helpguau.com/" class="adopta-link" target="_blank">Help Guau, BAR</a>
                    </li>
                    <li>
                        <a href="http://www.propatas.es/" class="adopta-link" target="_blank">Propatas Protectora, VALL</a>
                    </li>
                    <li>
                        <a href="https://www.petjadestrobades.es/" class="adopta-link" target="_blank">Petjades Trobades, VALE</a>
                    </li>
                    <li>
                        <a href="https://ajuntament.barcelona.cat/benestaranimal/es/centro-de-acogida-de-animales-de-compania-caacb" class="adopta-link">CAACB, BAR</a>
                    </li>
                    <li>
                        <a href="https://fapam.org/" class="adopta-link" target="_blank">FAPAM, MAD</a>
                    </li>
                    <li>
                        <a href="https://asociacion-proccan.org/" class="adopta-link" target="_blank">PROCCAN, BAR</a>
                    </li>
                    <li>
                        <a href="https://albaonline.org/" class="adopta-link" target="_blank">Asociación Alba, MAD</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" id="perretes">
        <?php
        // Realizar la consulta a la base de datos
        $sql = "SELECT nombre_mascota, edad, raza, dueño
        FROM mascota
        WHERE dueño = 'BeloveDogs'
        ORDER BY edad ASC, nombre_mascota ASC";
        $result = mysqli_query($conn, $sql);

        $index = 0; // Índice para acceder a los elementos de imágenes
        
        for ($i = 0; $i < 4; $i++) {
            echo '<div class="row d-flex align-items-center justify-content-center">';

            for ($j = 0; $j < 3; $j++) {
                // Obtener los datos de la mascota actual
                $row = mysqli_fetch_assoc($result);
                $nombreMascota = $row['nombre_mascota'];
                $edad = $row['edad'];
                $raza = $row['raza'];
                $centro = $row['dueño'];

                echo '<div class="col-md-3 mx-3">
                    <div class="image-container">
                        <img src="images/adoptap'.($index + 1).'.jpg" alt="Imagen 2">
                        <div class="overlay">
                            <div class="overlay-text">
                                <ul>
                                    <li>Nombre: ' . $nombreMascota . '</li>
                                    <li>Edad: ' . $edad . '</li>
                                    <li>Raza: ' . $raza . '</li>
                                    <li>Centro: ' . $centro . '</li>
                                </ul>
                                <button class="button">
                                <a href="https://ajuntament.barcelona.cat/benestaranimal/es/centro-de-acogida-de-animales-de-compania-caacb" class="adopta-link button-adopta" target="_blank">¡Adóptame!</a>
                                </button>
                            </div>
                        </div>
                    </div>
                 </div>';

                $index++; // Incrementar el índice para obtener la siguiente imagen
            }
            echo '</div>';
        }

        // Liberar memoria y cerrar la conexión a la base de datos
        mysqli_free_result($result);
        ?>


    </div>

    <script type="text/javascript" src="scripts/adopta.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>