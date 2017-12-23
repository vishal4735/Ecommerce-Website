<?php
require 'includes/common.php';
$name  = $_POST['name'];
$email = $_POST['email'];
$pswrd = $_POST['pswrd'];
$cnt   = $_POST['contact'];
$city  = $_POST['city'];
$add   = $_POST['address'];
 
 /*$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=enter correct email');
 }*/
 if (strlen($pswrd) < 6) {
  header('location: signup.php?password_error=enter correct password');
}

$qry = " SELECT * FROM users WHERE email = '$email' AND pswrd= '$pswrd' ";
$run = mysqli_query($con,$qry);
$row = mysqli_num_rows($run);

        if($row>0)
		{	
	    header('location: login.php?email_error= Email already exists please login');
		}
		else
		{
		$qry = " INSERT INTO `users` (`name`, `email`, `pswrd`, `cont`, `city`, `address`, `id`) VALUES ('$name', '$email', '$pswrd', '$cnt', '$city', '$add', NULL) ";
        $run = mysqli_query($con,$qry);
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id']= $user_id;
		header('location:products.php');
		}

?>