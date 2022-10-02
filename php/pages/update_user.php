<?php include('../config/dbconnect.php');

if(isset($_GET['submit'])){
	$New_first_name = $_GET['New_first_name']; 
	$New_last_name = $_GET['New_last_name'];
    $id = $_GET['id'];
 
    $query = "UPDATE user SET ";
    $query .= "first_name = '$New_first_name', ";
    $query .= "last_name = '$New_last_name' ";
    $query .= "WHERE id = $id ";

    if($conn->query($query) === TRUE){
        // @header("Location: ../index.php");
        @header("Location: all_users.php");
    }
    else{
        echo "fail";
    
    }
}

 ?>
