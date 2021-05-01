<?php 

include "koneksi.php";

try{
	include ('koneksi.php');
	$sql = "UPDATE ruangan 
				SET NamaRuangan= ?,
					Harga= ?,
					Fasilitas= ?,
					Ukuran= ?
				WHERE RoomID = ?";
	$stmt = $pdo->prepare($sql);
	$ID = $_POST['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$fasilitas = $_POST['fasilitas'];
	$ukuran = $_POST['ukuran'];
	$stmt->execute([$nama,$harga,$fasilitas,$ukuran,$ID]);

	$sql2 = "UPDATE shift 
				SET Status= ?,
					Peminjam =?
				WHERE RoomID = ? && ShiftID = ?";
	$stmt2 = $pdo->prepare($sql2);
	
}catch(PDOExeption $e){
	echo "Error: ".$e->getMessage();
}
header("Location:admin.php");
?>