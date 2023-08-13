<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		$country = $_POST['country'];

		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$conn->query("INSERT INTO `guest` (firstname, lastname,email,gender,city,country, address, contactno)
		VALUES('$firstname',  '$lastname', '$email','$gender','$city', '$country', '$address', '$contactno')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+1 HOURS'))){
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending' && `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+4 HOURS"))."</label>
										</li>
									</ul>";
							}
						"</div>";
				}else{
						if($guest_id = $fetch['guest_id']){
							$room_id = $_REQUEST['room_id'];
							$conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin)
							 VALUES('$guest_id', '$room_id', 'Pending', '$checkin')") or die(mysqli_error());
							header("location:add_reserve.php.php");
						}else{
							echo "<script>alert('')</script>";
						}
				}
			}
	}
?>
