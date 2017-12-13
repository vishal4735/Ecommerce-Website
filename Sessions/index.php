
<html>
	<head>
	  <body><?php include 'includes.php';
	  session_destroy();
	  ?>
		<div class="container">
     		<div class="row">
	            <div class="col-xs-4 col-xs-offset-4">		
						<div class="panel panel-primary">	
							<div class="panel-heading">	
								<h3>Please provide details</h3></div>	
                                    <div class="panel-body">								
													<form action="login.php" method="POST" >
														<div class="form-group">
															 <input type="text" placeholder="Enter name" name="name" class="form-control" /><br>
															 <input type="password" placeholder="Password" name="pswrd" class="form-control"/><br>
															 <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
														</div>
                  									</form>
									</div>				
								
									 
						</div>			 
				
				</div>				 
			</div>					 
		</div>	
	  </body>
	</head>
</html>