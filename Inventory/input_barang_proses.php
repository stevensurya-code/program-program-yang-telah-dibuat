<?php
include 'koneksi.php';

$nama = $_POST['nb'];

$sql = "INSERT INTO stok_barang (Nama_Barang, Stock) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nama, "0"]);
header("location: dashboard.php");
?>