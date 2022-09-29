<?php include('../config/dbconnect.php'); 
if(isset($_POST['submit'])){
	$name = $_POST['name']; 
	// $email = $_POST['email'];
    $pwd = $_POST['psw'];



$insert = "INSERT INTO `admins`(`adminname`, `password`, `date`) VALUES ('".$name."','".$pwd."',current_timestamp())";
$res = mysqli_query($conn,$insert);
if($res){
	@header("Location: ../index.php");

}
else{
	echo "fail";

}
	
}
 ?>