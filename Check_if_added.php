<?php
function check_if_aded_to_cart($item_id)
        {
		
		$user_id = $_SESSION['user_id'];
		$con = mysqli_connect('localhost','root','','lifestyle');
	    $qry = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
        $rslt = mysqli_query($con,$qry);
    	$row = mysqli_affected_rows($con);
		 if($row >=1)
		 {
			return 1; 
		 }
		 else
		 {
		 return 0;	 
		 }
		
        }

?>