<?
	session_start();
	if (isset($_SESSION['account'])){
	?>
	<li><a href="logout.php"><? echo $_SESSION['account'], "您好" ?>，登出</a></li>
	<?
	}
	else
	{
	?>
	<li><a href="borrowlogin.php">登入</a></li>
	<?
	}
?>