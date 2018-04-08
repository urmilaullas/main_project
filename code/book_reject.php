<?php
include "dbconnection.php";
	$bid=$_GET['id'];
	$sql="update tbl_books set status=2 where book_id=$bid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_library_pending.php?x=2"); 
	
	
	?>