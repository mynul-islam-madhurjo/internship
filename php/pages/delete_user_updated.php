<?php include('../config/dbconnect.php');
// $id = $_GET['id'];
// echo $id; 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //  echo $id;
    // $delete = "DELETE FROM user SET WHERE id = $id ";
    $delete = "DELETE FROM user WHERE ID = $id ";
    $res = mysqli_query($conn,$delete);
    if($res){
        // @header("Location: ../index.php");
        @header("Location: all_users.php");
    }
    else{
        echo "fail";
    
    }
}
 ?>