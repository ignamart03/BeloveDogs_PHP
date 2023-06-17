<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tus Estilos -->
    <link rel="stylesheet" href="styles/base.css">
</head>

<body>
    <nav class="navbar">
        <a class="centered-link" href="home.php" alt="Home">
            <img src="favicon.ico">
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2 id="title" class="mt-5">Welcome</h2>
                <h5 id="title">Please, log in to continue</h5>
                <form action="profile.php" method="post">
                    <div class="form-group">
                        <label for="usuario" id="title">Username:</label>
                        <input type="text" id="usuario" name="username" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd" id="title">Password:</label>
                        <input type="password" id="pwd" name="password" value="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mat-button">Submit</button>
                </form>
                <div class="mt-3">
                    <p id="title">¿No tienes cuenta?</p>
                    <a href="register.php" class="btn btn-secondary mat-button register-link">¡Regístrate!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>