<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	include 'header.php';
?>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Room</div>
				<a class = "btn btn-success" href = "add_room.php"><i class = "glyphicon glyphicon-plus"></i> Add Room</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Room Type</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Details</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `room`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['room_type']?></td>
							<td><?php echo $fetch['price']?></td>
							<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "50" width = "50"/></center></td>
							<td><?php echo $fetch['details']?></td>
							<td><center><a class = "btn btn-warning" href = "edit_room.php?room_id=<?php echo $fetch['room_id']?>">
							 Edit</a> <br><br>
							 <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_room.php?room_id=<?php echo $fetch['room_id']?>"></i> Delete</a></center></td>
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	}
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>
<?php include 'footer.php'; ?>
