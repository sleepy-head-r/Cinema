<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $judul_film = $_POST['judul_film'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];

    $sql = "UPDATE film SET
        judul_film='$judul_film',
        genre='$genre',
        durasi='$durasi'
        WHERE film_id=$id";

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
?>