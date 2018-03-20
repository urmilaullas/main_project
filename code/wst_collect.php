<?php
session_start();
include "dbconnection.php";
$uid=$_SESSION['id'];
$sq="insert into tbl_collect_wst(user_id,date)values('$uid',NOW());";
$res=mysqli_query($con,$sq);
header('location:user_cleaning_rqst.php?x=1');
?>