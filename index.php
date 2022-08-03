<?php
include('links.php');
include('connection.php');


if (isset($_POST['submit']))

 {
 	
$nam=$_POST['username'];
$pas=$_POST['password'];


$rs=mysqli_query($con,"SELECT * from login where username='$nam' and password='$pas' ");

$count=mysqli_num_rows($rs);

if($count>0)

{

header ("location:http://localhost/billingsystem/admindashboard.php");

	}

else
{
	echo "<script> alert('Something Went Wrong')</script>";
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Login</title>
			<link rel="stylesheet" href="style.css">
</head>
<body>
			
		<div class="login">
					<form class="login-container" action="" method="POST">
<h2 class="login-header">Log in</h2>
													
								<p>
										<input type="email" placeholder="Username" name="username">
								</p>
								
								<p>
										<input type="password" placeholder="Password" name="password">
								</p>
								
								<div class="login-btn">



								<a href="">
									<input type="submit" name="submit" value="Log in">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
											
								</a>

								</div>
								<!-- or -->
					<p class="or">Not Registered?</p> 
					<a href="#">Sign Up Here</a>
					</form> 
		    </div>
			
</body>
</html>
