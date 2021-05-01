<?php

include "koneksi.php";

$nama = $_POST['nama'];
$pass = $_POST['pass'];
$tgl = $_POST['tgl'];
$hp = $_POST['hp'];
$add = $_POST['alamat'];
try{
  
	$sql = "INSERT INTO customer (Username,Password,TglLahir,NoTelp,Alamat,Roll)
				VALUES(?, ?, ?, ?, ?,?)";
		$stmt = $pdo -> prepare($sql);
		$stmt->execute([$nama,$pass,$tgl,$hp,$add,"2"]);
}catch(PDOExeption $e){
	echo "Error : ".$e->getMessage();
}
header("Location:/project_web/Login.php");
?>