<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$room_no = $_POST['room_no'];
		$days = $_POST['days'];
		$extra_bed = $_POST['extra_bed'];
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];

		$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+4 HOURS"));
		if($row > 0){
			echo "<script>alert('Room not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` =
				 '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();

			$total = $fetch2['price'] * $days;
			$total2 = 800 * $extra_bed;
			$total3 = 150 * $breakfast;
			$total4 = 300 * $lunch;
			$total5 = 250 * $dinner;
			$total6 = $total + $total2 + $total3 + $total4 + $total5;

			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `days` = '$days', `extra_bed` = '$extra_bed',

`breakfast` = '$breakfast', `lunch` = '$lunch', `dinner` = '$dinner',

				 `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total6'
				  WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>
