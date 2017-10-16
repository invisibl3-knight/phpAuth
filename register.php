<?php
include 'config.php';
include 'Database.php';

$db = new Database();
?>

<?php
$username = "";
$email = "";
$errors=array();
if(isset($_POST['register'])){
	$username   = $_POST['username'];
	$email 		= $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];


/*	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($email)){
		array_push($errors, "Email is required");
	}
	if(empty($password_1)){
		array_push($errors, "Password is required");
	}*/
	if($password_1!=$password_2){
		array_push($errors, "The two passwords do not match!!");
	}
	else{
		$password= md5($password_1);//encrypt password before storing in database.
		$query = "INSERT INTO tbl_user (username,email,password) 
					  VALUES ('$username','$email','$password')";
		$result = $db->insert($query);

		if($result!=NULL) {
			header("Location: login.php");
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Registration system using PHP and MySQL</title>

	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form action="register.php" method="post">
		<!-- Display validations error here -->
		<?php include 'errors.php';?>
		<div class="input-group">
			<lavel>Username</lavel>
			<input type="text" name="username" required>
		</div>

		<div class="input-group">
			<lavel>Email</lavel>
			<input type="text" name="email" required>
		</div>

		<div class="input-group">
			<lavel>Password</lavel>
			<input type="password" name="password_1" required>
		</div>

		<div class="input-group">
			<lavel>Confirm Password</lavel>
			<input type="password" name="password_2" required>
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>

		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	</form>
</body>
</html>


