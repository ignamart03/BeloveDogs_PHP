<?php
session_start();
require_once 'connect.php';

$nameErr = $usernameErr = $emailErr = $passwordErr = $addressErr = $phoneErr = $rpasswordErr = "";
$name = $username = $email = $password = $address = $phone = $rpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Address
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    // Phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } elseif (!preg_match('/\d{1,15}/', $_POST["phone"])) {
        $phoneErr = "Invalid phone number";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    // Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } elseif (!preg_match('/^[a-zA-Z]{6,15}$/', $_POST["password"])) {
        $passwordErr = "Password must be between 6 and 15 characters";
    } else {
        $password = test_input($_POST["password"]);
    }

    // Confirm Password
    if (empty($_POST["confirm_password"])) {
        $rpasswordErr = "Repeated password is required";
    } elseif ($_POST["confirm_password"] != $_POST["password"]) {
        $rpasswordErr = "The repeated password does not match the previous password.";
    } else {
        $rpassword = test_input($_POST["confirm_password"]);
    }

    if (empty($nameErr) && empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($addressErr) && empty($phoneErr) && empty($rpasswordErr)) {
        $sqlSearch = "SELECT * FROM `users` WHERE `username` LIKE '$username'";

        // Check if the username already exists
        if (mysqli_num_rows(mysqli_query($conn, $sqlSearch)) == 1) {
            echo "<script> alert('El usuario $username ya existe. Elige otro nombre de usuario')</script>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO USERS (`username`, `nombre_completo`, `email`, `direccion`, `telefono`, `password_hash`, `role_type`) VALUES ('$username','$name','$email','$address','$phone','$hashed_password', 'CLIENT')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['address'] = $address;
                $_SESSION['phone'] = $phone;
                $_SESSION['role_type'] = 'CLIENT';

                echo "<script> alert('Usuario registrado con éxito: $name'); window.location='perfil.php'; </script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regístrate</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/base.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
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
                    <?php if (!isset($_SESSION['usuario'])) : ?>
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
            <div class="col-md-6">
                <h2 class="mt-4 mb-4">Registro de usuario</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                        <span class="text-danger">
                            <?php echo $nameErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="username">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo $username; ?>">
                        <span class="text-danger">
                            <?php echo $usernameErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                        <span class="text-danger">
                            <?php echo $emailErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección:</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="<?php echo $address; ?>">
                        <span class="text-danger">
                            <?php echo $addressErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                        <span class="text-danger">
                            <?php echo $phoneErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="text-danger">
                            <?php echo $passwordErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmar contraseña:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        <span class="text-danger">
                            <?php echo $rpasswordErr; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Registrarse">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>