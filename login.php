<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Registration system using PHP and MySQL</title>

	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>


	<form action="login.php" method="post">
		<div class="input-group">
			<lavel>Username</lavel>
			<input type="text" name="username">
		</div>


		<div class="input-group">
			<lavel>Confirm Password</lavel>
			<input type="text" name="password_1">
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>

		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>

	</form>
</body>
</html>