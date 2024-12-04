<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data penayangan</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            </style>
</head>
<body>
<ul class="navlist">
                        <li><a href="../film/index.php">Data Film</a></li>
                        <li><a href="index.php">Data Penayangan</a></li>
                    </ul>    

    <h2>Data Penayangan</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Judul Film</th>
                <th>Waktu</th>
                <th>Tanggal</th>
                <th><a href="tambah_penayangan.php">Tambah Data</a></th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT * FROM penayangan");
    while ($penayangan = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $penayangan['nama_film'] ?></td>
        <td><?php echo $penayangan ['waktu'] ?></td>
        <td><?php echo $penayangan ['tanggal'] ?></td>
        <td align="center">
        <a href="edit_penayangan.php?id=<?php echo $penayangan['penayangan_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus_penayangan.php?id=<?php echo $penayangan['penayangan_id'] ?>">Hapus</a>
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
