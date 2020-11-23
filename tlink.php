<?
		$method = $_POST["method"];
		$time_id= $_POST['time_id'];
		$date1= $_POST['date1'];
		$date2= $_POST['date2'];
		$time1= $_POST['time1'];
		$time2= $_POST['time2'];

		$link=mysql_connect("localhost", "root", "12345");
		mysql_select_db("reservation", $link);
		mysql_query("SET NAMES 'utf8'", $link);
		
		if ($method=="update"){
			$sql = "update retime set date1='$date1', date2='$date2', time1='$time1', time2='$time2' where time_id = '1'";
			if(mysql_query($sql, $link)){
				header('location:time.php');
			}
		}
		mysql_close($link);
?>