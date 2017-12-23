<?php
require 'includes/common.php';
$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];
$qry = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$run = mysqli_query($con,$qry);

header('location:products.php');

?>