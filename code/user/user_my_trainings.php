<?php
session_start();
include "dbconnection.php";
$uid=$_SESSION['id'];
$uid = $_SESSION['id'];
 if(!empty($_GET["x"]))
{
	echo "<script>alert('Your Training Has Been Deleted!!!');</script>";
}
?>
<html>
<head>

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
		<link href="../css/user_video.css" type="text/css" rel="stylesheet" media="all">
	<!-- // Font-awesome-css -->
	<!-- //Style-sheets -->

	<!-- Web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-fonts -->

	
	
	
	




  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- DataTables -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
 
</head>
<body class="hold-transition skin-blue sidebar-mini">


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
				<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
						My Videos
					</a>
				</li>
				<li role="presentation">
					<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
						Payments
					</a>
				</li>
				<li role="presentation">
					<a href="#tab3" aria-controls="tab2" role="tab" data-toggle="tab">
						Purchased Videos
					</a>
				</li>

			</ul>
			
				<div class="">
	

  
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
            

	<div class="tab-content">
	<div role="tabpanel" class="tab-pane  active" id="tab1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">My Tutorials</h3>
			  <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SlNo</th>
                  <th>Tutorial Name</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th>Amount</th>
                  <th>Video</th>
                  <th>Total Purchase</th>
				  <th>Status</th>
				  <th>Delete</th>
				  </tr>
                </tr>
                </thead>
                <tbody>
					<?php
					 			$n=0;
								$sql="Select tutrl_id,tutrl_name,ctg_id,description,type,amount,video,case
when status=0 then 'Pending'
when status=1 then 'Approved'
when status=2 then 'Rejected'
END AS status from tbl_tutorial where user_id=$uid; ";
						$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
								$n=$n+1;
								$cid=$r['ctg_id'];
								$sq="select ctg_name from tbl_tutrl_ctg where ctg_id=$cid";
								$res1=mysqli_query($con,$sq);
								$r1=mysqli_fetch_assoc($res1);
								
								$tid=$r['tutrl_id'];
								$sq1="select count(*) as tot from tbl_user_tutrl_pay where tutrl_id=$tid;";
								$res2=mysqli_query($con,$sq1);
								$r2=mysqli_fetch_assoc($res2);
								
							
								echo"<tr>
									<td>".$n."</td>
									<td>".$r['tutrl_name']."</td>
									<td>".$r1['ctg_name']."</td>
									<td>".$r['description']."</td>
									<td>".$r['type']."</td>
									<td>".$r['amount']."</td>
									<td><video width='200' height='200' controls>
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video></td>
									<td>".$r2['tot']."</td>
									<td>".$r['status']."</td>
									<td><a href=tutorial_reject.php?id=".$r['tutrl_id'].">
											  <img src=../images/reject.png alt=Reject width='20px' height='20px' border=0>
											</a></td>
									</tr>";
								
							}
					?>
                </tbody>
                <tfoot>
                <tr>
                  <th>SlNo</th>
                  <th>Tutorial Name</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th>Amount</th>
                  <th>Video</th>
                  <th>Total Purchase</th>
				  <th>Status</th>
				  <th>Delete</th>
				  </tr>
                </tr>
                </tfoot>
              </table>
            </div>
			<!-- /.box-body -->
          </div>
		  
          <!-- /.box -->
        </div>
		
		
		
		
		<div role="tabpanel" class="tab-pane" id="tab2">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Payments</h3>
			  <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SlNo</th>
                  <th>Tutorial Name</th>
                  <th>Category</th>
                  <th>Video</th>
                  <th>Amount</th>
                  <th>Amount Credited</th>
                  <th>Date</th>
				  </tr>
                </tr>
                </thead>
                <tbody>
					<?php
					 			$n=0;
								$sql="select p.amount as pamount,p.pay_date,t.tutrl_name,t.ctg_id,t.video,t.amount from tbl_user_tutrl_pay p inner join tbl_tutorial t on t.tutrl_id=p.tutrl_id where t.user_id=$uid";
						$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
								$n=$n+1;
								$cid=$r['ctg_id'];
								$sq="select ctg_name from tbl_tutrl_ctg where ctg_id=$cid";
								$res1=mysqli_query($con,$sq);
								$r1=mysqli_fetch_assoc($res1);
								
								echo"<tr>
									<td>".$n."</td>
									<td>".$r['tutrl_name']."</td>
									<td>".$r1['ctg_name']."</td>
									<td><video width='200' height='200' controls>
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video></td>
									<td>".$r['amount']."</td>
									<td>".$r['pamount']."</td>
									<td>".$r['pay_date']."</td>
									</tr>";
								
							}
					?>
                </tbody>
                <tfoot>
                <tr>
                  <th>SlNo</th>
                  <th>Tutorial Name</th>
                  <th>Category</th>
                  <th>Video</th>
                  <th>Amount</th>
                  <th>Amount Credited</th>
                  <th>Total Purchase</th>
				  </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
		  
          <!-- /.box -->
        </div>
    
		
		
		
		
		
		<div role="tabpanel" class="tab-pane" id="tab3">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Purcahsed Tutorials</h3>
			  <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SlNo</th>
                  <th>Tutorial Name</th>
                  <th>Description</th>
				  <th>Category</th>
                  <th>Video</th>
                  <th>Amount</th>
                  <th>Date</th>
				  </tr>
                </tr>
                </thead>
                <tbody>
					<?php
					 			$n=0;
								$sql="select p.amount as pamount,p.pay_date,t.tutrl_name,t.ctg_id,t.video,t.amount,t.description from tbl_user_tutrl_pay p inner join tbl_tutorial t on t.tutrl_id=p.tutrl_id where p.user_id=$uid";
						$res=mysqli_query($con,$sql);
							while($r=mysqli_fetch_assoc($res))
							{
								$n=$n+1;
								$cid=$r['ctg_id'];
								$sq="select ctg_name from tbl_tutrl_ctg where ctg_id=$cid";
								$res1=mysqli_query($con,$sq);
								$r1=mysqli_fetch_assoc($res1);
								
								echo"<tr>
									<td>".$n."</td>
									<td>".$r['tutrl_name']."</td>
									<td>".$r['description']."</td>
									<td>".$r1['ctg_name']."</td>
									<td><video width='200' height='200' controls>
									<source src='../tutorial_video/".$r['video']."'type='video/mp4'></video></td>
									<td>".$r['amount']."</td>
									<td>".$r['pay_date']."</td>
									</tr>";
								
							}
					?>
                </tbody>
                <tfoot>
                <tr>
                  <th>SlNo</th>
                  <th>Tutorial Name</th>
                  <th>Description</th>
				  <th>Category</th>
                  <th>Video</th>
                  <th>Amount</th>
                  <th>Date</th>
				  </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
		  
          <!-- /.box -->
        </div>
    
		
		
		
		
		</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  
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

  
  
  
  
<!-- jQuery 3 -->
<!--<script src="jquery.min.js"></script>-->
<!-- Bootstrap 3.3.7 -->
<!--<script src="bootstrap.min.js"></script>-->
<!-- DataTables -->
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
