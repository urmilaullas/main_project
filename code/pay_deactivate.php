<?php
session_start();
include "dbconnection.php";
	$pid=$_GET['id'];
	$sql="update tbl_payment_ctg set status=0 where pay_ctg_id=$pid;";
	mysqli_query($con,$sql);
	
	header("location:admin_payment_list.php?x=2");
?>