<?php
include "dbconnection.php";
	$uid=$_GET['id'];
	$sql="update tbl_user set status=2 where user_id=$uid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_user_pending.php?x=2"); 
	
	
	?>