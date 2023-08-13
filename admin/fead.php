<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php'; //session start
include 'header.php';?>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Feadback</div>
				<table id = "table" class = "table table-bordered">
					<thead>

         <th> ID</th>
         <th> Name</th>
         <th>Email</th>
         <th>Contact</th>
         <th>Message</th>
         <th>Action</th>

         </tr>
       </thead>
       <tbody>
         <?php
           $query = $conn->query("SELECT * FROM `feadback`") or die(mysqli_error());
           while($fetch = $query->fetch_array()){
         ?>

         <tr>
           <td><?php echo $fetch['f_id']?></td>
           <td><?php echo $fetch['name']?></td>

           <td><?php echo $fetch['email']?></td>
           <td><?php echo $fetch['C_number']?></td>
           <td><?php echo $fetch['message']?></td>


           <td><center> <a  onclick = "confirmationDelete(this); return false;" href = "feeddel.php?f_id=<?php echo $fetch['f_id']?>">
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
			 <script src = "../js/printThis.js"></script>
			 <script src = "../js/bootstrap.js"></script>

			 <script src = "../js/jquery.dataTables.js"></script>
			 <script src = "../js/dataTables.bootstrap.js"></script>
			 <script type = "text/javascript">
			 	$(document).ready(function(){
			 		$("#table").DataTable();
			 	});
			 </script>

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
