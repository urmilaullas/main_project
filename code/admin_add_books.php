<?php
session_start();
include "dbconnection.php";
if(!empty($_GET["x"]))
{
	
	echo "<script>alert('Your Request Has Been Sended Successfully!!!');</script>";
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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	
	
<script>
function checkDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   now.setDate(now.getDate()+10)
   if (selectedDate < now) {
    alert("Date must be after 10 days");
   }
  
 }
 
 
 function Validate(oForm) {
	
		
		var _validFileExtensions = [".pdf"]; 
		var _validFileExtensionsimg = [".jpeg",".png","jpg"]; 
	
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file" && oInput.id=="bookfile") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
		if (oInput.type == "file" && oInput.id=="bookimg") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensionsimg.length; j++) {
                    var sCurExtension = _validFileExtensionsimg[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensionsimg.join(", "));
                    return false;
                }
            }
        }
    }
  
    return true;
}

 
 </script>
<style>
td{
	padding:10px;
}
input[type="label"]{
    outline: none;
    padding: 10px;
    font-size: 14px;
    color: #000;
    background: none;
    width: 100%;
    letter-spacing: 1px;
    border: none;
    margin-bottom: 1em;
	font-weight:1000;
}



input[type="text"],  input[type="number"],  textarea,  select{
    outline: none;
    padding: 10px;
    font-size: 14px;
    color: #000;
    background: none;
    width: 100%;
    letter-spacing: 1px;
    border: none;
    border-bottom: 2px solid rgba(197, 197, 197, 0.8);
    margin-bottom: 1em;
}


</style>
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
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Add</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">View</a></li>
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
                            <li><a href="#">Library</a></li>
                            <li class="active">Add Books</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated">

				<div class="card">
				<div class="card-header">
                        <strong class="card-title" v-if="headerText">Add Books</strong>
                    </div>
					<div class="card-body">
					<form method="post" action="add_book.php" enctype="multipart/form-data" onsubmit="return Validate(this);">
						<table style="margin-left:200px;">
							<tr>
								<td>
									<input type="label" value="Category">
								</td>
								<td>
									<select id="category" name="slctcategory" style="border:none;" required>
									<option value="">select category</option>
									<?php
										$qerry="Select * from tbl_books_ctg";
										$dd_res=mysqli_query($con,$qerry);
										while($r=mysqli_fetch_row($dd_res))
										{ 
											echo "<option value='$r[0]'> $r[1] </option>";
										}
									?>
									</select>
								</td>
							<tr>
								<td>
									<input type="label" value="Name">
								</td>
								<td>
									<input type="text" name="txtbname" required>
								</td>
							</tr>
							<tr>
								<td>
									<input type="label" value="Language">
								</td>
								<td>
									<input type="text" name="txtlang" required style="text-transform: capitalize;">
								</td>
							</tr>
							<tr>
								<td>
									<input type="label" value="Auther">
								</td>
								<td>
									<input type="text" name="txtauther" required>
								</td>
							</tr>
							<tr>
								<td>
									<input type="label" value="Upload Book">
								</td>
								<td>
									<input type="file" name="bookfile" id="bookfile" required>
								</td>
							</tr>
							<tr>
								<td>
									<input type="label" value="Upload Book Cover">
								</td>
								<td>
									<input type="file" name="bookimg" id="bookimg">
								</td>
							<tr>
								<td>
								<input type="label" value="Give Your Description Here">
								</td>
								<td>
								<textarea  class="w3l_summary"  name="description" maxlength="80" rows="5" required></textarea>
								</td>
							</tr>
							<tr>
							<td>
								<input type="Submit" value="Send Request" class="btn btn-outline-primary btn-lg" style="width:175px;margin-left:60px;">
							</td>
							<td>
								<input type="reset" value="Cancel" class="btn btn-outline-danger btn-lg" style="width:175px;margin-left:70px">
							</td>
							</tr>
						</table>
					</form>

				
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
