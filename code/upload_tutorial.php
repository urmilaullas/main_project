<?php
session_start();
include "dbconnection.php";
$uid = $_SESSION['id'];
$vname=$_POST["txttname"];
$price=$_POST["price"];
$des=$_POST["description"];
$type=$_POST["rdtype"];
$catg=$_POST["slctcategory"];

$file="";
		$file=$_FILES['turlvdo']['name'];
		echo $file;
		$fileSize = $_FILES["myfile"]["size"];
		if( $_FILES['turlvdo']['name'] != "" )
		{
			$target_path = "tutorial_video/";
			$target_path = $target_path.basename( $_FILES['turlvdo']['name']); 
			if(move_uploaded_file($_FILES['turlvdo']['tmp_name'], $target_path)) 
			{
				//echo "The file ".basename( $_FILES['turlvdo']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}


$sql="insert into tbl_tutorial(user_id,tutrl_name,ctg_id,amount,type,description,video)values('$uid','$vname','$catg','$price','$type','$des','$file')";
mysqli_query($con,$sql);
 echo "<script>var confirm = confirm(\"Your Tutorial Has Been Uploaded Successfully!\");
          if(confirm){ 
              window.location='user_trainings_add.php';
           }
		   else{
			   window.location='user_trainings_add.php';
		   }
          </script>";


?>