<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                <form action="profile.php" method="post">
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

    <!-- Bootstrap JavaScript y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
    // put your code here
    require_once 'connect.php';
    $username = "";
    $email = "";
    if (isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = mysql_query("SELECT username FROM users WHERE username='$username' ");
        $result2 = mysqli_query($conn, $query);

        if (mysqli_num_rows($result2) > 0) {
            header("Location: profile.php");
            echo "hola";
        }


        $sql_g = "SELECT username FROM users WHERE username='$username'";
        $sql_s = "SELECT * FROM users WHERE email='$email'";
        $res_g = mysqli_query($conn, $sql_g);
        $res_s = mysqli_query($conn, $sql_s);

        if (mysqli_num_rows($res_g) < 0) {
            echo "hola";
        } else {

            echo "Saved!";
            exit();
        }
    }
    ?>
</body>

</html>