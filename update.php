<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM barang WHERE id = $id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $conn->query("UPDATE barang SET nama_barang = '$nama_barang', harga = $harga, stok = $stok WHERE id = $id");

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>

<body>
    <h1>Edit Barang</h1>
    <form action="" method="POST">
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= $data['nama_barang']; ?>" required><br><br>
        <label>Harga:</label>
        <input type="number" name="harga" value="<?= $data['harga']; ?>" required><br><br>
        <label>Stok:</label>
        <input type="number" name="stok" value="<?= $data['stok']; ?>" required><br><br>
        <button type="submit">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>

</html>