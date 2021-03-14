<html>
<head>
<title>A11.2019.12292</title>
</head>
<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;
if(isset($_POST['submit'])){
if($n!=NULL){
$bil = 1;
for($i=1;$i<=$n;$i++){
 $bil = $bil*$i;
}
}else{
$bil = 'Bilangan Tidak boleh kosong!';
}
}
echo '<h2>Menghitung Bilangan Faktorial menggunakan For</h2>';
echo '<hr>';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
echo '<input name="submit" value="Hitung"/>';
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
echo '</form>';
?>
</body>
</html>
