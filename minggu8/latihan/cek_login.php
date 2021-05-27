<?php
session_start();
require 'functions.php';

$username = $_POST['username'];
$passwords = $_POST['passwords'];
$antrikan = mysqli_query($sambung_ke_db, "SELECT * FROM tb_user WHERE username='$username' AND passwords='$passwords'");

$cek_isi = mysqli_num_rows($antrikan);

if ($cek_isi > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:berhasil_login.php");
} else {
    header("location:halaman_utama.php?pesan-login=gagal");
}
?>