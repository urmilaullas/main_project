<?php
session_start();
include "dbconnection.php";
$uid=$_SESSION['id'];
$camp_id=$_SESSION['camp_id'];
$sql="select * from tbl_mc_patients where camp_id=$camp_id and user_id=$uid";
$res=mysqli_query($con,$sql);
/* $dateslct=$_SESSION['dt'];
echo $dateslct;	
$date2=new DateTime($dateslct);
$date1=new DateTime("now");
echo $date1;
$diff=date_diff($date2,$date1);
  $dteDiff  = $date2->diff($date1); 
   print $dteDiff->format("%R%a days"); 

echo $diff->format("%R%a days"); */
 if(mysqli_num_rows($res)>0)
{
	header('location:user_medical_camp.php?x=2');
}	
else
{
$sql="insert into tbl_mc_patients(camp_id,user_id)values($camp_id,$uid)";
mysqli_query($con,$sql);
header('location:user_medical_camp.php?x=1');
} 
?>