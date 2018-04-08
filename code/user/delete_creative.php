<?php
include "dbconnection.php";
	$cid=$_GET['id'];
	$sql="delete from tbl_creative where crtv_id=$cid;";
	
	mysqli_query($con,$sql);
	
	header("location:user_my_creative.php?x=1"); 
	
	
	?>