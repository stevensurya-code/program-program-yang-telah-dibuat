<?php  	
	require('conn.php');		 
		 $username = "Admin";
		 $password = "Admin";
		 
			
			$hash = password_hash("$password", PASSWORD_BCRYPT); 
			$sql ="INSERT INTO Staff (Username, Password)
					VALUES( ?, ?)" ;
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$username, $hash]);		 
?>