<?php


$sambung_ke_db = mysqli_connect("localhost", "root", "", "minggu7");

if (!$simpanData) {
    echo mysqli_error($sambung_ke_db);
}
?>