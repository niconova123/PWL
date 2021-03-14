<?php
 if (isset($_POST['proses'])) {
 $pertama = $_POST['pertama'];
 $kedua = $_POST['kedua'];
 $operasi = $_POST['operasi'];
  switch ($operasi) {
   case 'tambah':
    $hasil = $pertama + $kedua;
   break;
   case 'kurang':
    $hasil = $pertama - $kedua;
    break;
   case 'kali':
    $hasil = $pertama * $kedua;
   break;
   case 'bagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>A11.2019.12292</title>
  <link href="style.css" rel="stylesheet" type="text/css">

 <body>
 <div class="kalkulator">
  <h1>KALKULATOR</h1>
  <form action="" action="" method="post">
  bil 1:<input type="number" name="pertama" placeholder="Masukkan Bilangan Pertama">
   <br><br>
  bil 2:<input type="number" name="kedua" placeholder="Masukkan Bilangan Kedua">
   <br><br>
   <?php if(isset($_POST['proses'])){ ?>
   hasil <input type="text" value="<?php echo $hasil; ?>">
  <?php }else{ ?>
   <input type="text" value="0">
  <?php } ?> <br><br>
    operator<select name="operasi">
    <option value="tambah">+</option>
    <option value="kurang">-</option>
    <option value="kali">x</option>
    <option value="bagi">/</option>
   </select>
   <input type="submit" name="proses" class="tombol" value="=">
  </form>

</div>
 </body>
 </html>
