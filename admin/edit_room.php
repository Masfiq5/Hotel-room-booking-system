<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	include 'header.php';
?>

	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction Room / Change Room</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Predential suite" <?php if($fetch['room_type'] == "Predential suite"){echo "selected";}?>>Predential suite</option>
								<option value = "Deluxe Suite " <?php if($fetch['room_type'] == "Deluxe Suite "){echo "selected";}?>>Deluxe Suite</option>
								<option value = "Super Deluxe" <?php if($fetch['room_type'] == "Super Deluxe"){echo "selected";}?>>Super Deluxe</option>
								<option value = "Deluxe" <?php if($fetch['room_type'] == "Deluxe"){echo "selected";}?>>Deluxe</option>
								<option value = "Standard" <?php if($fetch['room_type'] == "Standard"){echo "selected";}?>>Standard</option>

							</select>
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../room/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" id = "photo" name = "photo" />
						</div>
<div class = "form-group">
						<textarea id="details" name="details" rows="4" cols="50">
					  <?php echo $fetch['details']?>"
					  </textarea>

	</div>
						<br />
						<div class = "form-group">
							<button name = "edit_room" class = "btn btn-warning form-control"> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_room.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html><?php include 'footer.php'; ?>
