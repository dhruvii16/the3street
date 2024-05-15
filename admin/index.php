<?php
session_start();

// Establish connection to your database
include 'connection.php';

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Retrieve input values
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the email and password match in the admin table
    $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = $con->query($query);
   
    // Check if there is a match
    if ($result->num_rows > 0) {
        // Authentication successful, create session and redirect to dashboard
        
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        echo "<script>alert('Invalid email or password'); window.location.href='index.php';</script>";
        exit;
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Admin | The3rdStreet</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>

<style>
        
    </style>
<body >
	<div class="login">
		<h1><a href="index.php">The3rdStreet </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form method="post">
			<div class="col-md-12">
				<div class="login-mail">
					<input type="text" placeholder="Username" required="" name="email">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="" name="password">
					<i class="fa fa-lock"></i>
				</div>
				  <div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login" name="login">
					</label>
					
			</div>

			
			</div>
			
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->

<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

