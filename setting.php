<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
	header('location:index.php');
	
}

?>
<html>
    <head>
        <link rel="stylesheet" href="includes/ind.css"  type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Setting</title>
        
            
     </head>
     <body>
         
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                 <h2>Change Password</h2>
                                 <form method = "POST" action = "setting-script.php">
                                      <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Old Password" name="password" >
											<div><?php if(isset ($_GET['password'])){echo $_GET['password']; }?></div>
                                      </div>
                                     <div class="form-group">
                                            <input type="password" class="form-control" placeholder="New Password" name="password1" >
                                      </div>
                                     <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="password2" >
											<div><?php if(isset ($_GET['password2'])){echo $_GET['password2']; }?></div>
                                      </div>
                                     <button type="submit" name="submit" class="btn btn-primary ">Change</button>
       
                                 </form>
                 </div>
              </div>    
        </div>
          <?php include 'includes/footer.php'?>
</body>
</html>