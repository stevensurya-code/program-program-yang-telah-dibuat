<?php  
require('conn.php');
session_start();

	if (isset($_POST['username']) and isset($_POST['password'])){
		
		// Assigning POST values to variables.
		$username = $_POST['username'];
		$password = $_POST['password'];


		// CHECK FOR THE RECORD FROM TABLE
		$sql = "SELECT * FROM Staff WHERE Username=?";
		 
		// $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		 $stmt = $pdo->prepare($sql);
		 $stmt->execute([$username]);
		 $row = $stmt->fetch();
		 $pass = $row['Password'];

		 if(password_verify($password, $pass)){
		 	$_SESSION['User'] = $row['Username'];
		 	$_SESSION['ID'] = $row['ID_Staff'];

		 	if($username == 'Admin'){
		 		header("location: HomeAdmin.php");
		 	}else{
		 		header("location: Home.php");
		 	}
		 }else{
		 	header("location:Index.php");
		 }

}else{
	header("location: Index.php");
}
?>