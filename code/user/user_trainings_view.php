<?php
session_start();
include "dbconnection.php";
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
		function showData() { document.getElementById('sort').style.display = 'inline';
							  document.getElementById('lblsort').style.display = 'inline';
						}
        function hideData() { document.getElementById('sort').style.display = 'none';
							  document.getElementById('lblsort').style.display = 'none';
							}	
		function lwdisplay(){
								
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
				<li>Trainings</li>
			
			</ul>
		</div>
	</div>
	<!-- //Page details -->

	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle">Trainings</h3>
			<div class="inner_sec_info">
				<div class="profile" style="width:100%; margin-left:20px;">
				<form method="post">
				<ul class="nav nav-tabs" role="tablist" align="center">
				<li>
					<label for="sort" id="lblsort" style="margin-left:110px;margin-right:20px;display:none;">Sort By</label>
				</li>
				<li>
					<select id="sort" name="slctsort" color="blue" style="width:100%;margin-right:20px;display:none;">
						<option value="0" id="slct">select Price</option>
						<option value="1" id="lh">Price Low - High</option>
						<option value="2" id="hl">Price High - Low</option>
					</select>
				</li>
				<li>
					<input type="radio" name="rdtype" id="free" value="0" onclick="hideData()" style="margin-left:20px;margin-right:20px;">
                    <label for="free" id="lbltype">Free</label>
					<input type="radio" name="rdtype" id="paid" value="1" onclick="showData()" style="margin-left:20px;margin-right:20px;">
                    <label for="paid" id="lbltype"  >Paid</label>
					
			
				</li>
				<li>
						<label for="category" style="margin-left:20px;margin-right:20px;">Categories</label>
				</li>
				<li>
						<select id="category" name="slctcategory" color="blue" style="width:100%;">
						<option value="0">select category</option>
					<?php
						$qerry="Select * from tbl_tutrl_ctg";
						$dd_res=mysqli_query($con,$qerry);
						while($r=mysqli_fetch_row($dd_res))
						{ 
							echo "<option value='$r[0]'> $r[1] </option>";
						}
					?>
				</select>
               </li>
			   <li>
				<input type="submit" value="Search" style="margin-left:20px;width:200%;height:50px; ">
			   </li>
				</ul>					
					
				</div>	
			
			<div class="popl-row">
			
				<?php
					$id=$_POST['slctcategory'];
					$price=$_POST['slctsort'];
					$type=$_POST['rdtype'];
				echo "<table><tr>";
					$n=0;
			if (isset($_POST['slctcategory']))
			{
				
				echo"<script>document.getElementById('category').value=$id;</script>";
				
				$cid=$_POST['slctcategory'];
				if($_POST['rdtype']==0)
					{
						echo"<script>document.getElementById('free').checked=true;</script>";
						$sql="Select tutrl_id,tutrl_name,video,description from tbl_tutorial where status=1 and type=0 and ctg_id=$cid";
							$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
								
								$n=$n+1;
								echo "<td>";
								echo "<div style='margin-left:30px;margin-right:30px;text-align:center;'><video width='200' height='200' controls>
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video>
									<br/>".$r['tutrl_name']."<br/>".$r['description']."
									";
									echo "</td>";
									if($n==4)
									{
										echo "</tr>";
									}
							}
							
							echo "</tr>";
					}
					else
					{
						echo"<script>document.getElementById('paid').checked=true;</script>";
						if($_POST['slctsort']==1)
						{
							echo"<script>document.getElementById('lh').selected=true;
								document.getElementById('sort').style.display = 'inline';
								document.getElementById('lblsort').style.display = 'inline';</script>";
							$sql="Select tutrl_id,tutrl_name,video,description,amount from tbl_tutorial where status=1 and type=1 and ctg_id=$cid order by amount asc";
							$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
									
									$n=$n+1;
									echo "<td>";
									echo "<div style='margin-left:30px;margin-right:30px;text-align:center;'><a target='_blank' href=tutorial_payment.php?id=".$r['tutrl_id']."><video width='200' height='200' >
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video>
									<div class='img-caption'>
									<br/><h3 class='video-txt'>".$r['tutrl_name']."</h3><br/><p class='video-p-agileinfo'>".$r['description']."<br/>Amount : ".$r['amount']."</p></a></div>
									";
									echo "</td>";
									if($n==4)
									{
										echo "</tr>";
									}                               
							}
							echo "</tr>";
						}
						elseif($_POST['slctsort']==2)
						{
							echo"<script>document.getElementById('hl').selected=true;
								document.getElementById('sort').style.display = 'inline';
								document.getElementById('lblsort').style.display = 'inline';</script>";
							$sql="Select tutrl_id,tutrl_name,video,description,amount from tbl_tutorial where status=1 and type=1 and ctg_id=$cid order by amount desc";
							$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
									
									$n=$n+1;
									echo "<td>";
									echo "<div style='margin-left:30px;margin-right:30px;text-align:center;'><a target='_blank' href=tutorial_payment.php?id=".$r['tutrl_id']."><video width='200' height='200' >
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video>
									<div class='img-caption'>
									<br/><h3 class='video-txt'>".$r['tutrl_name']."</h3><br/><p class='video-p-agileinfo'>".$r['description']."<br/>Amount : ".$r['amount']."</p></a></div>
									";
									echo "</td>";
									if($n==4)
									{
										echo "</tr>";
									}
							}
							echo "</tr>";
						}	
						else
						{
							
							echo"<script>document.getElementById('slct').selected=true;
								document.getElementById('sort').style.display = 'inline';
								document.getElementById('lblsort').style.display = 'inline';</script>";
							$sql="Select tutrl_id,tutrl_name,video,description,amount from tbl_tutorial where status=1 and type=1 and ctg_id=$cid";
							$res=mysqli_query($con,$sql);
						
							while($r=mysqli_fetch_assoc($res))
							{
								$n=$n+1;
								echo "<td>";
									echo "<div style='margin-left:30px;margin-right:30px;text-align:center;'><a target='_blank' href=tutorial_payment.php?id=".$r['tutrl_id']."><video width='200' height='200' >
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video>
									<div class='img-caption'>
									<br/><h3 class='video-txt'>".$r['tutrl_name']."</h3><br/><p class='video-p-agileinfo'>".$r['description']."<br/>Amount : ".$r['amount']."</p></a></div>
									";
								echo "</td>";
								if($n==4)
								{
									echo "</tr>";
								}
							}
							echo "</tr>";	
						}
					}
			}
			/* else
			{
				echo"<script>alert('Please Select Category!!!');</script>";
			}*/
					echo "</table>";
					?>
			
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