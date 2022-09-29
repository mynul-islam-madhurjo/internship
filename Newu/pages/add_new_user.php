<?php include_once('../inc/header.php'); ?>
 <?php include_once('../config/dbconnect.php'); ?>
 <div class="container-fluid" id="mycontainer">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4 mx-auto" id="myform">
 				<form action="insert_user.php" method="POST" enctype="multipart/form-data">
 					<div class="form-group">
 						<label>First Name:</label>
 						<input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
 					</div>
 					<div class="form-group">
 						<label>Last Name:</label>
 						<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
 					</div>
 					<input type="submit" name="submit" class="btn btn-info">
 				</form>
 				
 			</div>
 			<div class="col-md-4"></div>
 		</div>
 	</div>
 </div>
 <?php include_once('../inc/footer.php'); ?>