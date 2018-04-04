<?php
include "dbconnection.php";
	$cl_id=$_GET['id'];
	$sql="update tbl_cleaning set status=1 where cl_id=$cl_id;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_cleaning_rqst.php?x=1"); 
	
	
	?>