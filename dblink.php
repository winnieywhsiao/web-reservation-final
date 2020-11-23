<?
		$method = $_POST['method'];
		$tacc_id= $_POST['tacc_id'];
		$account= $_POST['account'];
		$password= $_POST['password'];
		$manager= $_POST['manager'];

		$link=mysql_connect("localhost", "root", "12345");
		mysql_select_db("reservation", $link);
		mysql_query("SET NAMES 'utf8'", $link);
		
		if($method=="insert"){
			$sql = "insert into tacc (account, password, manager) values ('$account', '$password', '$manager')";
			if(mysql_query($sql, $link)){
				header('location:manager.php?method=message&message=新增成功');
			}
		}
		else{
			$sql = "update tacc set account='$account', password='$password', manager='$manager' where tacc_id = '$tacc_id'";
			if(mysql_query($sql, $link)){
				header('location:manager.php?method=message&message=修改成功');
			}
		}
		mysql_close($link);
?>