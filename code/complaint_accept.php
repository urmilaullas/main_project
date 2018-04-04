<?php
include "dbconnection.php";
	$cid=$_GET['id'];
	$sql="update tbl_complaints set status=1 where cmp_id=$cid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_pending_complaints.php?x=1"); 
	
	
	?>