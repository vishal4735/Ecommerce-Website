<?php 
require "includes/common.php"; 
include "includes/header.php";
if(!isset($_SESSION['email'])){
	header('location:index.php');
}	
     $user_id = $_SESSION['user_id'];
	 $item_id = $_GET['id'];
	$qry = "UPDATE users_items set status = 'Confirmed' WHERE user_id = '$user_id' ";
     $run = mysqli_query($con,$qry);
	 
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="includes/ind.css"  type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
        
            
     </head>
	 <div class="container" style="margin-top:100px">
             <div class="jumbotron" >
                 <div >
                 <h4 style="text-align: center">Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here </a>to purchase any other item.</h4>
                 </div>
             </div>
         </div>
<body>
<?php include 'includes/footer.php'?>
    
    
    </body>
    </html>