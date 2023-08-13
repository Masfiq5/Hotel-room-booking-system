<?php
	require_once 'connect.php';
	require_once 'validate.php';
	require 'name.php';
	include 'header.php';
	mysql_query("DELETE FROM guest WHERE guest_id = '$_REQUEST[guest_id]'");
	header("location:delete_guest.php");
?>
