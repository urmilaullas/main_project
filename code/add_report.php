<?php
session_start();
include "dbconnection.php";
$name=$_POST["txtbname"];
$des=$_POST["description"];

$file="";
		$file=$_FILES['bookfile']['name'];
		echo $file;
		$fileSize = $_FILES["myfile"]["size"];
		if( $_FILES['bookfile']['name'] != "")
		{
			$target_path = "../reports/";
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

		
$sql="insert into tbl_report(rpt_name,description,file)values('$name','$des','$file')";
mysqli_query($con,$sql);
 echo "<script>var confirm = confirm(\"Your File Has Been Uploaded Successfully!\");
          if(confirm){ 
              window.location='admin_add_report.php';
           }
		   else{
			   window.location='admin_add_report.php';
		   }
          </script>";


?>