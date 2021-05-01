<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script>
		function validateForm() {
		var N = document.forms["konfirmform"]["nama"].value;
		var H = document.forms["konfirmform"]["harga"].value;
		var F = document.forms["konfirmform"]["fasilitas"].value;
		var U = document.forms["konfirmform"]["ukuran"].value;
		if (N == "" || N == null) {
			alert("Name must be filled out");
			return false;
			}
		if (H == "" || H == null) {
			alert("Harga must be filled out");
			return false;
			}
		if (F == "" || F == null) {
			alert("Fasilitas must be filled out");
			return false;
			}
		if (U == "" || U == null) {
			alert("Ukuran must be filled out");
			return false;
			}
		}
	</script>
</head>
<body>
	<div class="card">
<h1>Tambah Ruangan</h1>
<form name = "konfirmform" action="create_proses.php" onsubmit="return validateForm()" method="post" required>
	<div class="form-line">
	Nama Ruangan: 
	<input type="text" name="nama" class="form-control"><br>
	 </div>
	 <div class="form-line">
	Harga: 
	<input type="text" name="harga" class="form-control"><br>
	 </div>
	 <div class="form-line">
	Fasilitas: 
	<input type="text" name="fasilitas" class="form-control"><br>
	 </div>
	 <div class="form-line">
	Ukuran: 
	<input type="text" name="ukuran" class="form-control"><br>
	 </div>
	 <div class="form-line">
	<button type="submit" class="btn btn-raised waves-effect bg-red">Tambah</button>
	<button><a href="admin.php" class="btn btn-raised waves-effect bg-red">Cancel</a></button>
	 </div>
</form>
</div>
</body>
</html>