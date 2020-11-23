<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>教室預借系統</title>

		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Custom styles for this template -->
		<link href="css/coming-soon.min.css" rel="stylesheet">

	</head>

	<body>
	<style>
		body{
		margin:0px;
		padding:0px;
		background:url('niceadmin/img/bg-2.jpg') center center fixed no-repeat;
		background-size: cover;
		}   
	</style>

		<div class="overlay"></div>

		<div class="masthead">
			<div class="masthead-bg"></div>
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 my-auto">
						<div class="masthead-content text-white py-5 py-md-0">

							<?
								session_start();

								$link=mysql_connect("localhost", "root", "12345");

								if (!$link) {
									echo "Not Connect MySQL!";
								}
								mysql_query("SET NAMES 'utf8'", $link);
								mysql_select_db("reservation", $link);


								// 主程式
								if ($_SERVER['REQUEST_METHOD'] == 'POST') {
									$account = $_POST['account'];
									$password = $_POST['password'];
									if ($errors = validate_form($account, $password)) {
										show_form($errors);
									}
									else {
										process_form($account);
									}
								}
								else {
									show_form();
								}


								// 顯示表單
								function show_form($errors='') {
									if ($errors) {
										echo "<ul><li>";
										echo implode('</li><li>', $errors);
										echo "</li></ul>";
									}

									if ($_SERVER['REQUEST_METHOD'] == 'POST') {
										$default = $_POST;
									}
									else {
										$default = ['account'=>'', 'password'=>''];
									}
									
									echo "<form method='post' action=$_SERVER[PHP_SELF]>";
									
								}
								?>

								<h2 class="mb-3">Room Reservation System</h2>
								<h3 class="mb-4"><strong>歡迎使用預借系統</strong><h6>請輸入您的帳號密碼登入</h6></h3>
																		
								<div class="input-group input-group-newsletter">
									<input type="text" name="account" class="form-control" placeholder="帳號..." aria-describedby="basic-addon" required>
								</div>
								<br>
								<div class="input-group input-group-newsletter">
									<input type="password" name="password" class="form-control" placeholder="密碼..." aria-describedby="basic-addon" required>
								</div>
								<br>
								<div class="input-group-append">
									<button class="btn btn-secondary" type="submit">登入</button>
								</div>

								<?
								echo "</form>";
								// 檢驗帳號密碼正確性
								function validate_form($account, $password) {
								  $errors = array();
								  $pass_ok = false;
								  $sql = "SELECT * FROM tacc WHERE account = '$account' and password='$password'";
								  if ($result = mysql_query($sql)) {
									while ($row = mysql_fetch_array($result)) {
									  if ($password === $row['password']) {
										$pass_ok = true;
									  }
									}
								  }
								  if (!$pass_ok) {
									$errors[] = "<h6><font color='red'>帳號密碼錯誤</font></h6><h6><font color='red'>請重新輸入帳號密碼</font></h6>";
								  }
								  return $errors;
								}


								// 加入帳號到 SESSION 中
								function process_form($account) {
								  $_SESSION['account'] = $account;
								  header('location:index.php');
								}

							?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="social-icons">
			<ul class="list-unstyled text-center mb-0">
				<li class="list-unstyled-item">
					<a href="http://www.management.fju.edu.tw/_chinese/10_contact/00_contact.php">
						<img src="icon/chat.png">
					</a>
				</li>
				<li class="list-unstyled-item">
					<a href="http://www.management.fju.edu.tw/index.php">
						<img src="icon/university.png"></i>
					</a>
				</li>
			</ul>
		</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
