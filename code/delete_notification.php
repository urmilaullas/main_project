<?php
session_start();
include "dbconnection.php";
	$nid=$_GET['id'];
	$sql="delete from tbl_notification where nid=$nid;";
	mysqli_query($con,$sql);
	
	header("location:admin_view_notification.php?x=1");
?>