<?php
session_start();
include "dbconnection.php"; 
$pid=$_POST['slctcategory'];
$amount=$_POST['amount'];
$_SESSION['amt']=$amount;
$_SESSION['pay_id']=$pid;
$uid=$_SESSION['id'];
$sq="select * from tbl_admin_payment where user_id=$uid and pay_ctg_id=$pid";
$res=mysqli_query($con,$sq);
if(mysqli_num_rows($res)>0)
header('location:user_payment.php?x=1');
else
header('location:user_pay.php');
?>