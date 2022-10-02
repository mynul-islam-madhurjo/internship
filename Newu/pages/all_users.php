 <?php include_once('../inc/header.php'); ?>
 <?php include_once('../config/dbconnect.php'); ?>
 <?php include('../message.php'); ?>
 <?php
// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: ../index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../index.php');
}
?>
<!--<meta http-equiv="refresh" content="5;url=../index.php" />-->
 <div class="conatainer-fluid" >
    <div class="container">
  
 <h2 class="text-center text-primary" style="padding-top: 30px;">Welcome to Admin Panel!</h2>
  <a href="add_new_user.php" class="btn btn-info mb-2 pull-right" >Add New User</a>
  <!-- <a href="pages/add_new_admin.php" class="btn btn-info mb-2 pull-right">Add New Admin</a> -->
  
  <!-- <a type="submit" value="Logout" class="btn btn-info mb-2 pull-right" name="but_logout">Log out</a> -->
  <!-- <input type="submit"  class="btn btn-info mb-2 pull-right" value="Logout" name="but_logout"> -->

         <form method='post' action="" style="float: right;" >
            <input type="submit"  class="btn btn-info mb-2 pull-right" value="Logout" name="but_logout" >
        </form>

  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th><?php $sno='1'; ?></th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
      
  <tbody>
    <?php 
$get_all_users = "SELECT * FROM user";
$res = mysqli_query($conn,$get_all_users);
if(mysqli_num_rows($res)>0){
  while($rs = mysqli_fetch_assoc($res)){
    //echo $rs['id']; 
    ?>
    <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $rs['first_name']; ?></td>
        <td><?php echo $rs['last_name'];?></td>
        <!-- <td><a href="pages/update_new_user.php?ID='. $rs['ID'] .'">Update</a></td>
        <td><a href="pages/delete_new_user.php?ID='. $rs['ID'] .'">Delete</a></td> -->

        <td><a href="updated_new_user.php?id=<?php echo $rs['ID']; ?>" class="btn btn-light">Update</a></td>


        <td><a href="delete_user_updated.php?id=<?php echo $rs['ID']; ?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delete</a></td>
      </tr>


    <?php

  }

}
else{
  ?>
  <tr>
    <td colspan="6" style="text-align: center;">No Data Found</td>
  </tr>
<?php
}


    ?>
      
     
    </tbody>
  </table>