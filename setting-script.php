<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
	header('location:index.php');
	
}
$eid= $_SESSION['email'];
$old_pswrd = $_POST['password']; 
$new_pswrd1 = $_POST['password1'];
$new_pswrd2 = $_POST['password2'];

		if(strlen($new_pswrd1) == strlen($new_pswrd2)){
		 
		     $qry = "SELECT pswrd FROM `users` WHERE email ='$eid'";
			 $run = mysqli_query($con,$qry);
			 $PW = mysqli_fetch_row($run);
			  
			  if($PW[0] == $old_pswrd){
				  
				  $qry1 = "UPDATE users SET pswrd = '$new_pswrd1' WHERE email = '$eid'";
				  $runn = mysqli_query($con,$qry1);
				  header('location:setting.php?password=CHANGED SUCCESSFULLY');
			  }
			  else{
				header('location:setting.php?password=NO PASSWORD FOUND');  
				  
			  }
			 
		    }
        else
		{
			 
            header('location:setting.php?password2=NEW PASSWORD MUST MATCH OLD PASSWORD');			 
		}
?>