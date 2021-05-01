<?php
session_start();
include "koneksi.php";
$ids = $_POST['ids'];
$idr = $_POST['idr'];
$nama = $_POST['peminjam'];
$sql = "UPDATE shift 
				SET Peminjam = ?,
					Status = ?
				WHERE ShiftID = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nama,"2",$ids]);
if($_SESSION['Roll'] == 1){
header("location:admin.php");
}else{
	header("location:customer.php");
}
?>