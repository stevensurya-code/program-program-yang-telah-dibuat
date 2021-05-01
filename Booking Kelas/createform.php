<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script>
		function validateForm() {
		var N = document.forms["regisform"]["nama"].value;
		var P = document.forms["regisform"]["pass"].value;
		var T = document.forms["regisform"]["tgl"].value;
		var H = document.forms["regisform"]["hp"].value;
		var A = document.forms["regisform"]["alamat"].value;
		if (N == "" || N == null) {
			alert("Name must be filled out");
			return false;
			}
		if (P == "" || P == null) {
			alert("Password must be filled out");
			return false;
			}
		if (T == "" || T == null) {
			alert("Tanggal lahir must be filled out");
			return false;
			}
		if (H == "" || H == null) {
			alert("No HP must be filled out");
			return false;
			}
		if (A == "" || A == null) {
			alert("Alamat must be filled out");
			return false;
			}
		}
	</script>
</head>
<body>
<h1>Register</h1>
<form name = "regisform" action="create.php" onsubmit="return validateForm()" method="post" required>
	<div class="form-line">
	Username: 
	<input type="text" name="nama" class="form-control"><br>
	</div>
	<div class="form-line">
	Password: 
	<input type="Password" name="pass" class="form-control"><br>
	</div>
	<div class="form-line">
	Tgl Lahir: 
	<input type="date" name="tgl" class="form-control"><br>
	</div>
	<div class="form-line">
	No Telfon: 
	<input type="tel" name="hp" class="form-control"><br>
	</div>
	<div class="form-line">
	Alamat: 
	<input type="text" name="alamat" class="form-control"><br>
	</div>
	<input type="submit" value="Submit">
	<!-- button type="submit" class="btn btn-raised waves-effect bg-red">Register</button -->
</form>
</body>
</html>
