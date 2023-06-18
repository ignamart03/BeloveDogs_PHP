<?php
//Start de session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2 class="mt-5 text-uppercase">Welcome</h2>
                <h5 class="text-uppercase">Please, log in to continue</h5>
                <form action="perfil.php" method="post">
                    <div class="form-group">
                        <label for="usuario" class="text-uppercase">Username:</label>
                        <input type="text" id="usuario" name="username" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="text-uppercase">Password:</label>
                        <input type="password" id="pwd" name="password" value="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="mt-3">
                    <p class="text-uppercase">¿No tienes cuenta?</p>
                    <a href="register.php" class="btn btn-secondary">¡Regístrate!</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    // put your code here
    require_once 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        // Consulta SQL para verificar los datos en la base de datos
        $sql = "SELECT * FROM USERS WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Los datos son válidos, redirigir al usuario a home.php
            $_SESSION["username"] = $username; // Guardar el nombre de usuario en la sesión si es necesario
            header("Location: perfil.php");
            exit();
        } else {
            // Los datos son incorrectos, mostrar mensaje de error
            echo "El usuario y/o la contraseña son incorrectos";
        }
    }
    ?>
</body>

</html>