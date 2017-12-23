<?php
require 'includes/common.php';
if(isset($_session['$user_id'])){
	
	header('location:products.php');
}
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
        <title>Sign Up</title>
		<?php include 'includes/header.php'?>
    </head>
    <body>
       
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form method="POST" action="signup_script.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" >
								<div><?php if(isset ($_GET['email_error'])){echo $_GET['email_error'];} ?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pswrd" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
								<div><?php if(isset ($_GET['password_error'])){echo $_GET['password_error']; }?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" >
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" >
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" >
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php include 'includes/footer.php'?>
    </body>
</html>