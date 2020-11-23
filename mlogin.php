<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  
  <title>教室預借系統</title>
  <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

  <!-- Bootstrap CSS -->
  <link href="niceadmin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="niceadmin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="niceadmin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="niceadmin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="niceadmin/css/style.css" rel="stylesheet">
  <link href="niceadmin/css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-img3-body">

  <div class="container">

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
			$manager = $_POST['manager'];
			if ($errors = validate_form($account, $password, $manager)) {
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
			echo "<form class='login-form' method='post' action=$_SERVER[PHP_SELF]>";
		}
	?>
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
		<h3 align="center">管理者登入</h3>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="account" class="form-control" placeholder="帳號..." required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="密碼..." required>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>

	  <?
		echo "</form>";
		// 檢驗帳號密碼正確性
		function validate_form($account, $password, $manager) {
			$errors = array();
			$pass_ok = false;
			$sql = "SELECT * FROM tacc WHERE account = '$account' and password='$password' and manager='M'";
			if ($result = mysql_query($sql)) {
				while ($row = mysql_fetch_array($result)) {
					if ($password === $row['password']) {
						$pass_ok = true;
					}
				}
			}
			if (!$pass_ok) {
				$errors[] = "<h5 align=center><font color='red'>帳號密碼錯誤</font></h5><h5 align=center><font color='red'>請重新輸入帳號密碼</font></h5>";
			}
			return $errors;
		}

		// 加入帳號到 SESSION 中
		function process_form($account) {
			$_SESSION['account'] = $account;
			header('location:manager.php');
		}

		?>
    </form>
    
  </div>


</body>

</html>
