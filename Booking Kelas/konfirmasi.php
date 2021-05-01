<?php
session_start();
try{
	include "koneksi.php";
	$sql = "SELECT * FROM ruangan";
	$hasil = $pdo->query($sql);
	
}catch(PDOException $e){
	echo "Error: ".$e->getMessage();
}
$a =  $_GET['button_id'];
$b = $_GET['id_ruang'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi</title>
	<script>
		function validateForm() {
		var N = document.forms["konfirmform"]["peminjam"].value;
		if (N == "" || N == null) {
			alert("Name must be filled out");
			return false;
			}
		}
	</script>
</head>
<body>
	<form name = "konfirmform" action="book.php" onsubmit="return validateForm()" method="POST"> 
		Nama :
		<input type="text" name="peminjam" value="<?php echo $_SESSION['username']?>">
		<input type="hidden" name="ids" value= "<?php echo $a ?>" >
		<input type="hidden" name="idr" value= "<?php echo $b ?>" >
		<button type="submit">Book</button>
		<?php if($_SESSION['Roll']==1): ?>
		<button><a href= "admin.php">Cancel</a></button>
			<?php else: ?>
			<button><a href= "customer.php">Cancel</a></button>
		<?php 
			endif;
		?>
			
				
	</form>
</body>
</html>
