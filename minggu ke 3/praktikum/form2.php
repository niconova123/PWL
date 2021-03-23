<!DOCTYPE html>
<html lang="en">
<!-- untuk contoh ini,
pemanggilan tag php berada di luar 
tubuh html -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form dan proses beda file</title>
</head>
<body>
    <h4>
        proses yang terjadi akan diletakkan
        di file yang beda(proses_form2.php).
    </h4>
    <form action="proses_form2.php" method="post" name="formulir">
        Nama anda : <input type="text" name="nama" id=""><br>
    <!-- catatan:
        bagian name di submit harus dibedakan dengan name milik tag lain,
        supaya program tidak bingung
    -->
        <!-- element value="" adalah tulisan yang akan ditampilkan
        ketika file dijalankan -->
        <input type="submit" value="submit" name="nama_submit">
    
    </form>
    <!-- hasilnya:
    nama anda : johnny cage
    (karena tadi nama yang dimasukkan adalah
    johnny cage)
    -->
</body>
</html>