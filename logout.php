<?
	$_SESSION["account"] = "";
	$_SESSION["password"] = "";
	session_destroy();
	header('location:borrowlogin.php');
?>