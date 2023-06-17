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


    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h2>About stuff</h2>
                <h5>Photo of stuff:</h5>
                <div>
                    <img src="img/stuff.png" alt="It's Me" width="350px" height="300px">
                </div>
                <p>Some text about stuff</p>

            </div>
            <div class="col-sm-8">
                <h2>Register</h2>
                <h5>Fill the form to register, and click "Submit" when done</h5>
                <?php
                require_once 'connect.php';
                // define variables and set to empty values
                $username = $email = $gender = $password = $website = "";
                $usernameErr = $emailErr = $genderErr = $passwordErr = $websiteErr = "";
                $name = $rpassword = $nameErr = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["username"])) {
                        $usernameErr = "Username is required";
                    } else {
                        $username = test_input($_POST["username"]);
                        if (!preg_match('/^[a-zA-Z]{6,15}$/', $username)) {
                            $usernameErr = "Only letters allowed from 6 to 15 characters";
                        }

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                $name = test_input($_POST["name"]);
                                if (!preg_match('/^[a-zA-Z]{3,}$/', $name)) {
                                    $nameErr = "Only letters allowed, minimum of 3 characters";
                                }

                                if (empty($_POST["password"])) {
                                    $passwordErr = "Password is required";
                                } elseif (!preg_match('/^[a-zA-Z]{6,15}$/', $pasword)) {
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

                                if (empty($_POST["email"])) {
                                    $emailErr = "Email is required";
                                } else {
                                    $email = test_input($_POST["email"]);
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $emailErr = "Invalid email format";
                                    }
                                }

                                if (empty($_POST["website"])) {
                                    $website = "";
                                } else {
                                    $website = test_input($_POST["website"]);
                                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                                        $websiteErr = "Invalid URL";
                                    }
                                }

                                if (empty($_POST["gender"])) {
                                    $genderErr = "Gender is required";
                                } else {
                                    $gender = test_input($_POST["gender"]);
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
                    <label for="uname">*Username:</label><br>
                    <input type="text" id="uname" name="username" value="<?php echo $username; ?>"><br>
                    <span class="error"><?php echo $usernameErr; ?></span><br>
                    <label for="name">*Name:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
                    <span class="error"><?php echo $nameErr; ?></span><br>
                    <label for="pwd">*Password:</label><br>
                    <input type="password" id="pwd" name="password" value="<?php echo $password; ?>"><br>
                    <span class="error"><?php echo $passwordErr; ?></span><br>
                    <label for="pwd">*Repeat Password:</label><br>
                    <input type="password" id="rpwd" name="rpassword" value="<?php echo $rpassword; ?>"><br>
                    <span class="error"><?php echo $passwordErr; ?></span><br>
                    <label for="email">*E-mail:</label><br>
                    <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
                    <span class="error"><?php echo $emailErr; ?></span><br>
                    <label for="website">Website:</label><br>
                    <input type="text" name="website" value="<?php echo $website; ?>"><br>
                    <span class="error"><?php echo $websiteErr; ?></span><br>
                    <label for="gender">*Gender:</label><br>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                    <span class="error"><?php echo $genderErr; ?></span><br>
                    <input type="submit" value="Submit" name="Submit">
                </form>

            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>&copy;<?php echo date("Y"); ?> IES Clara del Rey - DW2E - All rights reserved</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
if (isset($_POST["home"])) {

    echo "<script>window.location='index.php' </script>";
}


if (isset($_POST["Submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO users(`username`,`password`,`name`,`email`,`website`,`sex`) VALUES ('$username','$password','$name','$email','$website','$gender')";

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
}
?>