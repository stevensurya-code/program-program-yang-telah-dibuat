<?php 
include "koneksi.php";

$ID = $_GET['id'];
$sql = "SELECT * FROM ruangan WHERE RoomID = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$ID]);
$row = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Ruangan</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<h1>Update Ruangan</h1>
	<form action="update_proses.php" method="post">
	Nama Ruangan: 
	<input type="text" name="nama" value="<?= $row['NamaRuangan'];?>"><br>
	Harga: 
	<input type="text" name="harga" value="<?= $row['Harga'];?>"><br>
	Fasilitas: 
	<input type="text" name="fasilitas" value="<?= $row['Fasilitas'];?>"><br>
	Ukuran: 
	<input type="text" name="ukuran" value="<?= $row['Ukuran'];?>"><br>
	<input type="hidden" name="id" value="<?= $row['RoomID'];?>">
	
	<button type="submit">Save</button> <button><a href="admin.php">Cancel</a></button>
	
	</form>
	
</body>
</html>