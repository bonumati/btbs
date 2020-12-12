<?php
	require("connection.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST"){

			$email = $_POST['email'];
    		$mypassword = $_POST['psw'];
    	
			// $password = md5($mypassword); //encrypt the password before auth in the database
    		 $query = "SELECT * FROM user WHERE email_id = '$email' and password = '$mypassword' ";

    		$run = mysqli_query($conn, $query) or die(mysqli_error());
    		
			$rows = mysqli_num_rows($run);

    		    if( $rows > 0)  
           {  

           	while ($row = $run->fetch_assoc()) {
  			  $_SESSION['id'] =$row['id'];
                header("location:index.php");      
  

    }
               
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }


	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
	<style type="text/css">
		span.psw {
		float: right;
		}
	</style>
</head>
<body>	
<div id = "background_img">
<div id = "login_wrapper">
	<h1 class="head" style="color:black;">LOG IN</h1><br><br>
	<form action=" " method="post">
		<div class="container">
			<label style="font-size: 125%;color:black;"><b>&nbsp;&nbsp;&nbsp;Email:</b></label>
			<input type="email" placeholder="Enter Your Email Id" name="email" required><br><br>
			<label style="font-size: 125%;color:black;"><b>&nbsp;&nbsp;&nbsp;Password:</b></label>
			<input type="password" placeholder="Enter Password" name="psw"  id="myInput" required><br><br>
			&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="myFunction()"><a  style="color:black;">Show Password</a>
			<span class="psw" style="color:black;">Forgot <a href="forgot.php">Password?</a></span>
			<br><br>
			<button type="submit" class="b1">Sign In</button>

			<p style="font-size: 120%;text-align: center; color:black;">Don't have an account? <br> <a href="register.php" required><b>Create an account</b></a>.</p>
		</div>
	</form>

	
</div>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>