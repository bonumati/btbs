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

	 } 



 ?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<body style="text-align:center">
    <a href="logout.php" style="float:right"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
    <h1>Welcome <?php echo $uname; ?></h1>
    <h2>Further development is going on!!!!!!!</h2>
</body>
</html>