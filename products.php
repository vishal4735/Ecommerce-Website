<?php require 'includes/common.php';
     include 'includes/header.php';
	 include 'includes/Check_if_added.php';
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
<body>
    
        
      <div class="container" style="margin-top: 90px">
        <div class="jumbotron" >
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
        </div>
      </div>
    
    <div class="container">
        <div class="row"  style="margin-top:10px">
            <div class="col-md-3 col-sm-6">
                
               <div class="thumbnail"  > 
                    <img src="c1.jpg" alt=""/>
                         <div class="caption">
                             <h3 >Kodak</h3>
                             <p>These are the best cameras available</p>
							 

			<?php 	if (!isset($_SESSION['email'])) 
			{ ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(1)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?> 
					
                          </div>
               </div>
                
            </div>
            
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="c2.jpg" alt=""/>
                         <div class="caption">
                             <h3>Canon</h3>
                             <p>These are the best cameras available</p>
            <?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(2)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?> 
                        </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="c3.jpg" alt=""/>
                         <div class="caption">
                             <h3>Sony</h3>
                             <p>These are the best cameras available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(3)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>				 
							
                        </div>
               </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="c4.jpg" alt=""/>
                         <div class="caption">
                             <h3>Nikon</h3>
                             <p>These are the best cameras available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(4)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>
                         </div>
               </div>
            </div>
            
            
            
        </div>
        <div class="row"  style="margin-top:10px;">
            <div class="col-md-3 col-sm-6">
                
               <div class="thumbnail"  > 
                    <img src="w1.jpg" alt=""/>
                         <div class="caption">
                             <h3>Rado</h3>
                             <p>These are the best watches available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(5)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>				 
                          </div>
               </div>
                
            </div>
            
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="w2.jpg" alt=""/>
                         <div class="caption">
                             <h3>Rolex</h3>
                             <p>These are the best watches available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(6)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?> 
                        </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="w3.jpg" alt=""/>
                         <div class="caption">
                             <h3>Patek Philippe</h3>
                             <p>These are the best watches available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(7)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>
                        </div>
               </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="w4.jpg" alt=""/>
                         <div class="caption">
                             <h3>Seiko</h3>
                             <p>These are the best watches available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(8)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>
                         </div>
               </div>
            </div>
            
            
            
        </div>
        <div class="row "  style="margin-top:10px; ">
            <div class="col-md-3 col-sm-6">
                
               <div class="thumbnail"  > 
                    <img src="m1.jpeg" alt=""/>
                         <div class="caption">
                             <h3>Hugo Boss</h3>
                             <p>These are the best shirts available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(9)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>
                          </div>
               </div>
                
            </div>
            
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="m2.jpeg" alt=""/>
                         <div class="caption">
                             <h3>Ralph Lauren</h3>
                             <p>These are the best shirts available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(10)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>
                        </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="m3.jpg" alt=""/>
                         <div class="caption">
                             <h3>Michael Kors</h3>
                             <p>These are the best shirts available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(11)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>
                        </div>
               </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail"> 
                    <img src="m4.jpg" alt=""/>
                         <div class="caption">
                             <h3>Burberry</h3>
                             <p>These are the best shirts available</p>
			<?php 	if (!isset($_SESSION['email'])) { ?>
					<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			<?php
					}
					else 
					{
                    //We have created a function to check whether this particular product is added to cart or not.
					if (check_if_aded_to_cart(12)) { //This is same as if(check_if_aded_to_cart !=0)
						echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					}
					else 
					{
					?>
						<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
			<?php
					}
					}
            ?>				 
                         </div>
               </div>
            </div>
            
            
            
        </div>
        </div>
      <?php include 'includes/footer.php'?>
    
    
    </body>
    </html>