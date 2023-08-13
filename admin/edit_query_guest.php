<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_guest'])){
		$firstname  = $_POST['firstname'];

		$lastname  = $_POST['lastname'];
		$email = $_POST['email'];
		$gender  = $_POST['gender'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];

		$conn->query("UPDATE guest SET
		 firstname = '$firstname',	lastname ='$lastname',email ='$email',
			gender ='$gender',city ='$city',country ='$country',
			address ='$address',contactno ='$contactno'
			WHERE guest_id ='$_REQUEST[guest_id]'") or die(mysqli_error());
		header("location:guestview.php");
	}
