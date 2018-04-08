<?php
session_start();
include "dbconnection.php";
 if(!empty($_GET["x"]))
{
	if($_GET["x"]==1)
	echo "<script>alert('You Have successfully Registered For Medical Camp!!!');</script>";
	else
	echo "<script>alert('You Are Already Registered!!!');</script>";
		
} 
?>
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

	
	<style>
		.popl-row td{
			padding:10px;
			border-bottom:10px;
			margin-right=200px;
		}
	</style>
	
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
					<li><a href="#">Payments</a></li>
					<li><a href="#">Reports</a></li>
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
				<li>Helth Care</li>
			
			</ul>
		</div>
	</div>
	<!-- //Page details -->

	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle">Medical Camp</h3>
			<div class="inner_sec_info">
				<div class="profile" style="width:100%; margin-left:20px;">
		<form method="post" >
				<ul class="nav nav-tabs" role="tablist" align="center">
				
				<li>
						<label for="date" style="margin-left:350px;margin-right:20px;">Date</label>
				</li>
				<li>
						<select id="d" name="slctdate" color="blue" style="width:100%;" required>
						<option value="0">select date</option>
					<?php
						$qerry="select distinct date from tbl_medical_camp where dctr_status=1 and status=1 and date>DATE_ADD(now(), INTERVAL 2 DAY)";
						$dd_res=mysqli_query($con,$qerry);
						while($r=mysqli_fetch_row($dd_res))
						{ 
							echo "<option value='$r[0]'> $r[0] </option>";
						}
					?>
				</select>
               </li>
			   <li>
				<input type="submit" name="submit" value="Search" style="margin-left:20px;width:200%;height:50px; ">
			   </li>
				</ul>					
			</form>
			
			<?php
			if(isset($_POST['submit']))
			{
				if(isset($_POST['slctdate']))
				{
			$dateslct=$_POST['slctdate'];
			$_SESSION['dt']=$dateslct;
			
			
			echo "<script>document.getElementById('d').value='$dateslct';</script>";
			
				}
				$sql="select distinct camp_id,time,location from tbl_medical_camp where dctr_status=1 and status=1 and date='$dateslct'";
				$res=mysqli_query($con,$sql);
				while($r=mysqli_fetch_assoc($res))
					{
						$_SESSION['camp_id']=$r['camp_id'];
						?>
					<div class="popl-row" id="data">
			
					<form action="mc_reg.php" method="post">
						<table align="center" cellpadding="20px" cellspacing="20px" width="90%" height="10%">
							<tr>
								<td>
									<input type="label" value="Time">
								</td>
								<td>
									<input type="text" name="txttime" disabled value="<?php echo $r[time]?>">
								</td>
							</tr>
							<tr>
								<td>
									<input type="label" value="Location">
								</td>
								<td>
									<input type="text" name="txtloction" disabled value="<?php echo $r[location]?>">
								</td>
							</tr>
							<tr>
								<td>
								<input type="label" value="Doctors Available">
								</td>
								<td>
								<textarea  class="w3l_summary"  name="description" disabled maxlength="50" rows="5">
									<?php 
										$sql="select d.first_name,d.last_name,d.qualification,d.specialization from tbl_doctors d inner join tbl_medical_camp m on m.dctr_id=d.dctr_id where m.dctr_status=1 and m.status=1 and m.date='$dateslct'";
										$res=mysqli_query($con,$sql);
										$n=0;
										while($r=mysqli_fetch_assoc($res))
										{
											$n=$n+1;
											echo "\n".$n.". ".$r['first_name']." ".$r['last_name']." ".$r['qualification']." ".$r['specialization']."\n";
											
										}
									?> 
								</textarea>
								</td>
							</tr>
							<tr colspan=2>							
								<td>
								<input type="submit" value="Register" style="width:50%;margin-left:70%;">
								</td>
								
							</tr>
						</table>	
					</form>
			
				</div>
				<?php	}	
			}?>
			
				
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