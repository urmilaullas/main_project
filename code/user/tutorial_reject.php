<?php
include "dbconnection.php";
	$tid=$_GET['id'];
	$sql="delete from tbl_tutorial where tutrl_id=$tid;";
	
	mysqli_query($con,$sql);
	
	header("location:user_my_trainings.php?x=1"); 
	
	
	?>