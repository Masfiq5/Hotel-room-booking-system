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
					<div style = "float:left; margin-left:50px;">
						<h3><?php echo $fetch['room_type']?></h3>
						  <h3 style = "color:#3d33a6;"><?php echo " ".$fetch['price'].""."Tk/night";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname:</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>

						<div class = "form-group">
							<label>Lastname:</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>

						<div class = "form-group">
							<label>Email:</label>
							<input type = "email" class = "form-control" name = "email" required = "required" />
						</div>

						<div class = "form-group">
							<label>Gender:</label>
							<input type = "text" class = "form-control" name = "gender" required = "required" />
						</div>
						<div class = "form-group">
							<label>city:</label>
							<input type = "text" class = "form-control" name = "city" required = "required" />
						</div>
						<div class = "form-group">
							<label>Country:</label>
							<input type = "text" class = "form-control" name = "country" required = "required" />
						</div>

						<div class = "form-group">
							<label>Address:</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No:</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in:</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest">Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
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
