<?php

include("../koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM penayangan WHERE penayangan_id = '$id'");
$penayangan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Film Cinema</title>
</head>
<body>
    <h3>Edit Data Film</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $penayangan['penayangan_id']; ?>">
    <table border="0">
        <tr>
            <td>Judul Film</td>
            <td>
                <input type="text" name="nama_film" value="<?php echo $penayangan['nama_film']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>
                <input type="time" name="waktu" value="<?php echo $penayangan['waktu']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>
                <input type="date" name="tanggal" value="<?php echo $penayangan['tanggal']; ?>" required>
            </td>
        </tr>
    </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
