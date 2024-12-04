<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "cinema";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}