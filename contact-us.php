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
	if($_SERVER["REQUEST_METHOD"]=="POST"){

				$email = $_POST['email'];
				$username = $_POST['name'];
				$message = $_POST['message'];
				$sub = $_POST['subject'];
 				$name = "DSM";
				$to = "abcxox97@gmail.com";
				$subject = $sub;
				$body = "This is an automated message from $name.\nPlease don't reply this email.\n You got message from $username his email is $email.\n Message: $message \n Cheers,\nTeam DSM";
				$headers = "From: noreply@dsm.com\n";
				mail($to,$subject,$body,$headers);

	?>
			  <script>   
            alert("Mail Sent!");
            window.open('contact-us.php','_self');
          </script>
          <?php 

	}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
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
				<h3 class="title1">Contact Us</h3>
				<p class="creating"></p>
				<div class="sign-up-row widget-shadow">
					<h5></h5>
                   
					<form action="" method="post">

				
						<div class="sign-u">
						<div class="sign-up1">
							<h4> Name:</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text"  name="name" required="">
							
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Email:</h4>
						</div>
						<div class="sign-up2">
								<input type="text"  name="email" required="">		
						</div>
						<div class="clearfix"> </div>
                    </div>
                    
                    <div class="sign-u">
						<div class="sign-up1">
							<h4>Subject:</h4>
						</div>
						<div class="sign-up2">
								<input type="text"  name="subject" required="">		
						</div>
						<div class="clearfix"> </div>
                    </div>
                    <div class="sign-u">
						<div class="sign-up1">
							<h4>Message:</h4>
						</div>
						<div class="sign-up2">
								<textarea cols="67" rows="6"  name="message" required="" ></textarea>		
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sub_home">
							<input type="submit" value="Contact Us">
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