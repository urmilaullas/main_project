<?php
session_start();
include "dbconnection.php";
if(!empty($_GET["x"]))
{
	
	echo "<script>alert('Your Profile Has Been Updated Successfully!!!');</script>";
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KRA Doctors
	</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../admin/assets/css/normalize.css">
    <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../admin/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../admin/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

	<style>
	.table td{
		border-top:0px;
	}
	.table input[type="label"]
	{
		padding:10px;
		font-size:14px;
		color:#000;
		background:none;
		width:80%;
		letter-spacing:1px;
		border:none;
		margin-bottom:1em;
		font-weight:1000;
	}
	.table input[type="text"],.table input[type="number"]
	{
		outline:none;
		padding:10px;
		font-size:14px;
		color:#000;
		background:none;
		width:80%;
		letter-spacing:1px;
		border:none;
		margin-bottom:1em;
		border-bottom:2px solid rgba(197,197,197,0.8);
	}
	</style>
	<script>
	function changeData()
		{
			document.getElementById("txtfname").disabled=false;
			document.getElementById("txtlname").disabled=false;
			document.getElementById("age").disabled=false;
			document.getElementById("txtbldgrp").disabled=false;
			document.getElementById("txtqlfctn").disabled=false;
			document.getElementById("txtsplctn").disabled=false;
			document.getElementById("txtphn").disabled=false;
			document.getElementById("save").style.display="block";
			document.getElementById("cancel").style.display="block";
		}
	</script>
</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">KRA Doctors</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="doctor_home..html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
					<h3 class="menu-title">Account</h3><!-- /.menu-title -->
					<li>
						<a href="doctor_profile.php"><i class="menu-icon fa fa-stethoscope"></i>Profile</a>
					</li>
                    <h3 class="menu-title">Medical Camp</h3><!-- /.menu-title -->
                    <li>
						<a href="doctor_view_rqst.php"><i class="menu-icon fa fa-stethoscope"></i>View Request</a>
					</li>
                    <li>
						<a href="doctor_active_camps.php"><i class="menu-icon fa fa-id-badge"></i>Active Camps</a>
					</li>
					<li>
						<a href="doctor_canceled_camp.php"><i class="menu-icon fa fa-id-badge"></i>Canceled By You</a>
					</li>
                    <li>
						<a href="doctor_patient_list.php"><i class="menu-icon fa fa-bars"></i>Patients List</a>
					</li>
					<li>
						<a href="admin_camp_canceled.php"><i class="menu-icon fa fa-bars"></i>Canceled List</a>
					</li>
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
            <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                     


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../admin/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Profile</strong>
                        </div>
                        <div class="card-body">
							<?php
					$uid=$_SESSION['id'];
					$sql = "select first_name,last_name, age, blood_grp, qualification, specialization, phone from tbl_doctors where dctr_id=$uid;";
					$r= mysqli_query($con, $sql);
					$result=mysqli_fetch_assoc($r);
					?>
					<form action="doctor_update_profile.php" method="post">
					
						<table class="table" style="width:80%;margin-left:12%;">
						<tr>
							<td><input type="label" value="First Name"></td>
							<td><input type="text" name="txtfname" id="txtfname" value="<?php echo $result['first_name']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="label" value="Last Name"></td>
							<td><input type="text" name="txtlname" id="txtlname" value="<?php echo $result['last_name']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="label" value="Age"></td>
							<td><input type="number" name="age" id="age" value="<?php echo $result['age']?>" required disabled/></td>
						</tr>
							<td><input type="label" value="Blood Group"></td>
							<td><input type="text" name="txtbldgrp" id="txtbldgrp" value="<?php echo $result['blood_grp']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="label" value="Qualification"></td>
							<td><input type="text" name="txtqlfctn" id="txtqlfctn" value="<?php echo $result['qualification']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="label" value="Specialization"></td>
							<td><input type="text" name="txtsplctn" id="txtsplctn" value="<?php echo $result['specialization']?>" required disabled/></td>
						</tr>
							<td><input type="label" value="Phone"></td>
							<td><input type="text" name="txtphn" id="txtphn" value="<?php echo $result['phone']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Save" id="save" style="display:none;width=80px;" class="btn btn-outline-success btn-lg btn-block"></td>
							<td><input type="reset" value="Cancel" id="cancel" style="display:none;" class="btn btn-outline-danger btn-lg btn-block"></td>
						</tr>
						<tr clospan=2>	
							<td><input type="button" value="Edit" onclick="changeData()" style="margin-left:40%;" class="btn btn-outline-primary btn-lg btn-block"></td>
						</tr>
						</table>
					</form>
	
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../admin/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../admin/assets/js/popper.min.js"></script>
    <script src="../admin/assets/js/plugins.js"></script>
    <script src="../admin/assets/js/main.js"></script>


    <script src="../admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../admin/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
