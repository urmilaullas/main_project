<?php
session_start();
include "dbconnection.php";
$date=$_POST['mcdate'];
$time=$_POST['mctime'];
$lctn=$_POST['location'];
$sq="select * from tbl_medical_camp where date='$date';";
$res=mysqli_query($con,$sq);
				if(mysqli_num_rows($res)>0)
					{
						echo "<script>var confirm = confirm(\"Cannot Conduct Medical Camp On This Date!!!\");
						if(confirm){ 
						window.history.back();
						}
							else{
						window.history.back();
						}
						</script>";
						
					}
					  else{				
							
							$sq="select max(camp_id) from tbl_medical_camp";
							$res=mysqli_query($con,$sq);
							$id=mysqli_fetch_array($res);
							$cid=$id[0]+1;
							$dct="select dctr_id from tbl_doctors";
							$dt=mysqli_query($con,$dct);
						
								while($rs=mysqli_fetch_assoc($dt))
								{
									$did=$rs['dctr_id'];
									//echo $did;
									$sql="insert into tbl_medical_camp(camp_id,date,time,location,dctr_id)values('$cid','$date','$time','$lctn','$did')";
									//echo $sql;
									mysqli_query($con,$sql);
								}
							
							header('location:admin_mcamp_rqst.php?x=1');
					}
  
?>