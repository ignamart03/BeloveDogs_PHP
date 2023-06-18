<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php

    //Remove all session variables
    session_unset();

    //Destroy/Stop the session
    session_destroy();

    header('Location: home.php');
    ?>

    <div class="p-5 bg-success text-white text-center">
        <h2>Congratulations on logging out!</h2>
    </div>
</body>

</html>