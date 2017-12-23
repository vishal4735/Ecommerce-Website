
<?php
require 'includes/common.php';
$email = $_POST['email'];
$pswrd = $_POST['password'];

$qry = " SELECT * FROM users WHERE email = '$email' AND pswrd= '$pswrd' ";
$run = mysqli_query($con,$qry);
$row = mysqli_num_rows($run);


	if($row==0)
		{	
		header('location:login.php?rcd=NO RECORDS FOUND');
		
		}
    else
	   { 
        $rslt = mysqli_fetch_assoc($run);
		$_SESSION['user_id']    = $rslt['id'];
        $_SESSION['email'] = $rslt['email'];
		header('location:products.php');
		}


?>
