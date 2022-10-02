<?php include('../config/dbconnect.php'); 
if(isset($_POST['submit'])){
	$name = $_POST['name']; 
	// $email = $_POST['email'];
    $pwd = $_POST['psw'];
	// $_SESSION["favcolor"] = "green";
	// $_SESSION["favanimal"] = "cat";
	$hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
$insert = "INSERT INTO `admins`(`adminname`, `password`, `date`) VALUES ('".$name."','".$hashed_password."',current_timestamp())";
$res = mysqli_query($conn,$insert);
if($res){
	@header("Location: ../index.php");

}
else{
	echo "fail";

}
	
}
 ?>