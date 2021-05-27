<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login sederhana</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan-login=belum_login");
    }

    ?>

    <h4>congrats,<?php echo ($_SESSION['username']); ?> ,  login sukses! </h4>
    <a href="logout.php">Log out</a>

</body>

</html>