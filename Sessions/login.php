<?php
include 'includes.php';
$un =$_POST['name'];
$pw =$_POST['pswrd'];
 
 $con = mysqli_connect('localhost','root','','mine');
 
 $qry  = "SELECT * From data WHERE  name = '$un' AND pasword = '$pw'";
 $rslt = mysqli_query($con,$qry);
 $row =  mysqli_num_rows($rslt);
 
  
 if($row>0)
		{
		 header('location:dash.php');
			echo"welcome";
		$_SESSION['name']=$un;

		}
		
	else
		{
		
		header('location:index.php');
		
		}
    
?>