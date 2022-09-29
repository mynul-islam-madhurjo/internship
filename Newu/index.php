<?php include('inc/header.php'); ?>
<?php include('config/dbconnect.php'); ?>
<?php include('pages/registration_form.php'); ?>
<div class="container-fluid" id="mycontainer">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4"></div>
			
 			<div class="col-md-4 mx-auto" id="myform">
 				<form action="signin_updated.php" class="form_design" method="POST" >
                    <label> Username: </label>
                    <input type="text" name="fname" class="form-control"><br/>
                    <label> Password: </label>
				    <input type="password" name="pass" class="form-control"><br/><br/>
				    <input type="submit" value="Sign In" class="btn btn-info">
 				</form>
 				
 			</div>
 			<div class="col-md-4"></div>
 		</div>
 	</div>
 </div>