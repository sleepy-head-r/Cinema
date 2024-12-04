<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){
    $judul_film = $_POST['judul_film'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];

    $sql = "INSERT INTO film
    (judul_film, genre, durasi)
    VALUES ('$judul_film','$genre','$durasi')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("akses ditolak");
}
