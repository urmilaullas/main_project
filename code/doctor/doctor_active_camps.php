<?php
session_start();
include "dbconnection.php";

?><!doctype html>
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
                            <li><a href="#">Medical Camp</a></li>
                            <li class="active">View Request</li>
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
                            <strong class="card-title">Active Camp List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Time</th>
								  <th scope="col">Location</th>
                                  <th scope="col">Cancel</th>
                              </tr>
                          </thead>
                          <tbody>
                            
						  
						    <?php
							$did=$_SESSION['id'];
							$n=0;
					 		$sql="Select mc_id,camp_id,date,time,location from tbl_medical_camp where status=1 and dctr_status=1 and dctr_id= $did and date>NOW()";
							$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
								$n=$n+1;
                        		echo
									"<tr>
									<th scope='row'>$n</th>
									<td>".$r['date']."</td>
									<td>".$r['time']."</td>
									<td>".$r['location']."</td>
                                	<td><a href=camp_cancel.php?id=".$r['mc_id'].">
											  <img src=../images/reject.png alt=Reject width='20px' height='20px' border=0>
											</a></td>
									</tr>";
									
								
							}
						?>
						  
						  
                      </tbody>
                  </table>
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
