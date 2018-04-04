<?php
include "dbconnection.php";
	$cid=$_GET['id'];
	$sql="update tbl_collect_wst set status=1 where cid=$cid;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_wst_collection_rqst.php?x=1"); 
	
	
	?>