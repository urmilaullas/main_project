<?php
include "dbconnection.php";
	$cid=$_GET['id'];
	$sql="update tbl_complaints set status=2 where cmp_id=$cid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_accepted_complaints.php?x=2"); 
	
	
	?>