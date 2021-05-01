<?php
include "conn.php";

$namav = $_POST['Nama'];
$alamatv = $_POST['Alamat'];
$nohpv = $_POST['NoHp'];

try{
  $sql = "INSERT INTO vendor (Nama_Vendor, Alamat_Vendor, No_Telp) VALUES (?,?,?)";
  $stmt = $pdo ->prepare($sql);
  $stmt-> execute([$namav,$alamatv,$nohpv]);
  $baru = $pdo->lastInsertId();
  session_start();
  $_SESSION['Rid'] = $baru;

  header("location: Vendor.php");
}catch(PDOExeption $e){
  echo "Error : ".$e->getMessage();
}
?>