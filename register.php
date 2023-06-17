<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="base.css">
</head>

<body>
    <nav class="navbar">
        <a href="home.php" class="nav-button home" alt="home" id="home" name="home">
            <div style="margin-left: 1.5rem; margin-right: 1.5rem;">
                <img src="favicon.ico">
            </div>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <h2>Register</h2>
                <h5>Fill the form to register, and click "Submit" when done</h5>
                <?php
                require_once 'connect.php';
                // define variables and set to empty values
                $username = $email = $phone = $password = $address = "";
                $usernameErr = $emailErr = $phoneErr = $passwordErr = $addressErr = "";
                $name = $rpassword = $nameErr = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["username"])) {
                        $usernameErr = "Username is required";
                    } else {
                        $username = test_input($_POST["username"]);
                        if (!preg_match('/^[a-zA-Z]{6,10}$/', $username)) {
                            $usernameErr = "Only letters allowed from 6 to 10 characters";
                        }

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                //name
                                $name = test_input($_POST["name"]);
                                if (!preg_match('/^[a-zA-Z]{3,}$/', $name)) {
                                    $nameErr = "Only letters allowed, minimum of 3 characters";
                                }

                                //email
                                if (empty($_POST["email"])) {
                                    $emailErr = "Email is required";
                                } else {
                                    $email = test_input($_POST["email"]);
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $emailErr = "Invalid email format";
                                    }
                                }

                                //direccion
                                if (empty($_POST["address"])) {
                                    $addressErr = "Address is required";
                                } else {
                                    $address = test_input($_POST["phone"]);
                                }

                                //telefono
                                if (empty($_POST["phone"])) {
                                    $phoneErr = "Phone is required";
                                } elseif (!preg_match('/d{1,15}/', $password)) {
                                    $phoneErr = "Número de teléfono inválido";
                                } else {
                                    $phone = test_input($_POST["phone"]);
                                }

                                //contraseña
                                if (empty($_POST["password"])) {
                                    $passwordErr = "Password is required";
                                } elseif (!preg_match('/^[a-zA-Z]{6,15}$/', $password)) {
                                    $passwordErr = "Password must be between 6 and 15 characters";
                                } else {
                                    $password = test_input($_POST["password"]);
                                }

                                if (empty($_POST["rpassword"])) {
                                    $rpasswordErr = "Repeated password is required";
                                } elseif ($rpassword != $password) {
                                    $rpasswordErr = "The repeated password does not match the previous password.";
                                } else {
                                    $rpassword = test_input($_POST["rpassword"]);
                                }
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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <span>* Required fields</span><br>

                    <label for="name">Nombre:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
                    <span class="error">
                        <?php echo $nameErr; ?>
                    </span><br>

                    <label for="last_name">Apellidos:</label><br>
                    <input type="text" id="last_name" name="last_name"><br>

                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>"><br>
                    <span class="error">
                        <?php echo $usernameErr; ?>
                    </span><br>

                    <label for="email">E-mail:</label><br>
                    <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
                    <span class="error">
                        <?php echo $emailErr; ?>
                    </span><br>

                    <label for="address">Dirección:</label><br>
                    <input type="text" id="address" name="address" value="<?php echo $address; ?>"><br>

                    <label for="phone">Teléfono:</label><br>
                    <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"><br>

                    <label for="password">Contraseña:</label><br>
                    <input type="password" id="password" name="password"><br>
                    <span class="error">
                        <?php echo $passwordErr; ?>
                    </span><br>

                    <label for="confirm_password">Confirmar Contraseña:</label><br>
                    <input type="password" id="confirm_password" name="confirm_password"><br>

                    <input type="submit" value="Submit" name="Submit">
                </form>
            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>&copy;
            <?php echo date("Y"); ?> IES Clara del Rey - DW2E - All rights reserved
        </p>
    </div>
</body>

</html>

<?php
if (isset($_POST["Submit"])) {

    $username = $_POST["username"];
    $name = $_POST["name"] . " " . $_POST["last_name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO USERS (`username`, `nombre_completo`, `email`, `direccion`, `telefono`, `password_hash`, `role_type`) VALUES ('$username','$name','$address','$email','$phone','$hashed_password', 'CLIENT')";
    $sqlSearch = "SELECT * FROM `users` WHERE `username` LIKE '$username'";


    //...checks if the user exists, and give another chance...
    if (mysqli_num_rows(mysqli_query($conn, $sqlSearch)) == 1) {
        echo "<script> alert('El usuario $username ya existe. Elige otro nombre de usuario')</script>";
    }

    //... if can make the user, alert it and redirect to user page. 
    else if (mysqli_query($conn, $sql)) {
        $_SESSION['sesion'] = $username;
        echo "Usuario registrado con exito: $nombre);!" . "<script> window.location='profile.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysql_error($conn);
    }

    if (!$hayErrores) {
        header("Location: home.php");
        exit();
    }
}
?>