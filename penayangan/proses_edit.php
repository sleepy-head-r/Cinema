<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama_film = $_POST['nama_film'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE penayangan SET
        nama_film='$nama_film',
        waktu='$waktu',
        tanggal='$tanggal'
        WHERE penayangan_id=$id";

        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data berhasil diedit!";
        } else {
            $_SESSION['notifikasi'] = "Data gagal diedit!";
        }
        header('Location: index.php');
    } else {
        die("akses ditolak");
    }
?>