<?php

//Connecting to the mysql
$con=mysqli_connect("localhost","root","");

//Select database
 mysqli_select_db($con, 'mynew');

//Select query
$sql = "DELETE FROM feadback WHERE f_id='$_GET[f_id]'";

//Execute the query
if (mysqli_query($con, $sql))
   header("refresh:0; url=fead.php");
else
   echo"Not Deleted";
?>
