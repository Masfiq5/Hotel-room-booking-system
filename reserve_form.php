
<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}include 'header2.php';
?>
<?php
if(isset($_POST['submit'])){
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "mynew";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

$getway = $_POST['getway'];
$t_id = $_POST['t_id'];
$amount = $_POST['amount'];
$a_name = $_POST['a_name'];


$sql = "INSERT INTO tb_payment ( getway, t_id, amount, a_name)
 VALUES('$getway', '$t_id', '$amount', '$a_name')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "";

    if ($getway== "" || $t_id== "" || $amount== "" || $a_name== ""  ) {
         echo "Please input your values! ";
    }else {
      echo '<script type="text/javascript">alert("Thank you, Your Data is Updated...!!!")</script>';
    }
    }
}

?>
<br><center>
<html lang = "en">
	<head>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>

	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">

				<br />
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Congratulations Your Booking is Confirm...</h3></center>
					<br/>
          <center><h3>Please go to hotel for check in.</h3></center><br>
					<center><h4>THANK YOU!</h4></center>
					<br />
					<center><a href = "reservation1.php" class = "btn btn-success"> Back to reservation</a></center>
				</div>
				<div class = "col-md-4"></div>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
<?php
include 'footer.php';?>
