<?php
session_start();
include "dbconnection.php";
$nt=$_POST['ntfctn'];
$rcvr=$_POST['slctrcvr'];
$sq="insert into tbl_notification(notification,receiver,ndate)values('$nt','$rcvr',NOW())";
mysqli_query($con,$sq);
							
header('location:admin_add_notification.php?x=1');
					
  
?>