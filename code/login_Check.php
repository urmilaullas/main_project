<?php
session_start();
include "dbconnection.php";
$user=$_POST["txtUserName"];
$pass=$_POST["txtPassword"];
$sq="select user_id,email,password,user_type from tbl_user where email='$user' and password='$pass';";
$res=mysqli_query($con,$sq);
if(mysqli_num_rows($res)>0)
{
	$row=mysqli_fetch_assoc($res);
	$uid=$row["user_id"];
	$_SESSION['id'] = $uid;
	if($row["user_type"]==0){
		$_SESSION['username'] = $_POST['txtUserName'];
		header('location:admin_home.html');
	}
	else{
		$_SESSION['username'] = $_POST['txtusername'];
		header('location:user_home.html');
		}
	}
else{	
		 echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.location='login.html';
           }
		   else{
			   window.location='login.html';
		   }
          </script>";
}
?>
