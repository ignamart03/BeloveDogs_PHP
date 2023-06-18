<?php
session_start();
require_once 'connect.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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
            $errorMessage = "Contraseña incorrecta.";
        }
    } else {
        $errorMessage = "Usuario no encontrado.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeloveDogs · Inicia Sesión</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="styles/base.css">
</head>

<body class="login-body" >
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
        <div class="login-box">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="uname">Username *</label>
                    <span class="error">
                        <?php echo isset($usernameErr) ? $usernameErr : ""; ?>
                    </span><br>
                    <input type="text" id="uname" name="username" placeholder="Your user name here"
                        value="<?php echo isset($username) ? $username : ""; ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Password *</label>
                    <span class="error">
                        <?php echo isset($passwordErr) ? $passwordErr : ""; ?>
                    </span><br>
                    <input type="password" name="password" id="password" placeholder="********" required />
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    <p class="text-uppercase">¿No tienes cuenta?</p>
                    <a href="register.php" class="btn btn-secondary">¡Regístrate!</a>
                </div>
                <?php
                if (isset($errorMessage)) {
                    echo '<div class="mt-3 alert alert-danger">' . $errorMessage . '</div>';
                }
                ?>
            </form>
            <?php
            if (isset($errorMessage)) {
                echo '<div class="mt-3 alert alert-danger">' . $errorMessage . '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>