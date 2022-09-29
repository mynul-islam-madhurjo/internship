<?php

include_once('config/dbconnect.php');


if(isset($_POST['fname']) && isset($_POST['pass'])){
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM admins WHERE adminname= '$u'";
	$result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){

			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $u;

            if (password_verify($p, $row['password'])){ 
            $_SESSION['message'] = 1;
			header("Location: pages/all_users.php");

            } 
            else{
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 100%;">

                <strong>Failure!</strong> Your Password is wrong !
                <button type="button" class="close"
                    data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div> ';
            include('index.php');
            }
        }

}
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>
	
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>
	
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous">
</script>