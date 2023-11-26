<?php 

session_start();

include("connection.php");
include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>




	 <!-- login form start -->
    <div class="l-form">
	<img src="images/logo.png" alt="logo">
		<h1>Login</h1>
		<p>Please login to use the platform</p>
		<form  method="post">
			<input type="text" name="user_name" placeholder="username" required>
			<input type="password" name="password" placeholder="password" required>
			<button>login</button>
			<p class="l-message">Not registered? <a href="signup.php">Create an account</a></p>
		</form>
    </div>
	 <!--  login form end -->



</body>
</html>