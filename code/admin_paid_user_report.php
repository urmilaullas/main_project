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
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_payment_list.php">Payments List</a></li>
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_payment_new.php">Add New Payments</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="admin_paid_users.php">Paid Users List</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="admin_payment_pending.php">Payment Pending</a></li>
						</ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Reports</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="admin_add_report.php">Add Reports</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">View Reports</a></li>
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Generate Report</a></li>
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
                            <li><a href="#">Reports</a></li>
                            <li class="active">Paid Users Report</li>
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
                            <strong class="card-title">Paid Users List</strong>
							<hr>
							<div>
							<form method="post">
								<label>Select Payment Category</label>
								<select class="form-control-sm form-control" name="pay" id="dt" style="width:200px; display:inline; margin-right:20px;">
								<option value="">Please Select</option>
								<?php
									$sql="select pay_ctg_id,ctg_name,pay_year from tbl_payment_ctg";
									$res=mysqli_query($con,$sql);
									while($r=mysqli_fetch_assoc($res))
									{
										echo "<option value=".$r['pay_ctg_id'].">".$r['ctg_name']." ".$r['pay_year']."</option>";
									}
								?>
								</select>
								<input type="Submit" value="Search" name="submit" class="btn btn-outline-primary btn-lg" style="width:175px;">
							</form>
							</div>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table"  class="table table-bordered" >
                  <thead>
									<tr>
									  <th scope="col">#</th>
									  <th scope="col">Name</th>
									  <th scope="col">House Name</th>
									  <th scope="col">Amount</th>
									  <th scope="col">Date</th>
								  </tr>
							  </thead>
							  <tbody>
								
							  
								<?php
								$n=0;
								if(isset($_POST['submit']))
								{
									$pay_id=$_POST['pay'];
									$_SESSION['pay']=$pay_id;
									if($pay_id!='')
									{
									echo "<script>document.getElementById('dt').value='$pay_id';</script>";
									$sql="Select u.first_name,u.last_name,u.house_name,p.amount,p.pay_date from tbl_user u inner join tbl_admin_payment p on p.user_id=u.user_id where p.pay_ctg_id='$pay_id';";
									$res=mysqli_query($con,$sql);
									while($r=mysqli_fetch_assoc($res))
									{	
										$n=$n+1;
										echo
											"<tr>
											<th scope='row'>$n</th>
											<td>".$r['first_name']." ".$r['last_name']."</td>
											<td>".$r['house_name']."</td>
											<td>".$r['amount']."</td>
											<td>".$r['pay_date']."</td></tr>";
										
									}
									}
								}	
							?>
							  
							  
						  </tbody>
                  </table>
				  
						<button type="button" onclick="window.location='paid_user_report.php'" class="btn btn-outline-secondary">Generate Report</button>
						
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





</body>
</html>
