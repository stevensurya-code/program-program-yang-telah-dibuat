<?php
include 'koneksi.php';
$sql2 = "SELECT * FROM riwayat";
$hasil2 = $pdo->query($sql2);
$id = 0;
if (isset($_GET['id'])){
	$id = $_GET['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<div class="Menu" align="center">
	<h1>MENU</h1>
	<a href="input_barang_baru.php" class="btn btn-primary">Input Barang Baru</a></br>
	<a href="input_transaksi_barang.php" class="btn btn-primary">Input Transaksi Barang</a>
	</div>
	<div class="container">
		<div class="row">
		<div class="col">
			<table class="table table-striped table-light" >
				<tr>
				<a href="dashboard.php" class="btn btn-info">Sort By Default</a>
				<a href="dashboard.php?id=1" class="btn btn-primary">Sort Stock Ascending</a>
				<a href="dashboard.php?id=2" class="btn btn-secondary">Sort Stock Descending</a>
				</tr>
				<thead class="thead-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID Barang</th>
					<th scope="col">Nama Barang</th>
					<th scope="col">Stock</th>
				</tr>
				</thead>
				
				<tbody>
				<?php 
					if($id ==1){
						$sql1 = "SELECT * FROM stok_barang ORDER BY Stock ASC";
					} elseif($id==2){
						$sql1 = "SELECT * FROM stok_barang ORDER BY Stock DESC";
					}else{
						$sql1 = "SELECT * FROM stok_barang";
					}
					
					$hasil1 = $pdo->query($sql1);
					$i = 0;
					while ($row1 = $hasil1->fetch()):
					$i++; 
				?>
				<tr>
					<td><?= $i ?></td>
					<td id="<?= $row1['ID']?>"><?= $row1['ID']?></td>
					<td><?= $row1['Nama_Barang']?></td>
					<td><?= $row1['Stock']?></td>
				</tr>
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		<div class="col">
			<table class="table table-striped table-light">
				<thead class="thead-dark">
				<tr>
					<th scope="col">ID Transaksi</th>
					<th scope="col">Nama Barang</th>
					<th scope="col">Tipe Gerakan Barang</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Keterangan</th>
				</tr>
				</thead>
				
				<tbody>
				<?php 
					$i = 0;
					while ($row2 = $hasil2->fetch()):
					$i++; 
				?>
				<tr>
					<td id="<?= $row2['ID_Transaksi']?>"><?= $row2['ID_Transaksi']?></td>
					<td><?= $row2['Nama_Barang']?></td>
					<td><?= $row2['Tipe_Gerakan_Barang']?></td>
					<td><?= $row2['Jumlah']?></td>
					<td><?= $row2['Keterangan']?></td>
				</tr>
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</body>
</html>