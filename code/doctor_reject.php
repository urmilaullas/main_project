<?php
include "dbconnection.php";
	$did=$_GET['id'];
	$sql="update tbl_doctors set status=2 where dctr_id=$did;";
	
	mysqli_query($con,$sql);
	
	header("location:admin_doctor_pending.php?x=2"); 
	
	
	?>