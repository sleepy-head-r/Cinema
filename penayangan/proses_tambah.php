<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nama_film = $_POST['nama_film'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO penayangan      
    (nama_film, waktu, tanggal)
    VALUES ('$nama_film','$waktu','$tanggal')";

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
