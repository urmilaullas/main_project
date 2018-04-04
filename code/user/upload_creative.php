<?php
session_start();
include "dbconnection.php";
$uid = $_SESSION['id'];
$name=$_POST["txtcname"];
$des=$_POST["description"];
$type=$_POST["slcttype"];
$catg=$_POST["slctcategory"];
$cover=$_POST["cover"];
$file="";
		$file=$_FILES['crtvfile']['name'];
		echo $file;
		$fileSize = $_FILES["myfile"]["size"];
		if( $_FILES['crtvfile']['name'] != "")
		{
			$target_path = "../creative_corner/";
			$target_path = $target_path.basename( $_FILES['crtvfile']['name']); 
			if(move_uploaded_file($_FILES['crtvfile']['tmp_name'], $target_path)) 
			{
				//echo "The file ".basename( $_FILES['crtvfile']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}


		
$filecvr="";
		$filecvr=$_FILES['cover']['name'];
		echo $file;
		$fileSize = $_FILES["myfile"]["size"];
		if( $_FILES['cover']['name'] != "")
		{
			$target_path = "../creative_corner/";
			$target_path = $target_path.basename( $_FILES['cover']['name']); 
			if(move_uploaded_file($_FILES['cover']['tmp_name'], $target_path)) 
			{
				//echo "The file ".basename( $_FILES['cover']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}

if($filecvr=="")
{
$sql="insert into tbl_creative(user_id,crtv_name,ctg_id,type,description,file)values('$uid','$name','$catg','$type','$des','$file')";
}
else{
$sql="insert into tbl_creative(user_id,crtv_name,ctg_id,type,description,file,cover)values('$uid','$name','$catg','$type','$des','$file','$filecvr')";
}
mysqli_query($con,$sql);
 echo "<script>var confirm = confirm(\"Your File Has Been Uploaded Successfully!\");
          if(confirm){ 
              window.location='user_creative_add.php';
           }
		   else{
			   window.location='user_creative_add.php';
		   }
          </script>";


?>