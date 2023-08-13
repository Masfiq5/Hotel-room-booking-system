<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php'; //session start
include 'header.php';?>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Payment</div>
				<table id = "table" class = "table table-bordered">
					<thead>

						<th> ID</th>
         <th> Getway</th>
         <th>amount </th>
         <th>Acount holder name</th>
  		 	<th>Transaction ID</th>
         </tr>
       </thead>
       <tbody>
         <?php
           $query = $conn->query("SELECT * FROM `tb_payment`") or die(mysqli_error());
           while($fetch = $query->fetch_array()){
         ?>
         <tr>
					 <td><?php echo $fetch['p_id']?></td>
           <td><?php echo $fetch['getway']?></td>
           <td><?php echo $fetch['amount']?></td>
           <td><?php echo $fetch['a_name']?></td>
           <td><?php echo $fetch['t_id']?></td>
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
         </html>
<?php include 'footer.php'; ?>
