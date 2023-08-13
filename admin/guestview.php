<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php'; //session start
include 'header.php';?>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Guest information</div>
				<table id = "table" class = "table table-bordered">
					<thead>
         <th> ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Gender</th>
         <th>City</th>
         <th>Country</th>
         <th>Address</th>
         <th>Contact No</th>
         <th>Action </th>
         </tr>
       </thead>
       <tbody>
         <?php
           $query = $conn->query("SELECT * FROM `guest`") or die(mysqli_error());
           while($fetch = $query->fetch_array()){
         ?>

         <tr>
           <td><?php echo $fetch['guest_id']?></td>
           <td><?php echo $fetch['firstname']?></td>

           <td><?php echo $fetch['lastname']?></td>
           <td><?php echo $fetch['email']?></td>
           <td><?php echo $fetch['gender']?></td>
           <td><?php echo $fetch['city']?></td>
           <td><?php echo $fetch['country']?></td>
           <td><?php echo $fetch['address']?></td>

           <td><?php echo $fetch['contactno']?></td>

           <td><center><a  href = "edit_guest.php?guest_id=<?php echo $fetch['guest_id']?>" >
            ✅</a> <a  onclick = "confirmationDelete(this); return false;" href = "guestdel.php?guest_id=<?php echo $fetch['guest_id']?>">
            ❌</a></center></td>
         </tr>
         <?php
           }
         ?>
         </tbody>
         </table>
         </div>
         </div>
         </div>
         <br />
         <br />
       </body>

         <script src = "../js/jquery.js"></script>
         <script src = "../js/bootstrap.js"></script>
         <script src = "../js/jquery.dataTables.js"></script>
         <script src = "../js/dataTables.bootstrap.js"></script>

         <script type = "text/javascript">
         function confirmationDelete(anchor){
         var conf = confirm("Are you sure you want to delete this record?");
         if(conf){
         window.location = anchor.attr("href");
         }
         }
         </script>

         <script type = "text/javascript">
         $(document).ready(function(){
         $("#table").DataTable();
         });
         </script>
         </html><?php include 'footer.php'; ?>
