<?php  
	require("connection.php");
	session_start();
	$errors = array();
	 $panerr ="";
	 $emailerr = "";
	if($_SERVER["REQUEST_METHOD"]=="POST"){

		if(empty($_POST['usname']) && empty($_POST['pssw']))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      	else{
		   $myusername = $_POST['usname'];
		//    $pan_no     = $_POST['pno'];
    	   $mobileno   = $_POST['mobno'];
    	   $email      = $_POST['email'];
		   $mypassword = $_POST['pssw'];
		   $address    = $_POST['address'];
		   $pincode    = $_POST['pincode'];

    	   $panerr ="";

    	    $user_check_query = "SELECT * FROM user WHERE  email_id ='$email' ";

    	    $result = mysqli_query($conn, $user_check_query);
 			 $user = mysqli_fetch_array($result);

 			//   if ($user['pancard_no'] == $pan_no) {
			//       $panerr = "Pancard Already Exists";
			//       array_push($errors, "Pancard");

			     
			//     }

			    if ($user['email_id'] == $email) {
			    	$emailerr = "Email Already Exists";
			      	array_push($errors, "Email");
			    }
			    	   if (count($errors) == 0) {
			  	// $password = md5($mypassword);//encrypt the password before saving in the database

			  	$query = "INSERT INTO user (username, mobile_no, email_id, password, address, pincode) VALUES('$myusername','$mobileno', '$email', '$mypassword','$address','$pincode')";
			  mysqli_query($conn, $query);

			  $sql = "SELECT * FROM user WHERE  email_id ='$email'";
			   $run = mysqli_query($conn, $sql);
			  $rows = mysqli_num_rows($run);

    		    if( $rows > 0){
		
		 	while ($row = $run->fetch_assoc()) {
  			  $_SESSION['id'] =$row['id'];

		header("location: home.php");
			  }
			}

			  }


			  }

			}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
	<style type="text/css">
		
		#regi_wrapper{
			width: 90%;
			max-width: 500px;
			height: 900px;
			margin-top:auto;
			margin-right:auto;
			margin-bottom: auto;
			margin-left:auto;  
			background-color: white;
		}
	</style>
	 
</head>
<body>
	<div id = "background_img" style='overflow:auto;'>
		<div id = "regi_wrapper">
		<h1 class="head" style="color:black;">Register</h1><br><br>
			<form action=" " method="post">
				<div class="container">
					<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Username</b></label>
					<input type="text" placeholder="Enter Username" name="usname" required><br><br>
					
					<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Contact No.</b></label>
					<input type="text" placeholder="Enter Your Mobile No." maxlength="10" name="mobno" required><br><br>

					<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Address</b></label>
					<input type="text" placeholder="Enter Your Address."  name="address" required><br><br>
	
					<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Pincode</b></label>
					<input type="text" placeholder="Enter Your Pincode" maxlength="6" name="pincode" required><br><br>

					<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Email</b></label>
					<input type="email" placeholder="Enter Email id" name="email" required><br>
					<span style="word-wrap: normal; width: auto;background: red; padding: auto; "><?php echo $emailerr; ?></span>
					<br>

					<label style="font-size: 125%; color:black;"><b>&nbsp;&nbsp;&nbsp;Create Password</b></label>
					<input type="password" placeholder="Enter Password" name="pssw"  id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
					
					&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="myFunction()"><a style="color:black;">Show Password</a>
					<br><br>
					<button type="submit" class="b1">Register</button>
					<p style="font-size: 120%;text-align: center; color:black;">Already have an account? <br><a href="login.php" required>Login</a>.</p>
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