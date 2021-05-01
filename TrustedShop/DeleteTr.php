<?php 
require 'conn.php';
session_start();
$id = $_GET['id'];
try{
$sql = "SELECT * FROM Transaksi WHERE ID_Transaksi = '$id'";
$stmt = $pdo->query($sql);
$row = $stmt->fetch();
$idC = $row['ID_Customer'];
$sql1 = "SELECT * FROM orders WHERE ID_Transaksi = '$id'";
$stmt1 = $pdo->query($sql1);
$row1 = $stmt1->fetch();
$idB = $row1['ID_Barang'];
$qtyTR = $row1['Quantity'];
$sql2 = "SELECT * FROM product WHERE ID_Product = '$idB'";
$stmt2 = $pdo->query($sql2);
$row2 = $stmt2->fetch();
$qtyPR = $row2['Quantity'];
$qtyA = $qtyPR + $qtyTR;
$sql3 = "UPDATE product SET Quantity = ? WHERE ID_Product = '$idB'";
$stmt3 = $pdo->prepare($sql3);
$stmt3-> execute([$qtyA]);
$sql4 = "DELETE FROM orders WHERE ID_Transaksi = ?";
$stmt5 = $pdo->prepare($sql4);
$stmt5->execute([$id]);
$sql5 = "DELETE FROM transaksi WHERE ID_Transaksi = ?";
$stmt5 = $pdo->prepare($sql5);
$stmt5->execute([$id]);
$sql6 = "DELETE FROM customer WHERE ID_Customer = ?";
$stmt6 = $pdo->prepare($sql6);
$stmt6->execute([$idC]);
if ($_SESSION['User'] == "Admin") {
	header("Location:TransaksiAdmin.php");
}else{
	header("Location:Transaksi.php");
}
}catch(PDOExeption $e){
	echo "Error : ".$e->getMessage();
}

 ?>