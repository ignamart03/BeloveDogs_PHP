<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/base.css">
</head>

<body>
    <nav class="navbar">
        <a href="home.php" class="nav-button" alt="Home">
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

    </nav>
        <div class="col-sm-8">
            <br>
            <h2>Welcome</h2>
            <h5>Please, log in to continue</h5>
            <form action="profile.php" method="post">
                <label for="usuario">Username:</label><br>
                <input type="text" id="usuario" name="username" value=""><br>
                <label for="pwd">Password:</label><br>
                <input type="password" id="pwd" name="password" value=""><br><br>
                <input type="submit" value="Submit">
            </form>     </div>
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
                echo"hola";
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