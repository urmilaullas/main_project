<?php
include "dbconnection.php";
	$cid=$_GET['id'];
	$sql="update tbl_creative set status=2 where crtv_id=$cid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_creative_pending.php?x=2"); 
	
	
	?>