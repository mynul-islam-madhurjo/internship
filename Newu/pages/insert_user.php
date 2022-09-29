<?php include('../config/dbconnect.php'); 
if(isset($_POST['submit'])){
	$first_name = $_POST['first_name']; 
	$last_name = $_POST['last_name']; 


$insert = "INSERT INTO `user`(`first_name`, `last_name`) VALUES ('".$first_name."','".$last_name."')";
$res = mysqli_query($conn,$insert);
if($res){
	// @header("Location: ../index.php");
	header("Location: all_users.php");

}
else{
	echo "fail";

}
	
}

 ?>