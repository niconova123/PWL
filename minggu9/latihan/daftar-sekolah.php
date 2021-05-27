<?php

class koneksi_database
{
    public function get_connection()
    {
        $host = "localhost";
        $user = "root";
        $user_pass = "";
        $db_name = "daftar_sekolah";
        $connectDB = new mysqli($host, $user, $user_pass, $db_name);
        return $connectDB;
    }
?>