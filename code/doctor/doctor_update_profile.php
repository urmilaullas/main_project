<?php
session_start();
$uid=$_SESSION['id'];
include "dbconnection.php";
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$age=$_POST["age"];
$bldgrp=$_POST["txtbldgrp"];
$qlfctn=$_POST["txtqlfctn"];
$splctn=$_POST["txtsplctn"];
$phn=$_POST["txtphn"];
$sql="update tbl_doctors set first_name='$fname',last_name='$lname',age='$age',blood_grp='$bldgrp',qualification='$qlfctn',specialization='$splctn',phone='$phn' where dctr_id='$uid'; ";
mysqli_query($con,$sql);
header('location:doctor_profile.php?x=1');
?>