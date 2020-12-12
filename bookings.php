<?php
session_start();
require("connection.php");
if(isset($_SESSION['id']))
{
    $uid=  $_SESSION['id'];
    $query = "SELECT bookingId, source, destination, type, notes, totalFare, date From bookings WHERE (userID='$uid')";
    $run = mysqli_query($conn, $query);
    // echo "<table border='1'>
    // <tr>
    // <th>Firstname</th>
    // <th>Lastname</th>
    // </tr>";

    // while($row = mysqli_fetch_array($run))
    // {
    // echo "<tr>";
    // echo "<td>" . $row['source'] . "</td>";
    // echo "<td>" . $row['destination'] . "</td>";
    // echo "</tr>";
    // }
    // echo "</table>";

}
else
{
  header('location: login.php');
}

?><!DOCTYPE HTML>
<html>
<head>
<title>Bookings</title>
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
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
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
                <h3 class="title1">Bookings</h3>
                <table>
        <tr>
            <th>Booking Id</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Type</th>
            <th>Booking Date<th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($run)) {    
        ?>
        <tr>
            <td><?php echo $row['bookingId']; ?></td>
            <td><?php echo $row['source']; ?></td>
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['date']; ?></td>
            
        </tr>
            <?php 
            }
            ?>
        </table>
				
			</div>
		</div>

		<!--footer-->
		<div class="footer">
		   <p>&copy; BUS BOOKING SYSTEM 2020</a></p>
		</div>
        <!--//footer-->
	<!-- </div> -->
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