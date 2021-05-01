<?php

include "koneksi.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$fasil = $_POST['fasilitas'];
$uk = $_POST['ukuran'];
try{  
	$sql = "INSERT INTO ruangan (NamaRuangan,Harga,Fasilitas,Ukuran)
				VALUES(?, ?, ?, ?)";
		$stmt = $pdo -> prepare($sql);
		$stmt->execute([$nama,$harga,$fasil,$uk]);
		$baru = $pdo->lastInsertId();
		session_start();
		$_SESSION['Rid'] = $baru;
		header("location: create_formshift.php");
}catch(PDOExeption $e){
	echo "Error : ".$e->getMessage();
}
?>