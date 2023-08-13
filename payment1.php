<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}include 'header2.php';
?>
<ul>
              <marquee class="marquee" scrollamount="5">
              <b> <span><p style="color:red;font-size:25px;"> Welcome to our Website...|| Please pay online at least 30% amount of tk for confirmation booking... Thank you..!!!</p> </span></b>
            </marquee>
        </ul>
<!--form part start-->
<h3><center><u>MAKE A RESERVATION</u></center></h3>
	<link rel="stylesheet" href="css/form.css">
<div class="wrapper">
<div class="form">
		<form action="reserve_form.php"method="POST">
			<div class="form_left1">

				<div class="getway">
				<input type="text" placeholder="Getway" name="getway" >
				</div>

			<div class="t_id">
			<input type="text" placeholder="Transaction ID" name="t_id" >
			</div>


			<div class="amount">
			<input type="text" placeholder="Amount" name="amount" required min="3">
			</div>

			<div class="a_name">
			<input type="text" placeholder="Account Holder Name" name="a_name" >
				</div>
		</div>
		<div class="form_3rd_row">
			<div class="form_3rd_row_left_clm">
				<input class="sub" type="submit" name="submit" value="Submit">
			</div>

		</div>
	</div>
	</form>
</div>
<!--form part end-->
<?php include 'footer.php';?>
