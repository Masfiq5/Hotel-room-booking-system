<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';

?>
<meta charset = "utf-8" />
<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />

<center><font color="Bao564" style="font-family:Papyrus"><h2>Hotel Naz Garden</h2></font>
	<p class="footer-company-name"style="color:whitergb(17, 16, 15);"> Bogra City Bypass, Silimpur, Bogra-5800,Bangladesh.</p>
	<p class="footer-company-name"style="color:whitergb(34, 34, 31);">Telephone: +880 5178088, Mobile: +880 1755661199, Fax: +880 5151376 </p>
	<p class="footer-company-name"style="color:whitergb(34, 34, 31);"> Email: info@hotelnazgarden.com </p>
</center>

	<div class = "container-fluid">
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
				<a class = "btn btn-warning" href = "checkout.php"> Back</a>
					<button onclick="window.print();" class="btn btn-primary">print</button>
				<br />

	<table id = "table" class = "table table-bordered">
					<thead>
						<tr><th>Guest id</th>
							<th>Name</th>
							<th>Room Type</th>
							<th>Room No</th>
							<th>Check In</th>
							<th>Days</th>
							<th>Check Out</th>
							<th>Status</th>
							<th>Extra Bed</th>
							<th>Breakfast</th>
							<th>Lunch</th>
							<th>Dinner</th>
							<th>Bill</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `transaction` natural JOIN `guest` natural JOIN `room` WHERE `status` = 'Check Out'") or die(mysqli_query());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['guest_id']?></td>
							<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['room_type']?></td>
							<td><?php echo $fetch['room_no']?></td>

							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>"." Time: "."<label>".date("h:i a", strtotime($fetch['checkin_time']))."</label>"?></td>
							<td><?php echo $fetch['days']?></td>

							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+"
							.$fetch['days']."DAYS"))."</label>"." Time "."<label>".date("h:i A", strtotime($fetch['checkout_time']))."</label>"?></td>
							<td><?php echo $fetch['status']?></td>

							<td><?php if($fetch['extra_bed'] == "0"){ echo "None";}else{echo $fetch['extra_bed'];}?></td>

							<td><?php if($fetch['breakfast'] == "0"){ echo "None";}else{echo $fetch['breakfast'];}?></td>

							<td><?php if($fetch['lunch'] == "0"){ echo "None";}else{echo $fetch['lunch'];}?></td>

							<td><?php if($fetch['dinner'] == "0"){ echo "None";}else{echo $fetch['dinner'];}?></td>
							<td><?php echo "".$fetch['bill'].".00"?></td>
							<td><label class = "">Paid</label></td>
						</tr>
						<?php
							}
						?>
					</tbody><br>
				</table>
			</div>
		</div>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>
<?php include 'footer.php'; ?>
