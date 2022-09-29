<?php include_once('../inc/header.php'); ?>
 <?php include_once('../config/dbconnect.php'); ?>
 <div class="container-fluid" id="mycontainer">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4 mx-auto" id="myform">
 				<form action="delete_user.php" method="POST" enctype="multipart/form-data">
 					<div class="form-group">
 						<label>Give ID</label>
 						<input type="number" name="id" class="form-control" >
 					</div>
 					<input type="submit" name="submit" class="btn btn-info">
 				</form>
 				
 			</div>
 			<div class="col-md-4"></div>
 		</div>
 	</div>
 </div>
 <?php include_once('../inc/footer.php'); ?>