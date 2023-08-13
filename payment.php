
<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}include 'header2.php';
?>
	<div class = "container-fluid">
	<link rel="stylesheet" href="css/bikash.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	               <!-- Post Content -->
	               <hr>
	               <h4 align="center">Payment Method</h4>
	               <hr>
	               <div class="row">
	                  <div class="col-lg-6">
	                     <h4 class="card-header bg-info"> <img style="width:25%;" class="img-fluid" src="images/payment/bkash-logo-FBB258B90F-seeklogo.com.png" alt="">
	                        Payment (USSD)
	                     </h4>
	                     <div class="card-body">
	                        <ul class="list-group list-group-flush text-justify">
													<li>	bKash Number: 01792953379 or 01571786087</li>
	                           <li> Dial *247# from your bKash enabled handset</li>
	                           <li>Select “3” for Payment</li>
	                           <li>Enter bKash Merchant Account Number</li>
	                           <li>Enter Payment Amount</li>
	                           <li>Enter Payment Reference (Your Name)</li>
	                           <li>Type “1” for Counter No.</li>
	                           <li>Enter bKash PIN number for confirming payment</li>
	                           <li>You will receive a payment confirmation message</li>

	                        </ul>
	                     </div>

	                  </div>
	                  <div class="col-lg-6">
	                     <h4 class="card-header bg-info"> <img style="width:16%;" class="img-fluid" src="images/payment/dutch-bangla-rocket-logo-B4D1CC458D-seeklogo.com.png" alt="">
	                        Payment
	                        Method
	                     </h4>
	                     <div class="card-body">
	                        <ul class="list-group list-group-flush text-justify">
														<li>Rocket Number:  01792953379 OR  Biller ID# 2974 </li>
												<li> Rocket Number: 01815894179 OR Biller ID# 2980 </li>
	                           <li>Go to your rocket mobile menu by dialing *322#</li>
	                           <li>Choose Bill Pay</li>
	                           <li>Choose 1 for Self, 0 for Others( if others enter payer number)</li>
	                           <li>Enter Biller ID Number (As given Above)</li>
	                           <li>Enter Your Bill Number : (Your Name)</li>
	                           <li>Enter amount:</li>
	                           <li>Enter Rocket Pin Number :</li>
	                           <li>Done! You will receive a confirmation message with transaction ID from 16216 </li>
	                        </ul>
	                     </div></div></div>


	               <div class="row">
	                  <div class="col-lg-12">
	                   <center>  <h4 class="card-header bg-info">Payment Method (Using APP)</h4></center>
	                     <hr>
	                     <div class="row">
	                        <div class="col-lg-6">
	                          <h4 class="card-header bg-info"> <img style="width:25%;" class="img-fluid" src="images/payment/bkash-logo-FBB258B90F-seeklogo.com.png" alt="">bKash </h4>
	                           <div class="card-body">
	                              <ul class="list-group list-group-flush text-justify">
	                                 <li> Select “Payment” icon from APP home screen</li>
	                                 <li>Enter bKash Merchant Account Number  <b>01745948400</b></li>
	                                 <li>Enter Payment Amount</li>
	                                 <li>Enter Payment Reference (Your Name) & bKash PIN number</li>
	                                 <li> “Tap & Hold” bottom of the APP for confirming payment</li>
	                                 <li>You will receive a payment confirmation message</li>
	                              </ul><br>
								  QR CODE:
	                              <img style="width:55%;" class="img-fluid" src="images/payment/bkash1.JPG" alt="">
	                           </div></div>

	                        <div class="col-lg-6">
	                          <h4 class="card-header bg-info"> <img style="width:25%;" class="img-fluid" src="images/payment/bkash-logo-FBB258B90F-seeklogo.com.png" alt="">bKash</h4>
	                           <div class="card-body">
	                              <ul class="list-group list-group-flush text-justify">
	                                 <li> Select “Payment” icon from APP home screen</li>
	                                 <li>Enter bKash Merchant Account Number  <b>01745948448</b></li>
	                                 <li>Enter Payment Amount</li>
	                                 <li>Enter Payment Reference (Your Name) & bKash PIN number</li>
	                                 <li> “Tap & Hold” bottom of the APP for confirming payment</li>
	                                 <li>You will receive a payment confirmation message</li>
	                              </ul><br>
								  QR CODE:
	                              <img style="width:55%;" class="img-fluid" src="images/payment/bkash2.JPG" alt="">
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div><center>
<div class="link">
<a href="payment1.php">Click here</a>
</div>
</div>
<br>
<?php include 'footer.php';?>
