<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Film</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            .navbar {
                display: flex;
                flex-direction: column;
            }
            </style>
</head>
<body>
                <ul class="navlist">
                        <li><a href="index.php">Data Film</a></li>
                        <li><a href="../penayangan/index.php">Data Penayangan</a></li>
                    </ul>    

    <h2>Data Film</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Judul Film</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th><a href="tambah_film.php">Tambah Data</a></th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT * FROM film");
    while ($film = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $film['judul_film'] ?></td>
        <td><?php echo $film ['genre'] ?></td>
        <td><?php echo $film ['durasi'] ?></td>
        <td align="center">
        <a href="edit_film.php?id=<?php echo $film['film_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus_film.php?id=<?php echo $film ['film_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
}
        ?>
        </tbody>
        </table>
        <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </body
        </html>
