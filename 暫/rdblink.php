<!--<?
		$method = $_POST['method'];
		$i_id= $_POST['i_id'];

		$type = $_POST['type'];
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$stime = $_POST['stime'];
		$etime = $_POST['etime'];

		$link=mysql_connect("localhost", "root", "12345");
		mysql_select_db("reservation", $link);
		mysql_query("SET NAMES 'utf8'", $link);
		
		if($method=="insert"){
			$sql = "insert into information (sdate, edate, stime, etime, type) values ('$sdate', '$edate', '$stime', '$etime', '$type') ";
			if(mysql_query($sql, $link)){
				header('location:reservation.php?method=message&message=新增成功');
			}
		}
		mysql_close($link);
?>-->
<?
		$method = $_POST['method'];
		$class_id= $_POST['class_id'];

		$class = $_POST['class'];
		$useway = $_POST['useway'];

		$link=mysql_connect("localhost", "root", "12345");
		mysql_select_db("reservation", $link);
		mysql_query("SET NAMES 'utf8'", $link);
		
		if($method=="insert"){
			$sql = "insert into class (class, useway) values ('$class', '$useway')";
			if(mysql_query($sql, $link)){
				header('location:reservation.php?method=message&message=新增成功');
			}
		}
		mysql_close($link);
?>