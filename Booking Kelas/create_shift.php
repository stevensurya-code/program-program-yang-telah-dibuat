<?php

include "koneksi.php";

$ket = $_POST['keterangan'];
try{  
	$sql = "INSERT INTO shift (Keterangan)
				VALUES(?, ?)";
		$stmt = $pdo -> prepare($sql);
		$stmt->execute([$nama,$ket]);
}catch(PDOExeption $e){
	echo "Error : ".$e->getMessage();
}
header("Location:shift.php");
?>