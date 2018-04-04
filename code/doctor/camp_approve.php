<?php
include "dbconnection.php";
	$mc_id=$_GET['id'];
	$sql="update tbl_medical_camp set dctr_status=1 where mc_id=$mc_id;";
	mysqli_query($con,$sql);
	
	header("location:doctor_view_rqst.php?x=1");
?>