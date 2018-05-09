<?php
session_start();
include "dbconnection.php";
if(!empty($_GET["x"]))
{
	
	echo "<script>alert('Your Profile Has Been Updated Successfully!!!');</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>User Home</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grounding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		function changeData()
		{
			document.getElementById("txtfname").disabled=false;
			document.getElementById("txtlname").disabled=false;
			document.getElementById("age").disabled=false;
			document.getElementById("txtbldgrp").disabled=false;
			document.getElementById("txthname").disabled=false;
			document.getElementById("txthno").disabled=false;
			document.getElementById("txtphn").disabled=false;
			document.getElementById("save").style.display="block";
			document.getElementById("cancel").style.display="block";
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="../css/user_bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-css -->
	<link href="../css/user_popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Pop-up -->
	<link href="../css/user_banner.css" rel="stylesheet" type="text/css" media="all" />
	<!--// banner-css -->
	<link rel="stylesheet" href="../css/user_shop.css" type="text/css" media="screen" property="" />
	<!--// shop-css -->
	<link href="../css/user_style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //common-css -->
	<link href="../css/user_blog_2.css" rel="stylesheet" type='text/css' media="all" />
	<!--// blog-css -->
	<link href="../css/user_font-awesome.css" rel="stylesheet">
	<!-- // Font-awesome-css -->
	<!-- //Style-sheets -->

	<!-- Web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-fonts -->

</head>

<body>
	<!-- header -->
	<div class="header-w3layouts" id="home">
		<!-- header-top -->
		
		<!--// header-top -->
		<!-- header-middle -->
		
		<!--// header-middle -->
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			</div>

			<div class="collapse navbar-collapse js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="user_profile.php">Profile</a></li>
					<li><a href="user_members.php">Members</a></li>
					<li class="dropdown mega-dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
						<ul class="dropdown-menu mega-dropdown-menu">
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
									<li class="dropdown-header">Helth Care</li>
									<li><a href="user_medical_camp.php">Medical Camp</a></li>
									<li><a href="user_reg_camp.php">Registerd Medical Camps</a></li>
									<li><a href="user_doctors_list.php">Doctors</a></li>
								</ul>
							</li>
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
									<li class="dropdown-header">Cleaning</li>
									<li><a href="user_cleaning_rqst.php">Cleaning Request </a></li>
									<li><a href="user_cleaning_status.php">View Status</a></li>
								</ul>
							</li>
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
									<li class="dropdown-header">Trainings</li>
									<li><a href="user_trainings_add.php">Add</a></li>
									<li><a href="user_trainings_view.php">View</a></li>
									<li><a href="user_my_trainings.php">My Trainings</a></li>
								</ul>
							</li>
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
									<li class="dropdown-header">Library</li>
									<li><a href="user_library_add.php">Add Books</a></li>
									<li><a href="user_library_view.php">View Books</a></li>
									<li><a href="user_my_books.php">My Books</a></li>
								</ul>
							</li>
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
									<li class="dropdown-header">Creative Corner</li>
									<li><a href="user_creative_add.php">Add</a></li>
									<li><a href="user_creative_view.php">View</a></li>
									<li><a href="user_my_creative.php">My Creative Things</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="user_complaints.php">Compliants</a></li>
					<li><a href="user_payment.php">Payments</a></li>
					<li><a href="user_report_view.php">Reports</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
			<!-- //nav-collapse -->
		</nav>
	</div>
	<!-- banner -->
	<div class="innerf-banner">
	</div>
	<!--//banner -->
	<!-- Page details -->
	<div class="services-agile-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="user_home.html">Home</a>
					
					<span>| |</span>
				</li>
				<li>Profile</li>
			
			</ul>
		</div>
	</div>
	<!-- //Page details -->

	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle">Profile</h3>
			<div class="inner_sec_info">
				<div class="profile">
					<?php
					$uid=$_SESSION['id'];
					$sql = "select first_name,last_name, age, blood_grp, house_name, house_no, phone from tbl_user where user_id=$uid;";
					$r= mysqli_query($con, $sql);
					$result=mysqli_fetch_assoc($r);
					?>
					<form action="update_profile.php" method="post">
					
						<table style="width:100%;margin-left:2%;">
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
							<td><input type="label" value="House Name"></td>
							<td><input type="text" name="txthname" id="txthname" value="<?php echo $result['house_name']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="label" value="House Number"></td>
							<td><input type="text" name="txthno" id="txthno" value="<?php echo $result['house_no']?>" required disabled/></td>
						</tr>
							<td><input type="label" value="Phone"></td>
							<td><input type="text" name="txtphn" id="txtphn" value="<?php echo $result['phone']?>" required disabled/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Save" id="save" style="display:none;"></td>
							<td><input type="reset" value="Cancel" id="cancel" style="display:none;"></td>
						</tr>
						<tr clospan=2>	
							<td><input type="button" value="Edit" onclick="changeData()"></td>
						</tr>
						</table>
					</form>
				</div>
			
			</div>
		</div>
	</div>
	
	<!-- footer -->
	<div class="footer-wthree-copyf">
		<div class="container">
			<div class="addressf-agileits-w3layouts">
				<p><span class="fa fa-map-marker" aria-hidden="true"></span>KRA.</p>
			</div>
			<p>© 2018 Residents' association . All rights reserved | Design by <a href="#">KRA</a></p>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //footer -->

	<!-- js files -->

	<!-- Common js -->
	<script type="text/javascript" src="../js/user_jquery-2.1.4.min.js"></script>
	<!--// Common js -->

	<!-- cart-js -->
	<!-- //cart-js -->

	<!-- Nav Js -->
	<script type="text/javascript" src="../js/user_bootstrap.js"></script>
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!--// Nav Js -->

	<!-- bootstrap-pop-up -->
	<!-- //bootstrap-pop-up -->

	<!--pop-up-box -->
	<script src="../js/user_jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="../js/user_move-top.js"></script>
	<script type="text/javascript" src="../js/user_easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- smoothscroll -->
	<script src="../js/user_SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- js files -->

</body>

</html>