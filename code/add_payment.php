<?php
session_start();
include "dbconnection.php";
$ctg=$_POST['payctg'];
$yr=$_POST['payyear'];
$sq="insert into tbl_payment_ctg(ctg_name,pay_year)values('$ctg','$yr')";
mysqli_query($con,$sq);
							
header('location:admin_payment_new.php?x=1');
					

?>