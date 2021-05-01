<?php
include "conn.php";

$nama = $_POST['Nama'];
$tgl = $_POST['Date'];
$nohp = $_POST['NoHp'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$hash = password_hash("$pass", PASSWORD_BCRYPT);
try{
  $sql = "INSERT INTO staff (Nama, Tgl_Lahir, No_Telp, Username, Password) VALUES (?,?,?,?,?)";
  $stmt = $pdo ->prepare($sql);
  $stmt-> execute([$nama,$tgl,$nohp,$user,$hash]);
  $baru = $pdo->lastInsertId();
  session_start();
  $_SESSION['Rid'] = $baru;

  header("location: staff.php");
}catch(PDOExeption $e){
  echo "Error : ".$e->getMessage();
}
?>