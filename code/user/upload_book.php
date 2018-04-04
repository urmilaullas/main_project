<?php
session_start();
include "dbconnection.php";
$uid = $_SESSION['id'];
$name=$_POST["txtbname"];
$des=$_POST["description"];
$catg=$_POST["slctcategory"];
$lang=$_POST["txtlang"];
$auther=$_POST["txtauther"];

$file="";
		$file=$_FILES['bookfile']['name'];
		echo $file;
		$fileSize = $_FILES["myfile"]["size"];
		if( $_FILES['bookfile']['name'] != "")
		{
			$target_path = "../library/";
			$target_path = $target_path.basename( $_FILES['bookfile']['name']); 
			if(move_uploaded_file($_FILES['bookfile']['tmp_name'], $target_path)) 
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

		
$fileimg="";
		$fileimg=$_FILES['bookimg']['name'];
		echo $file;
		$fileSize = $_FILES["myfile"]["size"];
		if( $_FILES['bookimg']['name'] != "")
		{
			$target_path = "../library/";
			$target_path = $target_path.basename( $_FILES['bookimg']['name']); 
			if(move_uploaded_file($_FILES['bookimg']['tmp_name'], $target_path)) 
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
		
if($fileimg!="")
{
$sql="insert into tbl_books(user_id,book_name,ctg_id,language,auther,description,book,image)values('$uid','$name','$catg','$lang','$auther','$des','$file','$fileimg')";
}
else
{
$sql="insert into tbl_books(user_id,book_name,ctg_id,language,auther,description,book)values('$uid','$name','$catg','$lang','$auther','$des','$file')";
}
mysqli_query($con,$sql);
 echo "<script>var confirm = confirm(\"Your File Has Been Uploaded Successfully!\");
          if(confirm){ 
              window.location='user_library_add.php';
           }
		   else{
			   window.location='user_library_add.php';
		   }
          </script>";


?>