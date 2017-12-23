<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
	header('location:login.php');
	
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
        <title>Cart</title>
        
            
     </head>
     <body>
	 <div class="container" style="margin-top: 90px"> 
         <table class="table table-bordered">
		        <th>Item Number </th>
                 <th>Item Name </th>
                 <th colspan=2>Price</th>
				 
	 <?php 
	 
	 include 'includes/header.php';
	 
	 $user_id = $_SESSION['user_id'];
	 $qry = "select * FROM users_items INNER JOIN items ON items.id = users_items.item_id WHERE user_id = '$user_id'";
	 $run = mysqli_query($con,$qry);
	 
	  
	  

	 
	        
			if(mysqli_num_rows($run) ==0)
			{
			echo '<a href="#" class="btn btn-block btn-success" disabled>Add items to cart first</a>';	
			}
			else 
			{
				$sum=0;
				
				while($row=mysqli_fetch_row($run))
				{
				 	
				$sum= $sum+$row[6];
				
	            $id=$row[2];
	
?>              
         
             <tr>
                 <th><?php echo $row[2];?></th>
                 <th><?php echo $row[5];?></th>
                 <th><?php echo $row[6];?></th>
				<td><a href='cart-remove.php?id=<?php echo $id; ?>'> Remove</a></td>
             </tr>
             
			 <?php
			 }
			
			}
			 ?> 
			  
             <tr>
                 <td>   </td>
                 <th>Total  </th>
                 <th>$ <?php if(isset($sum)){echo $sum;}?></th>
                 <td><a href="success.php?id=<?php echo $id; ?>"><button type="submit" name="submit" class="btn btn-primary btn-block">Confirm Order</button> </a>  </td>
             </tr>
         </table>
         </div>
     
     <?php include 'includes/footer.php'?>
</body>
</html>