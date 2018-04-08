<?php
session_start();
include "dbconnection.php";
$user=$_POST["txtUserName"];
$pass=$_POST["txtPassword"];
if($_POST["usertype"]=="admin")
{
	$sq="select user_id,email,password,user_type from tbl_user where email='$user' and password='$pass';";
	$res=mysqli_query($con,$sq);
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
		if($row["user_type"]==0)
		{
			$uid=$row["user_id"];
			$_SESSION['id'] = $uid;
			$_SESSION['username'] = $_POST['txtUserName'];
			header('location:../admin/admin_home.html');
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
}
elseif($_POST["usertype"]=="user")
{	
	$sq="select user_id,email,password,user_type,status from tbl_user where email='$user' and password='$pass';";
	$res=mysqli_query($con,$sq);
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
		
		if($row["user_type"]==1)
		{
			if($row['status']==1)
			{
				$uid=$row["user_id"];
				$_SESSION['id'] = $uid;
				$_SESSION['username'] = $_POST['txtusername'];
				header('location:user_home.html');
			}
			elseif($row['status']==0)
			{
			 echo "<script>var confirm = confirm(\"Try After Some time.Your Account Is Not Activated!!!\");
			  if(confirm){ 
				  window.location='login.html';
			   }
			   else{
				   window.location='login.html';
			   }
			  </script>";
			}
			else
			{	
				 echo "<script>var confirm = confirm(\"Your Registration Has Been Rejected!\");
				  if(confirm){ 
					  window.location='login.html';
				   }
				   else{
					   window.location='login.html';
				   }
				  </script>";
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
}
else
{
	$sq="select dctr_id,email,password,status from tbl_doctors where email='$user' and password='$pass';";
	$res=mysqli_query($con,$sq);
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
		if($row['status']==1)
		{
			$uid=$row["dctr_id"];
			$_SESSION['id'] = $uid;
			header('location:../doctor/doctor_home.html');
		}
		elseif($row['status']==0)
		{
			 echo "<script>var confirm = confirm(\"Try After Some time.Your Account Is Not Activated!!!\");
			  if(confirm){ 
				  window.location='login.html';
			   }
			   else{
				   window.location='login.html';
			   }
			  </script>";
		}
		else
		{	
			 echo "<script>var confirm = confirm(\"Your Registration Has Been Rejected!\");
			  if(confirm){ 
				  window.location='login.html';
			   }
			   else{
				   window.location='login.html';
			   }
			  </script>";
		}
	}
	else
	{	
		 echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.location='login.html';
           }
		   else{
			   window.location='login.html';
		   }
          </script>";
	}
}
?>
