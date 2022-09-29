<?php 

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "updated";
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if($conn){
	// echo "Connected";
}
else{
	echo "Connection Failed";
}
?>