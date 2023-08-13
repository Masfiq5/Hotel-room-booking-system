<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}include 'header2.php';
?>
<!DOCTYPE html>
<html lang = "en">
	<head>

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>

	<div style = "margin-left:150px;margin-top:10px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3><center><u>PLEASE FILL UP THIS FORM FOR RESERVATION</u></center></h3></strong>
				<br />
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:20px;">
						<h3><?php echo $fetch['room_type']?></h3>
            <h3 style = "color:#3d33a6;"><?php echo " ".$fetch['price'].""."Tk/night";?></h3>
					</div>

          <br /><br /><br /><br /><br /><br /><br />
          <a style = "margin-left:20px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>"
            class = "btn btn-info"> Reserve</a>
				</div>
				<br style = "clear:both;" /> <center>
				<div class = "well col-md-4">
<h3>Room Facility</h3>
          <h5 style = "color:#101012;"><?php echo " ".$fetch['details']."";?></h5>
        </div></center>
				</div>

			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>
<?php include 'footer.php';?>
