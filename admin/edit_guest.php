<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	include 'header.php';
?>

	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Guest / Change guest information</div>
				<?php
					$query = $conn->query("SELECT * FROM `guest` WHERE `guest_id` = '$_REQUEST[guest_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">
					<form method = "POST" action = "edit_query_guest.php?guest_id=<?php echo $fetch['guest_id']?>">
						<div class = "form-group">
							<label>First Name </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['firstname']?>" name = "firstname" />
						</div>

            <div class = "form-group">
							<label>Last Name </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['lastname']?>" name = "lastname" />
						</div>

            <div class = "form-group">
							<label>email </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['email']?>" name = "email" />
						</div>

            <div class = "form-group">
							<label>gender  </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['gender']?>" name = "gender" />
						</div>

            <div class = "form-group">
							<label>city  </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['city']?>" name = "city" />
						</div>

            <div class = "form-group">
							<label>country  </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['country']?>" name = "country" />
						</div>

            <div class = "form-group">
							<label>address  </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['address']?>" name = "address" />
						</div>


						<div class = "form-group">
							<label>contactno </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['contactno']?>" name = "contactno" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_guest" class = "btn btn-warning form-control"> Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html><?php include 'footer.php'; ?>
