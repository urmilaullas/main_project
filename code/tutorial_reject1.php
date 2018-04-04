<?php
include "dbconnection.php";
	$tid=$_GET['id'];
	$sql="update tbl_tutorial set status=2 where tutrl_id=$tid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_tutorial_approved.php?x=2"); 
	
	
	?>