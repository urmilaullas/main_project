<?php
include "dbconnection.php";
$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$age=$_POST["age"];
$gender=$_POST["rdgender"];
$blood=$_POST["txtblood_grp"];
$hname=$_POST["txthname"];
$hno=$_POST["txthno"];
$phn=$_POST["txtphn"];
$email=$_POST["email"];
$password=$_POST["password"];
$cnfrmpsw=$_POST["cnfrmpsw"];
$qlfctn=$_POST["qlfctn"];
$splztn=$_POST["splztn"];

if($password!=$cnfrmpsw)
				{
					echo "<script>var confirm = confirm(\"passwords not matching!\");
					if(confirm){ 
					document.getElementsByName('password').value='';
					document.getElementsByName('cnfrmpsw').value='';
					window.history.back();
					
					}
					else{
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					</script>";
					
					
				}
if($_POST['usertype']=="user")
{				
	$cmail="SELECT email FROM tbl_user WHERE email = '$email';";
					$res=mysqli_query($con,$cmail);
					if(mysqli_num_rows($res)>0)
					{
						echo "<script>var confirm = confirm(\"email already exists!\");
						if(confirm){ 
						window.history.back();
						}
							else{
						window.history.back();
						}
						</script>";
						
					}
					else{				
							$sql="insert into tbl_user(first_name,last_name,age,gender,blood_grp,house_name,house_no,phone,email,password) values('$fname','$lname','$age','$gender','$blood','$hname','$hno','$phn','$email','$password')";
							mysqli_query($con,$sql);
							header('location:login.html');
					}
}
elseif($_POST['usertype']=="doctor")
{		
	$cmail="SELECT email FROM tbl_doctors WHERE email = '$email';";
					$res=mysqli_query($con,$cmail);
					if(mysqli_num_rows($res)>0)
					{
						echo "<script>var confirm = confirm(\"email already exists!\");
						if(confirm){ 
						window.history.back();
						}
							else{
						window.history.back();
						}
						</script>";
						
					}
					else{				
							$sql="insert into tbl_doctors(first_name,last_name,age,gender,blood_grp,qualification,specialization,phone,email,password) values('$fname','$lname','$age','$gender','$blood','$qlfctn','$splztn','$phn','$email','$password')";
							
							mysqli_query($con,$sql);
							header('location:login.html');
					}
}
?>