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
									<li class=" scroll active"><a href="#home">home</a></li>
									<li class="scroll"><a href="#works">預約教室</a></li>
									<li><a href="reservation.php">預約紀錄</a></li>
									<li><a href="mlogin.php">帳號管理</a></li>
									<li><a href="borrowlogin.php">登出</a>
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
							<center>
								<table class="table table-striped" width="50%">
									<tr>
										<td>時間/教室</td>
										<td>LM101</td>
										<td>LM201</td>
										<td>LM301</td>
										<td>LM401</td>
										<td>LM501</td>
									</tr>
									<tr>
										<td>D0 07:10~08:00</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
									</tr>
									<tr>
										<td>D1 08:10~09:00</td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
									</tr>
									<tr>
										<td>D2 09:10~10:00</td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
									</tr>
									<tr>
										<td>D3 10:10~11:00</td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
									</tr>
									<tr>
										<td>D4 11:10~12:00</td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
									</tr>
									<tr>
										<td>DN 12:40~13:30</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
									</tr>
									<tr>
										<td>D5 13:40~14:30</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
									</tr>
									<tr>
										<td>D6 14:40~15:30</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
									</tr>
									<tr>
										<td>D7 15:40~16:30</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
									</tr>
									<tr>
										<td>D8 16:40~17:30</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
									</tr>
									<tr>
										<td>E0 17:40~18:30</td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/error.png"></td>
										<td><img src="icon/success.png"></td>
										<td><img src="icon/error.png"></td>
									</tr>
								</table>
								<a href = "JavaScript:void(0)" onclick = "closeDialog()"><font size="3" color="#3399ff">&nbsp;&nbsp;關閉</font></a>
							</center>
						</div> 
						<div id="fade" class="black_overlay"></div> 
					</div>

				</div><!--/.section-header-->

				  <?
					$i_id= "";

					$type = "";
					$sdate = "";
					$edate = "";
					$stime = "";
					$class = "";
					$useway = "";
				  ?>
				
				<form method="post" action="rdblink.php">
				<input type=hidden name="method" value="<? echo $method ?>">
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<img src="icon/type.png">
								</div>
								<h2>預借形式</h2>
								<p>
								</p>
								<select name="type[]">
								  <option value ="null">&nbsp;</option>
								  <option value ="type1">平時預借(30天內)</option>
								  <option value ="type2">學期預借</option>
								</select>
								<br>
								<label for="bookdate">日期：</label><br>
								<input type="date" name="sdate" placeholder="2018-10-27"><br>
								至<br>
								<input type="date" name="edate" placeholder="2018-10-27">
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<img src="icon/classroom.png">
								</div>
								<h2>教室</h2>
								<p></p>
								<select name="class[]">
								  <option value ="null">&nbsp;</option>
								  <option value ="LM103">LM103</option>
								  <option value ="LM203">LM203</option>
								  <option value ="LM303">LM303</option>
								  <option value ="LM403">LM403</option>
								  <option value ="LM503">LM503</option>
								</select>
								<p></p>
								<label>用途:&nbsp;<label>
								<input type="text" name="useway" value="<? echo $useway ?>">
								<p></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-5">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<img src="icon/time.png">
								</div>
								<h2>時間</h2>
								<p></p>
								<select name="stime[]">
								  <option value ="D0">D0 07:10~08:00</option>
								  <option value ="D1">D1 08:10~09:00</option>
								  <option value ="D2">D2 09:10~10:00</option>
								  <option value ="D3">D3 10:10~11:00</option>
								  <option value ="D4">D4 11:10~12:00</option>
								  <option value ="DN">DN 12:40~13:30</option>
								  <option value ="D5">D5 13:40~14:30</option>
								  <option value ="D6">D6 14:40~15:30</option>
								  <option value ="D7">D7 15:40~16:30</option>
								  <option value ="D8">D8 16:40~17:30</option>
								  <option value ="E0">E0 17:40~18:30</option>
								</select>
								<p></p>
								<h6> 至 </h6>
								<br>
								<select name="etime[]">
								  <option value ="D0">D0 07:10~08:00</option>
								  <option value ="D1">D1 08:10~09:00</option>
								  <option value ="D2">D2 09:10~10:00</option>
								  <option value ="D3">D3 10:10~11:00</option>
								  <option value ="D4">D4 11:10~12:00</option>
								  <option value ="DN">DN 12:40~13:30</option>
								  <option value ="D5">D5 13:40~14:30</option>
								  <option value ="D6">D6 14:40~15:30</option>
								  <option value ="D7">D7 15:40~16:30</option>
								  <option value ="D8">D8 16:40~17:30</option>
								  <option value ="E0">E0 17:40~18:30</option>
								</select>

							</div>
						</div>
					</div>
				</div>
				<center>
					<button type="submit" class="btn btn-primary" name="submit" onclick="show_confirm()" value="送出">送出</button>
				</center>
			</div><!--/.container-->
			</form>
		
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
