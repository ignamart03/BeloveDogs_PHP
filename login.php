<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de inicio de sesión
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // Consultar la base de datos para verificar las credenciales del usuario
    $sql = "SELECT * FROM USERS WHERE `username`='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verificar la contraseña
        if (password_verify($password, $row['password_hash'])) {
            // Iniciar sesión y establecer las variables de sesión
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['nombre_completo'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['address'] = $row['direccion'];
            $_SESSION['phone'] = $row['telefono'];

            // Redirigir al perfil del usuario
            header("Location: perfil.php");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

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
                    <?php if (!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Login</a>
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
</body>

</html>