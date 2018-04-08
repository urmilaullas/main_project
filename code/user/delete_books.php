<?php
include "dbconnection.php";
	$bid=$_GET['id'];
	$sql="delete from tbl_books where book_id=$bid;";
	
	mysqli_query($con,$sql);
	
	header("location:user_my_books.php?x=1"); 
	
	
	?>