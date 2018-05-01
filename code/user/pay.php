<?php
session_start();
include "dbconnection.php"; 
$pid=$_SESSION['pay_id'];
$amount=$_SESSION['amt'];
$uid=$_SESSION['id'];
$sql1="insert into tbl_admin_payment(user_id,pay_ctg_id,pay_date,amount)values($uid,$pid,NOW(),$amount);";
mysqli_query($con,$sql1);
header('location:user_payment.php?x=2');
?>