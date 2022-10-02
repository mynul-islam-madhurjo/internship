<?php include('../config/dbconnect.php'); 
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    //  echo $id;
    // $delete = "DELETE FROM user SET WHERE id = $id ";
    $delete = "DELETE FROM user WHERE id = $id ";
    $res = mysqli_query($conn,$delete);
    if($res){
        @header("Location: ../index.php");
    
    }
    else{
        echo "fail";
    
    }
}

 ?>