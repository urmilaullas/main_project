<?php
session_start();
include "dbconnection.php"; 
$uid=$_SESSION['id'];
$tid=$_SESSION['tutorial_id'];
$sq="select amount from tbl_tutorial where tutrl_id=$tid;";
$res=mysqli_query($con,$sq);
$amt=mysqli_fetch_row($res);
$amt=$amt[0];
$adamt=$amt*0.2;
$uamt=$amt-$adamt;
$date=date("Y/m/d");
$sql1="insert into tbl_admin_payment(user_id,tutrl_id,type,amount,pay_date)values($uid,$tid,'tutorial',$adamt,NOW());";
mysqli_query($con,$sql1);
$sql2="insert into tbl_user_tutrl_pay(user_id,tutrl_id,pay_date,amount)values($uid,$tid,NOW(),$uamt);";
mysqli_query($con,$sql2);
header('location:video_display.php?id='.$tid);
?>