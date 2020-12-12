<?php
	require("connection.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST"){

			$email = $_POST['emailId'];
    		$query = "SELECT * FROM user WHERE email_id = '$email' " ;

    		$run = mysqli_query($conn, $query) or die(mysqli_error());
    		
			$rows = mysqli_num_rows($run);

    		if( $rows > 0)  
           {  

           	while ($row = $run->fetch_assoc()) {
  			   $email = $row['email_id'];
 				$password = $row['password'];

 				$name = "DSM";
				$request = $password;
				$to = $email;
				$subject ="Forgot Password";
				$body = "This is an automated message from $name. Please don't reply this email. \n Your  password: $request \n CHeers,\nTeam DSM ";
				$headers = "From: noreply@dsm.com\n";
				// $headers .= "Reply-To: $email_address";
				mail($to,$subject,$body,$headers);

	?>
			  <script>   
            alert("Mail Sent!");
            window.open('login.php','_self');
          </script>
          <?php 


  				}
               
           }  
           else  
           {  
                echo '<script>alert("Email Not Exist")</script>';  
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
	<h1 class="head" style="color:black;">Forget Password</h1><br><br>
	<form action=" " method="post">
		<div class="container">
			<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Email</b></label>
			<input type="email" id ="textPanNo" placeholder="Enter Your Email Id"  name="emailId" required><br>
			<br>
			<button type="submit" class="b1">Submit</button>
			<p style="font-size: 120%;text-align: center; color:black;"><a href="login.php" required><b>Back to login</b></a>.</p>
		</div>
	</form>

	
</div>
</div>



<!-- <script>
function ValidatePAN() { 
  var Obj = document.getElementById("textPanNo");
        if (Obj.value != "") {
            ObjVal = Obj.value;
            var panPat =  /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
            if (ObjVal.search(panPat) == -1) {
                Obj.setCustomValidity( Obj.value + "' is not a valid Pancard No. Enter Correct one");
                
            }
          else
            {
              Obj.setCustomValidity("");
              }
        }
  }
</script> -->
</body>
</html>