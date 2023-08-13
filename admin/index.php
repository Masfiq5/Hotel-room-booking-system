<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
<head>
	<title>Hotel Naz Garden</title>
	<!-- add icon link -->
	<link rel="shortcut icon" href="images/logo/logo.JPG" type="image/x-icon">

	</head>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	
<body>
<style media="screen">
body {
margin: 0;
padding: 0;
background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

}
#login .container {

background-color:  #DAF7A6 ;
}
</style>
	<div class = "container">
		<br/><br/><br /><br>

		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<center><h4>Admin Login</h4></center>
				</div>
				<div class = "panel-body">
					<form method = "POST">
						<div class = "form-group">
							<center><label>Username</label></center>
							<input type = "text" name = "username" class = "form-control" placeholder="Username" required = "required" />
						</div>
						<div class = "form-group">
							<center><label>Password</label></center>
							<input type = "password" name = "password" class = "form-control" placeholder="Password" required = "required" />
						</div>
						<br />

						<div class = "form-group">
							<button name = "login" class = "form-control btn btn-primary">Login</i></button>
						</div>
							<center>

						<div class="bottom">
							 <h5><a href="../index.php">Naz Garden Home</a></h5></div></center>
					</form>
					<?php require_once 'login.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>
