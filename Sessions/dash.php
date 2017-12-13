<?php
include 'includes.php';
if(isset($_SESSION['name']))
 {
	
	$nm = $_SESSION['name'];
	echo "welcome"." :- "."$nm"."<br>";
 }
 else {
 header('location:index.php');
 }
 
?>
<a href = "logout.php">LOGOUT</a>