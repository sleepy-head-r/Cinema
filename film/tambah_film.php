<!DOCTYPE html>
<html>
    <head>
        <title>Cinema Rayan</title>
</head>
<body>
    <h3>Tambah Data Film</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
<tr>
    <td>Judul Film</td>
    <td><input type="text" name="judul_film" required></td>
</tr>
<tr>
    <td>Genre</td>
    <td><input type="text" name="genre" required></td>
</tr>
<tr>
    <td>Durasi</td>
    <td><input type="text" name="durasi" required></td>
</table>
<button type="submit" name="simpan">Simpan</button>

