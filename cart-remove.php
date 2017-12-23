<?php
require 'includes/common.php';
$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];

 $qry = "DELETE FROM `users_items` WHERE user_id ='$user_id' AND item_id='$item_id'"; 
 $run = mysqli_query($con,$qry);
  header('location:cart.php');
?>