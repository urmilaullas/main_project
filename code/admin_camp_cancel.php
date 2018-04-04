<?php
include "dbconnection.php";
	$camp_id=$_GET['id'];
	$sql="update tbl_medical_camp set status=0 where camp_id=$camp_id;";
	mysqli_query($con,$sql);
	
	header("location:admin_active_camp.php?x=1");
?>