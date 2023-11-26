<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($first_name) && !empty($last_name) && !empty($user_name) && !empty($password)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users (first_name,last_name,user_id,user_name,password) 
			values ('$first_name','$last_name','$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;

	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>




	<!-- signup form start -->
	<div class="s-form">
		<img src="images/logo.png" alt="logo">
		<h1>Sign Up</h1>
		<p>Please sign up to use the platform</p>
		<form method="post">
			<input id="text" type="text" name="first_name" placeholder="First Name" required />
			<input id="text" type="text" name="last_name" placeholder="Last Name" required />
			<input type="text" name="user_name" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<button>Sign Up</button>
			<p class="s-message">Already have an account? <a href="login.php">Login</a></p>
		</form>
	</div>
	<!--  signup form end -->



</body>

</html>