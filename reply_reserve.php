
<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}include 'header2.php';
?>
<html lang = "en">
	<head>

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>

	<div style = "margin-left:100px;margin-top:10px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">

				<br />
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
          <center><h3>Congratulations Your Booking is Confirm...</h3></center>	<br />
					<center><h3>Please go to hotel for check in.</h3></center>
					<br />
					<center><h4>THANK YOU!</h4></center>
					<br />
					<center><a href = "reservation1.php" class = "btn btn-success">Back to reservation</a></center>
				</div>
				<div class = "col-md-4"></div>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
