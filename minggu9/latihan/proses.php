<?php
require 'model.php';

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama-sekolah'];
    $alamat = $_POST['alamat-sekolah'];
    $model = new Model();
    $model->insert($nama, $alamat);
    header('Location:menu-utama.php');
}

if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama-sekolah'];
    $alamat = $_POST['alamat-sekolah'];
    $model = new Model();
    $model->update($id, $nama, $alamat);
    header('Location:menu-utama.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('Location:menu-utama.php');
}
?>