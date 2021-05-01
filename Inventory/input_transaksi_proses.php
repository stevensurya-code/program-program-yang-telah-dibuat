<?php
include 'koneksi.php';

$id_b = $_POST['id_b'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['ket'];

echo $id_b;

echo "ayam ";
$sql1 = "SELECT Nama_Barang FROM stok_barang WHERE ID = $id_b";
$hasil1 = $pdo->query($sql1);
$nama = $hasil1->fetch();

if($tipe == "masuk"){

	$sql2 = "UPDATE stok_barang SET Stock = Stock+'$jumlah'  WHERE ID = ?";
	$stmt2 = $pdo->prepare($sql2);
	$stmt2->execute([$id_b]);
} else {
	$sql2 = "UPDATE stok_barang SET Stock = Stock-'$jumlah'  WHERE ID = ?";
	$stmt2 = $pdo->prepare($sql2);
	$stmt2->execute([$id_b]);

}

$sql3 = "INSERT INTO riwayat (Nama_Barang,Tipe_Gerakan_Barang,Jumlah,Keterangan) VALUES(?,?,?,?)";
$stmt3 = $pdo->prepare($sql3);
$stmt3->execute([$nama['Nama_Barang'],$tipe,$jumlah,$ket]);
header("location: dashboard.php");
?>