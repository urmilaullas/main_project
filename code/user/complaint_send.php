<?php
session_start();
$uid=$_SESSION['id'];
include "dbconnection.php";
$sub=$_POST["subjcet"];
$rqst=$_POST["rqst"];
$sql="insert into tbl_complaints(user_id,subject,complaint)values('$uid','$sub','$rqst')";
mysqli_query($con,$sql);
header('location:user_complaints.php?x=1');
?>