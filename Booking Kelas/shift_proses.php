<?php 
include "koneksi.php";

$ID = $_POST['id'];

try{  
	$sql = "UPDATE shift SET Status = '1' , Peminjam = '' WHERE ShiftID = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$ID]);
		
}catch(PDOExeption $e){
	echo "Error : ".$e->getMessage();
}
header("location: admin.php");
?>