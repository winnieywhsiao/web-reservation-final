<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
			function show_confirm()
			{
			var r=confirm("已完成預借");
			}
		</script>

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
									<li><a href="index.php">home</a></li>
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

		

		<!--works start -->
		<form method="post" action="ian.php">
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
					
				 
				<? 
					include "rinsert2.php";
				?>
				  	
		
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
