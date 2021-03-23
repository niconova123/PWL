<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan form</title>
</head>

<body>
    <?php
        if (isset($_POST['submit!'])) {
            $user_1=$_POST['user_1'];
            $user_2=$_POST['user_2'];
            $user_3=$_POST['user_3'];
            $user_4=$_POST['user_4'];
            $user_5=$_POST['user_5'];

            echo"<b> anggota kelompok </b>"; 
            echo"<br>";

            echo"anggota 1= ".$user_1; echo "<br>";
            echo"anggota 2= ".$user_2; echo "<br>";
            echo"anggota 3= ".$user_3; echo "<br>";
            echo"anggota 4= ".$user_4; echo "<br>";
            echo"anggota 5= ".$user_5; echo "<br>";
        }
    ?>
</body>

</html>