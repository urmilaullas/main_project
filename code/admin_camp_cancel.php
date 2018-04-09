<?php
include "dbconnection.php";
	$camp_id=$_GET['id'];
	$sql="update tbl_medical_camp set status=0 where camp_id=$camp_id;";
	mysqli_query($con,$sql);
	
	
	$date=$_GET['dt'];
	$msg="Medical Camp Has Been Canceled on $date";
	
	
	$sq="insert into tbl_notification(notification,type,receiver,ndate)values('$msg','camp','all',NOW())";
	mysqli_query($con,$sq);
	
	header("location:admin_active_camp.php?x=1");
?>