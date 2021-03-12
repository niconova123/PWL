<html>
<head>
<title>Menghitung Bilangan Faktorial menggunakan Do While pada PHP</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;
if(isset($_POST['submit'])){
if($n!=NULL){
$bil = 1;
$i=1;
do
{
 $bil = $bil*$i;
 $i++;
}
while($i<=$n);
}else{
$bil = 'Bilangan Tidak boleh kosong mblo!';
}
}
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';
echo '<br>';
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
?>
</body>
</html>