<html>
	<head>
	
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
		<!-- <script src="jquery-3.3.1.min.js"></script>
		<script src="Bootstrap/js/bootstrap.min.js"></script> -->
	</head>
	
	<body style="background-color:lavender;">
	
		
		
		
		<div class="container-fluid">
		<br>
			<center>
			<div style="padding-top: 10px; margin: 10px;">
			<font face="Comic Sans MS" >
				<div style="font-size: 24px; color:black; font-size:50px;"><span>  TRUSTED SHOP </span></div>
				</br>
				</br>
				<p style="color:black; font-size:30px;">LOGIN </p>
				
				<div style="outline-style: solid; width:500px;">
					</br>
					
					<form method="POST" action="Login_Pros.php">
						<label style="color:black;">USERNAME : </label>
						<input type="text" name="username" placeholder="Username" autocomplete="off" size="30"></br>
						<label style="color:black;">PASSWORD : </label>
						<input type="password" name="password" placeholder="Password" size="30"></br></br>
						<input type="submit" name="login" value="SIGN IN"></input>
						<br>
					</form>					
			</div>
		</center>
		
	</body>

</html>	