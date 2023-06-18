<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require_once 'connect.php';

$username = $_SESSION['username'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$address = $_SESSION['address'];
$phone = $_SESSION['phone'];
$profileImage = isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : 'default.jpg';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = test_input($_POST["name"]);
    $newEmail = test_input($_POST["email"]);
    $newAddress = test_input($_POST["address"]);
    $newPhone = test_input($_POST["phone"]);

    $sql = "UPDATE USERS SET `nombre_completo`='$newName', `email`='$newEmail', `direccion`='$newAddress', `telefono`='$newPhone' WHERE `username`='$username'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['name'] = $newName;
        $_SESSION['email'] = $newEmail;
        $_SESSION['address'] = $newAddress;
        $_SESSION['phone'] = $newPhone;
        echo "<script> alert('Datos actualizados correctamente.'); window.location='perfil.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    <title>BeloveDogs · Mi perfil</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/base.css">
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
                    <?php if (!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Login</a>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['username'])) : ?>
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
    <div class="container margin-top">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img class="profile-image" src="images/default.jpg" alt="Profile Image">
            </div>
            <div class="col-md-6">
                <h2 class="mt-4 mb-4">Perfil de usuario</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo $username; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección:</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="<?php echo $address; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Actualizar datos">
                    </div>
                </form>
                <form method="POST" action="logout.php">
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Cerrar sesión">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>