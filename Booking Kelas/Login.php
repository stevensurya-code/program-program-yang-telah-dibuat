<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="card">
		<h4 class="l-login">Login</h4>
        <form id="sign_in" method="POST" action="check_login.php">
            <div class="form-line">
                <label class="form-label">Username :</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-line">
                <label class="form-label">Password :</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-raised waves-effect bg-red" name="login">SIGN IN</button><br>
            <a href="createform.php" class="btn btn-raised waves-effect bg-red" name="login">SIGN UP</a>
        </form>
	</div>
</body>
</html>
