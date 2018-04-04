<?php
include "dbconnection.php";
	$mc_id=$_GET['id'];
	$sql="update tbl_medical_camp set dctr_status=2 where mc_id=$mc_id;";
	mysqli_query($con,$sql);
	
	header("location:doctor_active_camps.php?x=1");
?>