<?php
include "conn.php";

$namab = $_POST['Prod'];
$namav = $_POST['Vend'];
$hargab = $_POST['hargaB'];
$hargaj = $_POST['hargaJ'];
$quan = $_POST['quantity'];

$sql1 = "SELECT * FROM product WHERE ID_Product = '$namab' AND ID_Vendor = '$namav'";
$stmt1 = $pdo -> query($sql1);
$row = $stmt1 ->fetch();
$aa = $row['Quantity'];
$quanT = $quan + $aa;
try{
  $sql = "UPDATE product 
  SET Harga_Jual=?,
  Harga_Beli=?,
  Quantity =?
  WHERE ID_Product = ? AND ID_Vendor = ?";
  $stmt = $pdo -> prepare($sql);
  $stmt ->execute([$hargaj,$hargab,$quanT,$namab,$namav]);
  $baru = $pdo->lastInsertId();
  session_start();
  $_SESSION['Rid'] = $baru;

   echo $namav;
   echo $namab;
  header("location: StockAdmin.php");
}catch(PDOExeption $e){
  echo "Error : ".$e->getMessage();
}
?>