<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $conn->query("INSERT INTO barang (nama_barang, harga, stok) VALUES ('$nama_barang', $harga, $stok)");

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>

<body>
    <h1>Tambah Barang</h1>
    <form action="" method="POST">
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" required><br><br>
        <label>Harga:</label>
        <input type="number" name="harga" required><br><br>
        <label>Stok:</label>
        <input type="number" name="stok" required><br><br>
        <button type="submit">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>

</html>