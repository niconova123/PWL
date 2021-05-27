<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman login sederhana</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan-login'])) {
        if ($_GET['pesan-login'] == "gagal") {
            echo ("Yah, loginnya gagal! username dan password kamu salah");
        } else if ($_GET['pesan-login'] == "logout") {
            echo ("Kamu berhasi logout. Sampai jumpa lagi, ya!");
        }
    }
    ?>
    <form action="cek_loginnya.php" method="post">
        <h3>Silahkan login dulu,ya!</h3>
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" placeholder="username kamu..." id="" required></td>
                <br>
            </tr>
            <tr>
                <td>Passwordnya :</td>
                <td><input type="password" name="passwords" id="" placeholder="kata sandinya..." required></td>
                <br>
            </tr>

            <tr>
                <td><input type="submit" name="kirimkan" value="kirim"></td>
            </tr>

        </table>






    </form>
</body>

</html>