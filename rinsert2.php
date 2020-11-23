 <?
	session_start();
	$i_id= "";
	$tacc_id= "";
	$class_id= "";
	$type = "";
	$sdate = "";
	$edate = "";
	$stime = "";
	$etime = "";
	$class = "";
	$useway = "";
 ?>
 <? include "tlock.php" ?>

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
<form method="post">
	<div class="works-content">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="single-how-works">
					<div class="single-how-works-icon">
						<img src="icon/type.png">
					</div>
					<h2>預借形式</h2>
					<p></p>
					<select name="type" required>
						<option value ="學期預借">學期預借</option>
					</select>
					<br>
					<label for="bookdate">日期：</label><br>
					<input type="date" min='<? echo $date ?>' name="sdate" value="<? echo $sdate ?>" placeholder="2018-10-27" required><br>
					至<br>
					<input type="date" min='<? echo $date ?>' name="edate" value="<? echo $edate ?>" placeholder="2018-10-27" required>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="single-how-works">
					<div class="single-how-works-icon">
						<img src="icon/classroom.png">
					</div>
					<h2>教室</h2>
					<p></p>
					<select name="class" required>
						<option value ="null">&nbsp;</option>
						<option value ="LM103">LM103</option>
						<option value ="LM203">LM203</option>
						<option value ="LM303">LM303</option>
						<option value ="LM403">LM403</option>
						<option value ="LM503">LM503</option>
					</select>
					<p></p>
					<label>用途:&nbsp;<label>
					<input type="text" name="useway" value="<? echo $useway ?>" required>
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
					<select name="stime" required>
						<option value ="D0 07:10~08:00">D0 07:10~08:00</option>
						<option value ="D1 08:10~09:00">D1 08:10~09:00</option>
						<option value ="D2 09:10~10:00">D2 09:10~10:00</option>
						<option value ="D3 10:10~11:00">D3 10:10~11:00</option>
						<option value ="D4 11:10~12:00">D4 11:10~12:00</option>
						<option value ="DN 12:40~13:30">DN 12:40~13:30</option>
						<option value ="D5 13:40~14:30">D5 13:40~14:30</option>
						<option value ="D6 14:40~15:30">D6 14:40~15:30</option>
						<option value ="D7 15:40~16:30">D7 15:40~16:30</option>
						<option value ="D8 16:40~17:30">D8 16:40~17:30</option>
						<option value ="E0 17:40~18:30">E0 17:40~18:30</option>
					</select>
					<p></p>
					<h6> 至 </h6>
					<br>
					<select name="etime" required>
						<option value ="D0 07:10~08:00">D0 07:10~08:00</option>
						<option value ="D1 08:10~09:00">D1 08:10~09:00</option>
						<option value ="D2 09:10~10:00">D2 09:10~10:00</option>
					    <option value ="D3 10:10~11:00">D3 10:10~11:00</option>
						<option value ="D4 11:10~12:00">D4 11:10~12:00</option>
						<option value ="DN 12:40~13:30">DN 12:40~13:30</option>
						<option value ="D5 13:40~14:30">D5 13:40~14:30</option>
						<option value ="D6 14:40~15:30">D6 14:40~15:30</option>
						<option value ="D7 15:40~16:30">D7 15:40~16:30</option>
						<option value ="D8 16:40~17:30">D8 16:40~17:30</option>
						<option value ="E0 17:40~18:30">E0 17:40~18:30</option>
					</select>
				</div>
			</div>
		</div>
	<center>
		<button type="submit" class="btn btn-primary" name="submit" onclick="show_confirm()" value="送出">送出</button>
	</center>
	</div><!--/.container-->
</form>
</body>