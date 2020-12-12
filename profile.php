<?php
session_start();
if(isset($_SESSION['id']))
{
}
else
{
  header('location: login.php');
}

?>
<?php 
 require("connection.php");
  $uid=  $_SESSION['id'];
  

    $sql = "SELECT * FROM user WHERE  id = '$uid'";

     $run = mysqli_query($conn, $sql);
	while ($rows = $run->fetch_assoc()) {
	 	$uname = $rows['username'];
	 	$mobno = $rows['mobile_no'];
		$email = $rows['email_id'];
		$pinco = $rows['pincode'];
		$addre = $rows['address']; 

	 } 



 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	
		<?php
			include 'nav.php';
		?>
		
		<!-- <div id="page-wrapper"> -->
			<div class="main-page signup-page">
				<h3 class="title1">Profile</h3>
				<p class="creating"></p>
				<div class="sign-up-row widget-shadow">
					<h5></h5>
					<form action="" method="post">
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Name:</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" value="<?php echo $uname; ?>" name="name" required="">
							
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Email:</h4>
						</div>
						<div class="sign-up2">
								<input type="text" value="<?php echo $email; ?>" name="email" required="">		
						</div>
						<div class="clearfix"> </div>
                    </div>
                    
                    <div class="sign-u">
						<div class="sign-up1">
							<h4>Contact No:</h4>
						</div>
						<div class="sign-up2">
								<input type="text"  value="<?php echo $mobno; ?>" name="contact" minlength="10" required="">		
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Pincode:</h4>
						</div>
						<div class="sign-up2">
								<input type="text"  value="<?php echo $pinco; ?>" name="pincode" minlength="6" required="">		
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Address:</h4>
						</div>
						<div class="sign-up2">
								<input type="text" value="<?php echo $addre; ?>"  name="address" required="" ></textarea>		
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sub_home">
	 						<a href="updatePassword.php">
	 						<input type="button" style="border: none; outline: none; cursor: pointer; color: #fff; background: #6164C1; width: 23%; padding: .5em 1em; font-size: 1em; margin: 0.5em 0 0 11em;" href="updatePassword.php" value="Upate Password">
							</a>
							 <input type="submit" value="Update">
						<div class="clearfix"> </div>
					</div> 
					</form>

				</div>
			</div>
		<!-- </div> -->

		<!--footer-->
		<div class="footer">
		   <p>&copy; BUS BOOKING SYSTEM 2020</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>

	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$myusername = $_POST['name'];
	$mobileno   = $_POST['contact'];
	$email      = $_POST['email'];
	$address    = $_POST['address'];
	$pincode    = $_POST['pincode'];

	
			$uid = $_SESSION['id'];		
			$query="UPDATE `user` SET `username` = '$myusername', `mobile_no` = '$mobileno', `email_id` = '$email', `address` = '$address', `pincode` = '$pincode' WHERE `id` = '$uid'";
		   $run = mysqli_query($conn , $query);
	       if ($run == TRUE) {
          ?>
          <script>   
            alert("Profile Updated");
            window.open('profile.php','_self');
          </script>
          <?php  
        }else{
           ?>
          <script>   
            alert("Profile NOT Updated!");
            window.open('profile.php','_self');
          </script>
          <?php  
        }
}
?>