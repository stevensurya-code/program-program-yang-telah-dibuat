<?php
session_start();
try{
	include "koneksi.php";
	$sql = "SELECT * FROM ruangan";
	$hasil = $pdo->query($sql);
	
}catch(PDOException $e){
	echo "Error: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div>

		<h1>SELAMAT DATANG <?php echo $_SESSION['username']
		?> </h1>
		<br>
		<h1>SILAHKAN Pilih Ruangan</h1>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Ruangan</th>
				<th>Harga</th>
				<th>Fasilitas</th>
				<th>Ukuran</th>
				<th>Shift</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 0;
				while ($row = $hasil->fetch()):
				$i++; 
			?>
			
			<tr>
				<td id="<?= $i?>"><?= $i?></td>
				<td><?= $row['NamaRuangan']?></td>
				<td><?= $row['Harga']?></td>
				<td><?= $row['Fasilitas']?></td>
				<td><?= $row['Ukuran']?></td>
				<td>
				<?php 
				$temp = $row['RoomID'];
				$shift = "SELECT * FROM shift WHERE RoomID='$temp'";
				$h = $pdo->query($shift);
				for( $x=0 ; $tampung = $h->fetch() ; $x ++): 
					if($tampung['Status'] == 2):
						?>
						<a href="#" class="btn btn-primary disabled"> 
					<?php if($tampung['Status'] == 2)?> <?= $tampung['Keterangan']?></a>
					<?php else: ?>
					<a class="btn btn-primary" href="konfirmasi.php?button_id=<?php echo $tampung['ShiftID'] ?>&id_ruang=<?php echo $i?>"> 
					<?php if($tampung['Status'] == 2)?> <?= $tampung['Keterangan']?></a>
					<?php 
					endif; 
					endfor; ?>
				</td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>
	</div>
	<div>
		<button><a href="Login.php">LOGOUT</button>
	</div>
</body>
</html>