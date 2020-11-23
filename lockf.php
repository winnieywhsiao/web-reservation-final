<?	
	$link=mysql_connect("localhost", "root", "12345");
	mysql_select_db("reservation", $link);
	mysql_query("SET NAMES 'utf8'", $link);

	$sqld1= "select date1 from retime";
	$d1=mysql_query($sqld1, $link);
		if($record=mysql_fetch_row($d1)){
			$date1= $record[0];
		}

	$sqld2= "select date2 from retime";
	$d2=mysql_query($sqld2, $link);
		if($record=mysql_fetch_row($d2)){
			$date2= $record[0];
		}

	$sqlt1= "select time1 from retime";
	$t1=mysql_query($sqlt1, $link);
		if($record=mysql_fetch_row($t1)){
			$time1= $record[0];
		}

	$sqlt2= "select time2 from retime";
	$t2=mysql_query($sqlt2, $link);
		if($record=mysql_fetch_row($t2)){
			$time2= $record[0];
		}
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../sample.css">
 </head>
 <body>
	<p></p>
	<center>
		<div class="card bg-danger text-white" style="width: 40rem;">
			
			<div class="card-body">
				<h5 class="card-title">不在學期預借的時間內</h5>
				<p class="card-text">請在 <? echo $date1 ?> ~ <? echo $date2 ?> 的 <? echo $time1 ?> ~ <? echo $time2 ?> 進行登記</p>
				<a href="index.php" class="btn btn-primary">回首頁</a>
			</div>
		</div>
	</center>
 </body>
</html>
