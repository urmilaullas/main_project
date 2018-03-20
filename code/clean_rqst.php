<?php
session_start();
$uid=$_SESSION['id'];
include "dbconnection.php";
$sub=$_POST["subjcet"];
$rqst=$_POST["rqst"];
$sql="insert into tbl_cleaning(user_id,subject,rqst)values('$uid','$sub','$rqst')";
mysqli_query($con,$sql);
header('location:user_cleaning_rqst.php?x=1');
?>