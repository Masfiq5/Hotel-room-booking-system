<?php include 'header.php';
session_start();
?>
<html lang = "en">
	<head>

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>

	<div style = "margin-left:100px;margin-top:10px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body"><center>
				<strong><h3>MAKE A RESERVATION</h3></strong></center>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#3d33a6;"><?php echo "Price: ".$fetch['price'].".00"."Tk/Night"?></h4>
                <a style = "margin-left:20px;" href = "room_details.php?room_id=<?php echo $fetch['room_id']?>"
                class = "btn btn-info"> Details</a>


							<br /><br /><br />

						</div>
					</div>
				<?php
					}
				?>
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
