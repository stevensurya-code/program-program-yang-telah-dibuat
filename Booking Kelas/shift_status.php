<?php 
include "koneksi.php";

$IDb = $_GET['button_id'];
$IDr = $_GET['id_ruang'];
$sql = "SELECT * FROM shift WHERE ShiftID = ? && Status = 2";
$stmt = $pdo->prepare($sql);
$stmt->execute([$IDb]);
$row = $stmt->fetch();
$sql1 = "SELECT * FROM ruangan WHERE RoomID = ?";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute([$IDr]);
$row1 = $stmt1->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Shift</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<h1 style="text-align: center">Update Shift</h1>
	<form action="shift_proses.php" method="post">
	<h2>Nama Ruangan: <?= $row1['NamaRuangan'];?><br>
	Shift: <?= $row['Keterangan'];?><br>
	Peminjam: <?= $row['Peminjam'];?><br></h2>
	<input type="hidden" name="id" value="<?= $row['ShiftID'];?>">
	<button type="submit">Unbook</button><button><a href="admin.php">Cancel</a></button>
	</form>
</body>
</html>