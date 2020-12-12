<?php
session_start();
if(isset($_SESSION['id']))
{
	$uid=  $_SESSION['id'];
}
else
{
  header('location: login.php');
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<style type="text/css">
		
		#regi_wrapper{
			width: 90%;
			max-width: 500px;
			height: 600px;
			margin-top:auto;
			margin-right:auto;
			margin-bottom: auto;
			margin-left:auto;  
			background-color: white;
		}
		.b1{
			background-color: #664caf;
			color: white;
			padding: 12px 20px;
			margin: 8px 16px;
			border: none;
			cursor: pointer;
			width: 40%;
		}
		.b2{
			background-color: #664caf;
			color: white;
			padding: 9px 10px;
			margin: 8px 16px;
			border: none;
			cursor: pointer;
			width: 30%;
		}
	</style>
	<script>
		function myFunction() {
			var e = document.getElementById("s1");
			var strDest = e.value;
			var el = document.getElementById("s2");
			var strType = el.value;
			var amount;
			if(strDest == 'Vadodara' && strType == 'NON-AC'){
				amount = 900;
			}else if(strDest == 'Jaipur' && strType == 'NON-AC'){
				amount = 1100;
			}else if(strDest == 'Delhi' && strType == 'NON-AC'){
				amount = 2000;
			}else if(strDest == 'Goa' && strType == 'NON-AC'){
				amount = 700;
			}else if(strDest == 'Ahmedabad' && strType == 'NON-AC'){
				amount = 1000;
			}else if(strDest == 'Vadodara' && strType == 'AC'){
				amount = 1000;
			}else if(strDest == 'Jaipur' && strType == 'AC'){
				amount = 1300;
			}else if(strDest == 'Delhi' && strType == 'AC'){
				amount = 2500;
			}else if(strDest == 'Goa' && strType == 'AC'){
				amount = 850;
			}else if(strDest == 'Ahmedabad' && strType == 'AC'){
				amount = 1200;
			}
			
			document.getElementById("mytext").value = amount;
		}
	</script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	
		<?php
			include 'nav.php';
		?>
		
	
		<!-- main content start-->
		<div id="regi_wrapper">
		<form action=" " method="post">
		<h3 class="title1 text-center">Book Now</h3>
			<div class="form-group">
				<label for="formGroupExampleInput">Source</label>
				<input type="text" class="form-control" id="formGroupExampleInput" name="source" value="Mumbai" disabled	>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Destination</label><br/>
				<select style="padding:5px 100px;" name="taskOption" id='s1' required>
					<option>Please Choose</option>
					<option value="Vadodara">Vadodara</option>
					<option value="Jaipur">Jaipur</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>
					<option value="5">Ahmedabad</option>
				</select>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Type</label><br/>
				<select style="padding:5px 100px;" name="taskOption1" id='s2' required>
					<option>Please Choose</option>
					<option value="AC">AC</option>
					<option value="NON-AC">NON-AC</option>
				</select>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Notes</label>
				<input type="text" class="form-control" name="note" id="formGroupExampleInput">
			</div>
			<div class="form-group">
				<button type="button" class="b2" onclick="myFunction()">Get Fare</button>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Total Fare</label>
				<input type="text" class="form-control" id="mytext" name="tmt" value="" disabled>
			</div>
			<div class="form-group">
				<button type="submit" class="b1">Submit</button>
				<button type="cancle" class="b1">Cancle</button>
				<!-- <button type="submit" class="btn btn-dark">Submit</button> -->
				<!-- <button type="button" class="btn btn-dark">Cancle</button> -->
			</div>
		</form>
		</div>
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
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>

<?php 
	require("connection.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){

		if(empty($_POST['source']) && empty($_POST['taskOption']))  
      {  
           echo '<script>alert("Source and Destination Fields are required")</script>';  
	  } else{
		   $source = "Mumbai";
    	   $dest   = $_POST['taskOption'];
		   $type   = $_POST['taskOption1'];
		   $note   = $_POST['note'];
		   $tmt    = $_POST['tmt'];
		   
		   $query = "INSERT INTO bookings (source, destination, type, notes, totalFare, userId) VALUES('$source','$dest', '$type', '$note','$tmt','$uid')";
			$run = mysqli_query($conn, $query);
			if ($run == TRUE) {
				?>
				<script>   
				  alert("Ticket Booked");
				  window.open('index.php','_self');
				</script>
				<?php  
			  }else{
				 ?>
				<script>   
				  alert("Failed To book ticket");
				  window.open('index.php','_self');
				</script>
				<?php  
			  }
		}

	}
?>