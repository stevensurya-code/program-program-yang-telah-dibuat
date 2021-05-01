<?php
include "koneksi.php";

$id = $_GET['id'];
$sqla = "SELECT Status FROM shift WHERE RoomID = ? AND Status = 2";
$stmta = $pdo->prepare($sqla);
$stmta->execute([$id]);
try{
	if($stmta == "" || $stmta == null ){
	$sql1 = "DELETE FROM shift WHERE RoomID = ?";
	$stmt1 = $pdo->prepare($sql1);
	$stmt1->execute([$id]);
	$sql2 = "DELETE FROM ruangan WHERE RoomID = ?";
	$stmt2 = $pdo->prepare($sql2);
	$stmt2->execute([$id]);
	}else{
		header("Location:admin.php?error=BOOKED");
	}
}catch(PDOException $e){
	echo "Error: ".$e->getMessage();
	header("Location:admin.php");
}
?>