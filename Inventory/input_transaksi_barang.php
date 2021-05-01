<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT TRANSAKSI</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="isi" align="center">
	<h1>INPUT TRANSAKSI BARU</h1>
	<form method="POST" action="input_transaksi_proses.php">
	<div class="form-group">
		ID Barang :
			<select id="Barang" name="id_b">
			<?php
				$sql = "SELECT * FROM stok_barang";
				$hasil = $pdo->query($sql);
				for( $x=1 ; $row = $hasil->fetch() ; $x++): 
				?>
			<option value='<?=$row['ID']?>'> <?php echo $row['Nama_Barang']?></option>	
			
			<?php endfor; ?></select>
				
	</div>
	<div class="form-group">
	Tipe Gerakan :
		<select name="tipe">
			<option value="masuk">Masuk</option>
			<option value="keluar">Keluar</option>
		</select>
	</div>
	<div class="form-group">
		Jumlah :
		<input type="number" name="jumlah">
	</div>
	<div class="form-group">
		Keterangan :
		<input type="text" name="ket">
	</div>
		<button type="submit" class="btn btn-primary">INPUT</button>
	</form>
	</div>
</body>
</html>