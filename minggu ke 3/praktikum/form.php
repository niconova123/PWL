<!DOCTYPE html>
<html lang="en">
<!-- untuk contoh ini, proses dan form
ada dalam 1 file-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form dan proses 1 file</title>
</head>

<body>
    <form action="" method="post" name="formulir">
        Nama anda : <input type="text" name="nama" id=""><br>

        <input type="submit" value="formulir" name="formulir">

    </form>

    <?php
    if (isset($_POST['formulir'])) {
        $nama=$_POST['nama'];
        echo "nama anda : <b>$nama</b>";
        
        # code...
    }
    ?>
</body>

</html>