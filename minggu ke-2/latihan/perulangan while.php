<html>
<head>
<title>Menghitung Bilangan Faktorial menggunakan While pada PHP</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;
if(isset($_POST['submit'])){
if($n!=NULL){
$bil = 1;
$i=0;
while($i<$n){
 $i++;
 $bil = $bil*$i;
}
}else{
$bil = 'Bilangan Tidak boleh kosong mblo!';
}
}
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
echo '<input type="submit" name="submit" value="Hitung"/>';
echo '</form>';
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
?>
</body>
</html>