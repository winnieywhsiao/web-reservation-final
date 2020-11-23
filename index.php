<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>教室預借系統</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        

    </head>
	
	<body>
		
		<!--header-top start -->
		<header>
			<!-- top-area Start -->
			<section class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
					<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

						<div class="container">

							<!-- Start Header Navigation -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
									<i class="fa fa-bars"></i>
								</button>
								<a class="navbar-brand" href="index.php">FJU</a>

							</div><!--/.navbar-header-->
							<!-- End Header Navigation -->

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
								<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
									<li class=" scroll active"><a href="#home">home</a></li>
									<li class="scroll"><a href="#works">預約教室</a></li>
									<li><a href="reservation.php">預約紀錄</a></li>
									<li><a href="mlogin.php">帳號管理</a></li>									
									<? include "login.php"; ?>
									</li>
								</ul><!--/.nav -->
							</div><!-- /.navbar-collapse -->
						</div><!--/.container-->
					</nav><!--/nav-->
					<!-- End Navigation -->
				</div><!--/.header-area-->
				<div class="clearfix"></div>

			</section><!-- /.top-area-->
			<!-- top-area End -->
			
					
		</header><!--/.header-top-->
		<!--header-top end -->

		

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2>Welcome To Room Reservation System</h2>
					<p>
						Now You Can Start To Reserve Classrooms 
					</p>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start-->
		<section id="list-topics" class="list-topics" align="center">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<h4 class="scroll"><a href="#works"><img src="assets/icon/handshake.png"></a></h4>
								</div>
								<h2 class="scroll"><a href="#works">預約教室</a></h2>
								<p></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="reservation.php"><img src="assets/icon/task.png"></a>
								</div>
								<h2><a href="reservation.php">預約紀錄</a></h2>
								<p></p>
								
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="mlogin.php"><img src="assets/icon/id.png"></a>
								</div>
								<h2><a href="mlogin.php">帳號管理</a></h2>
								<p>  </p>
							</div>
						</li>
					</ul>
				</div>
			</div> <!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

		<!--works start -->
		<form method="post" action="index.php">
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>預約教室
						<a href = "JavaScript:void(0)" onclick = "openDialog()"><font size="2" color="#3399ff">&nbsp;&nbsp;(查看教室)</font></a>
					</h2>
					<div class="container">
						<div id="light" class="white_content">

						<? include "retime.php"; ?>

						</div> 
						<div id="fade" class="black_overlay"></div> 
					</div>

				</div><!--/.section-header-->
				
				<center>
					<table>
						<tr align="center">
							<td><a href="ius.php"><img src="icon/us.png" width="75%"></a></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><a href="ian.php"><img src="icon/annual.png" width="75%"></a></td>
						</tr>
						<tr align="center">
							<td align="center"><h3>平時預借(30天內)</h3></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td align="center"><h3>學期預借</h3></td>
						</tr>
					</table>
				</center>				  	
		
		</section><!--/.works-->
		<!--works end -->
		
		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-">
							<p> Copyright &copy; 2018. College of Management, Fu Jen Catholic University</p>
						</div>
						
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
		<script type="text/javascript">
			$(function(){
				document.getElementById('light').style.display='none';
				document.getElementById('fade').style.display='none';
			})
			function openDialog(){
				document.getElementById('light').style.display='block';
				document.getElementById('fade').style.display='block';
			}
			function closeDialog(){
				document.getElementById('light').style.display='none';
				document.getElementById('fade').style.display='none';
			}
		</script>
</html>
