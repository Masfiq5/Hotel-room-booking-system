<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	include 'header.php';
?>

	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Fill up form</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					<div class = "form-inline" style = "float:left;">
						<label>Firstname</label><br />
						<input type = "text" value = "<?php echo $fetch['firstname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>

					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Lastname</label><br />
						<input type = "text" value = "<?php echo $fetch['lastname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>

					<div class = "form-inline" style = "float:left; margin-left:10px;">
						<label>Room Type</label><br />
						<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" size = "20" disabled = "disabled"/>
					</div>

	<br />	<br />	<br /><br />
					<div class = "form-inline" style = "float:left;">
						<label>Room No</label><br />
						<input type = "number" min = "0" max = "999" name = "room_no" class = "form-control" required = "required"/>
					</div>

					<div class = "form-inline" style = "float:left; margin-left:10px;">
						<label>Days</label><br />
						<input type = "number" min = "0" max = "99" name = "days" class = "form-control" required = "required"/>
					</div>

					<div class = "form-inline" style = "float:left; margin-left:10px;">
						<label>Extra Bed</label><br />
						<input type = "number" min = "0" max = "99" name = "extra_bed" class = "form-control"/>
					</div>

	<br />	<br />	<br /><br />
					<div class = "form-inline" style = "float:left; margin-left:0px;">
						<label>Breakfast</label><br />
						<input type = "number" min = "0" max = "99" name = "breakfast" class = "form-control"/>
					</div>

					<div class = "form-inline" style = "float:left; margin-left:10px;">
						<label>Lunch</label><br />
						<input type = "number" min = "0" max = "99" name = "lunch" class = "form-control"/>
					</div>

					<div class = "form-inline" style = "float:left; margin-left:10px;">
						<label>Dinner</label><br />
						<input type = "number" min = "0" max = "99" name = "dinner" class = "form-control"/>
					</div>
										<br style = "clear:both;"/><br />

					<button name = "add_form" class = "btn btn-primary"> Submit</button>

				<center>
					<li><label style = "color:#ff0000;">Extra bed cost 800 tk</label></li>
					<li><label style = "color:#ff0000;">Breakfast 150 tk per person</label></li>

					<li><label style = "color:#ff0000;">Lunch 300 tk per person</label></li>
					<li><label style = "color:#ff0000;">Dinner 250 tk per person</label></li>
					</center>

					</form>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>
<?php include 'footer.php'; ?>
