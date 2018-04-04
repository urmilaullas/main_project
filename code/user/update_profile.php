<?php
session_start();
$uid=$_SESSION['id'];
include "dbconnection.php";
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$age=$_POST["age"];
$bldgrp=$_POST["txtbldgrp"];
$hname=$_POST["txthname"];
$hno=$_POST["txthno"];
$phn=$_POST["txtphn"];
$sql="update tbl_user set first_name='$fname',last_name='$lname',age='$age',blood_grp='$bldgrp',house_name='$hname',house_no='$hno',phone='$phn' where user_id='$uid'; ";
mysqli_query($con,$sql);
header('location:user_profile.php?x=1');
?>