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
	$Username   = $_POST['username'];
	$email 		= $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($email)){
		array_push($errors, "Email is required");
	}
	if(empty($password_1)){
		array_push($errors, "Password is required");
	}
	if($password_1!=$password_2){
		array_push($errors, "The two passwords do not match!!");
	}
	if($errors==0){
		$password = md5($password_1);//encrypt password before storing in database.
		$query = "INSERT INTO tbl_user (username,email,password) 
					  VALUES ('$username','$email','$password')";
		$result = $db->insert($query);
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
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<lavel>Email</lavel>
			<input type="text" name="email">
		</div>

		<div class="input-group">
			<lavel>Password</lavel>
			<input type="text" name="password_1">
		</div>

		<div class="input-group">
			<lavel>Confirm Password</lavel>
			<input type="text" name="password_2">
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


