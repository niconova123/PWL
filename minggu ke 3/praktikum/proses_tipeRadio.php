<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilkan pilihan</title>
</head>

<body>
    <?php
        if (isset($_POST['kirim_hasil'])) {
            $jurusanPilihan=$_POST['jurusan'];
            echo "jurusan pilihan :
            <b><font color='red'> $jurusanPilihan </font></b>";
            echo"<br>";

            // mencoba dengan switch
            switch ($jurusanPilihan) {
                case 'TekInf':
                    echo "jurusan pilihan :
                    <b><font color='red'> Teknik Informatika </font></b>";
                    break;
                
                case 'TekKom':
                    echo "jurusan pilihan :
                    <b><font color='red'> Teknik Komputer </font></b>";
                    break;
                
                case 'SysInf':
                    echo "jurusan pilihan :
                    <b><font color='red'> Sistem Informasi </font></b>";
                    break;
                
                case 'SisKom':
                    echo "jurusan pilihan :
                    <b><font color='red'> Sistem Komputer </font></b>";
                    break;
                
                case 'KeaJar':
                    echo "jurusan pilihan :
                    <b><font color='red'> Keamanan Jaringan </font></b>";
                    break;
               
                case 'SasMes':
                    echo "jurusan pilihan :
                    <b><font color='red'> Sastra Mesin </font></b>";
                    break;
            }
        }
    ?>
</body>

</html>