<?php include_once('../inc/header.php'); ?>
<?php include_once('../config/dbconnect.php'); ?>
<?php 
$id =  $_GET['id'];
$get_the_user = "SELECT * FROM user WHERE ID = $id ";
$res = mysqli_query($conn,$get_the_user);
$rs = mysqli_fetch_assoc($res);
// echo $rs['first_name'];
// echo $rs['last_name'];
?>

<div class="container-fluid" id="mycontainer">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4 mx-auto" id="myform">
 				<form action="update_user.php" method="GET" enctype="multipart/form-data">
 					<div class="form-group">
                        <!-- <label>Old First Name was <?php echo $rs['first_name'];?></label> <br> -->
 						<label>New First Name:</label>
 						<input type="text" name="New_first_name" class="form-control" value="<?php echo $rs['first_name'];?>" >
 					</div>
 					<div class="form-group">
                        <!-- <label>Old Last Name was <?php echo $rs['last_name'];?></label> <br> -->
 						<label>New Last Name:</label>
 						<input type="text" name="New_last_name" class="form-control"  value="<?php echo $rs['last_name'];?>" >
 					</div>
 					<div class="form-group" hidden>
 						<label>Primary Key</label>
 						<input type="number" name="id" value="<?php echo htmlspecialchars($id); ?>" class="form-control" >
 					</div>
 					<input type="submit" name="submit" class="btn btn-info">
 				</form>
 				
 			</div>
 			<div class="col-md-4"></div>
 		</div>
 	</div>
 </div>
 <?php include_once('../inc/footer.php'); ?> -->