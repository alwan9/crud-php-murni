<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM barang WHERE id = $id");

header('Location: index.php');
exit;
?>