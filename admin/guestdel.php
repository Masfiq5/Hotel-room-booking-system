<?php

//Connecting to the mysql
$con=mysqli_connect("localhost","root","");

//Select database
 mysqli_select_db($con, 'mynew');

//Select query
$sql = "DELETE FROM guest WHERE guest_id='$_GET[guest_id]'";

//Execute the query
if (mysqli_query($con, $sql))
   header("refresh:1; url=guestview.php");
else
   echo"Not Deleted";
?>
