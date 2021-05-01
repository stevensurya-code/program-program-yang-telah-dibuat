<?php
include "conn.php";

$namab = $_POST['Nama'];
$namav = $_POST['Vend'];
$hargab = $_POST['hargaB'];
$hargaj = $_POST['hargaJ'];
$quan = $_POST['quantity'];
$desc = $_POST['Desc'];

try{
	$sql = "INSERT INTO product (ID_Vendor,Nama_Barang,Deskripsi,Harga_Beli,Harga_Jual,Quantity)VALUES(?,?,?,?,?,?)";
	$stmt = $pdo -> prepare($sql);
	$stmt ->execute([$namav,$namab,$desc,$hargab,$hargaj,$quan]);
	$baru = $pdo->lastInsertId();
	session_start();
	$_SESSION['Rid'] = $baru;
	header("location: Stock.php");
}catch(PDOExeption $e){
	echo "Error : ".$e->getMessage();
}
?>