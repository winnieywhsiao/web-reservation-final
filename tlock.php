<?	
	date_default_timezone_set('Asia/Taipei');
	$date = date ("Y-m-d"); 
	$time = date ("H:i:s");
	//echo $date, "<br>";
	//echo $time, "<br>";

	$link=mysql_connect("localhost", "root", "12345");
	mysql_select_db("reservation", $link);
	mysql_query("SET NAMES 'utf8'", $link);

	$sqld1= "select date1 from retime";
	$d1=mysql_query($sqld1, $link);
		if($record=mysql_fetch_row($d1)){
			$date1= $record[0];
		}
	//echo $date1, "<br>";

	$sqld2= "select date2 from retime";
	$d2=mysql_query($sqld2, $link);
		if($record=mysql_fetch_row($d2)){
			$date2= $record[0];
		}
	//echo $date2, "<br>";

	$sqlt1= "select time1 from retime";
	$t1=mysql_query($sqlt1, $link);
		if($record=mysql_fetch_row($t1)){
			$time1= $record[0];
		}
	//echo $time1, "<br>";

	$sqlt2= "select time2 from retime";
	$t2=mysql_query($sqlt2, $link);
		if($record=mysql_fetch_row($t2)){
			$time2= $record[0];
		}
	//echo $time2, "<br>";

		if($date<$date1 || $date>$date2 || $time<$time1 || $time>$time2){
				$url = "lockf.php";
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>"; 
		}
		else{
			//echo "可以預借";
			if (isset($_POST['class'])){
				$sql="select class_id from class where class='$_POST[class]'";

				$class = $_POST['class'];
				$useway = $_POST['useway'];

				$link=mysql_connect("localhost", "root", "12345");
				mysql_select_db("reservation", $link);
				mysql_query("SET NAMES 'utf8'", $link);

				$sql2 = "insert into class (class, useway) values ('$class', '$useway')";
				mysql_query($sql2);
				mysql_close($link);
			}

			$link=mysql_connect("localhost", "root", "12345");
				mysql_select_db("reservation", $link);
				mysql_query("SET NAMES 'utf8'", $link);

				if (isset($_POST['type'])){
					$sqlc="select * from class where class='$_POST[class]' and useway='$_POST[useway]'";
					$rsc=mysql_query($sqlc, $link);
					if($record=mysql_fetch_row($rsc)){
						$class_id= $record[0];
					}

					$sqlt= "select tacc_id from tacc where account='$_SESSION[account]'";
					$rst=mysql_query($sqlt, $link);
					if($record=mysql_fetch_row($rst)){
						$tacc_id= $record[0];
					}

					$type = $_POST['type'];
					$sdate = $_POST['sdate'];
					$edate = $_POST['edate'];
					$stime = $_POST['stime'];
					$etime = $_POST['etime'];

					$sql1 = "insert into information (sdate, edate, stime, etime, type, class_id, tacc_id) values ('$sdate', '$edate', '$stime', '$etime', '$type', '$class_id', '$tacc_id')";
					mysql_query($sql1);
					mysql_close($link);
				}

		}
	
	
	
	
?>