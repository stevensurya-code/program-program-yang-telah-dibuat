<?php
include "conn.php";
session_start();

$IDT = $_POST['ID'];
$namac = $_POST['Nama'];
$date = $_POST['Date'];
$alamat = $_POST['Alamat'];
$prod = $_POST['Prod'];
$qty = $_POST['qty'];
$nohp = $_POST['NoHp'];
$IDS = $_SESSION['ID'];

try{
  $sql = "INSERT INTO customer (Nama_Customer, Alamat, No_Telp) VALUES (?,?,?)";
  $stmt = $pdo ->prepare($sql);
  $stmt-> execute([$namac,$alamat,$nohp]);
  $baru = $pdo->lastInsertId();
  $_SESSION['Rid'] = $baru;
  $sql1 = "SELECT *  FROM product WHERE ID_Product = '$prod'";
  $stmt1 = $pdo -> query($sql1);
  $row = $stmt1->fetch();
  $hrg = $row['Harga_Jual'];
  $qtyA = $row['Quantity'];
  $THarga = $qty * $hrg;
  // $sql2 = "SELECT * FROM staff WHERE ID_staff = '$IDS'";
  // $stmt2 = $pdo->query($sql2);
  // $row1 = $stmt2->fetch();
  // $namas = $row1['Nama_Staff'];
  $sql3 = "INSERT INTO transaksi (ID_Transaksi, ID_Customer,ID_Staff, Tanggal_Transaksi, Total_Harga) VALUES (?,?,?,?,?)";
  $stmt3 = $pdo -> prepare($sql3);
  $stmt3 ->execute([$IDT,$baru,$IDS,$date,$THarga]);

  $sql4 = "INSERT INTO orders (ID_Transaksi,ID_Barang,Quantity) VALUES (?,?,?)";
  $stmt4 = $pdo -> prepare($sql4);
  $stmt4 -> execute([$IDT,$prod,$qty]);
  $qty1 = $qtyA - $qty; 
  $sql5 = "UPDATE product SET Quantity = ? WHERE ID_Product = ?";
  $stmt5 = $pdo -> prepare($sql5);
  $stmt5 -> execute([$qty1,$prod]);
  header("location: TransaksiAdmin.php");
}catch(PDOExeption $e){
  echo "Error : ".$e->getMessage();
}
?>