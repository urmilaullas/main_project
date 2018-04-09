<?php
session_start();
include "dbconnection.php";
 if(!empty($_GET["x"]))
{
	if($_GET["x"]==1)
	echo "<script>alert('Tutorial Has Been Approved!!!');</script>";
	else
	echo "<script>alert('Tutorial Has Been Rejected!!!');</script>";
		
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
    <title>KRA Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

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
                <a class="navbar-brand" href="">KRA Admin</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="admin_home.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Services</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-h-square"></i>Medical Camp</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-stethoscope"></i><a href="admin_mcamp_rqst.php">Send Request</a></li>
							<li><i class="fa fa-bars"></i><a href="admin_active_camp.php">Active Camp List</a></li>
                            <li><i class="fa fa-bars"></i><a href="admin_patient_list.php">Patients List</a></li>
                            <li><i class="fa fa-bars"></i><a href="admin_doctor_list.php">Doctors List</a></li>
							<li><i class="fa fa-bars"></i><a href="admin_camp_list.php">View Camp List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Cleaning</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_cleaning_rqst.php">Cleaning Requests</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_cleaning_complited.php">Cleaning Completed</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="admin_wst_collection_rqst.php">Waste Collection Requests</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="admin_wst_collection_complited.php">Waste Collection Completed</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Trainings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_tutorial_pending.php">Tutorial Approvals Pending</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_tutorial_approved.php">Approved Tutorials</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="admin_tutorial_payment.php">Payments</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Library</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_add_books.php">Add Books</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_library_pending.php">Pending Approvals</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="admin_library_approved.php">View Books</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Creative Corner</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="admin_creative_pending.php">Pending Approvals</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Approved List</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Members</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Normal Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_user_pending.php">Pending Requests</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="admin_approved_users.php">Approved Users</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Doctors </a>
						 <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_doctor_pending.php">Pending Requests</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="admin_approved_doctors.php">Approved Doctors</a></li>
						</ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Complaints</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="admin_pending_complaints.php">Pending Complaints</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="admin_accepted_complaints.php">Accepted Complaints</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Payments</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Payments List</a></li>
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_payment_new.php">Add New Payments</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Paid Users List</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Payment Pending</a></li>
						</ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Reports</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Add Reports</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">View Reports</a></li>
						</ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Notifications</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_add_notification.php">Add</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="admin_view_notification.php">View</a></li>
						</ul>
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
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
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
                            <li><a href="#">Trainings</a></li>
                            <li class="active">Payments</li>
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
                            <strong class="card-title">Tutorial Payments</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
									<tr>
									  <th scope="col">#</th>
									  <th scope="col">Tutorial Name</th>
									  <th scope="col">Category</th>
									  <th scope="col">Video</th>
									  <th scope="col">Amount</th>
									  <th scope="col">Date</th>

								  </tr>
							  </thead>
							  <tbody>
								<?php
								$n=0;
								
								$sql="Select t.tutrl_name,t.ctg_id,t.video,a.amount,a.pay_date from tbl_tutorial t inner join tbl_admin_payment a on t.tutrl_id=a.tutrl_id";
								$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
								$n=$n+1;
								$cid=$r['ctg_id'];
								$sq="select ctg_name from tbl_tutrl_ctg where ctg_id=$cid";
								$res1=mysqli_query($con,$sq);
								$r1=mysqli_fetch_assoc($res1);
                        		echo
									"<tr>
									<th scope='row'>$n</th>
                        			<td class='text-left'>".$r['tutrl_name']."</td>
									<td class='text-left'>".$r1['ctg_name']."</td>
                       				<td class='text-left'><video width='200' height='200' controls>
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video>
									</td>
                        			<td class='text-left'>".$r['amount']."</td>
                        			<td class='text-left'>".$r['pay_date']."</td>
									
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


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
