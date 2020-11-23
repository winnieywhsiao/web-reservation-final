<?
	$link=mysql_connect("localhost", "root", "12345");
	mysql_select_db("reservation", $link);
	mysql_query("SET NAMES 'utf8'", $link);
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$stime = $_POST['stime'];
	$etime = $_POST['etime'];
	
?>
<center>
	<?
		date_default_timezone_set('Asia/Taipei');
		$date = date ("Y-m-d");
		echo $date, "<br>";


	?>
	<table class="table table-striped" width="50%">
		<tr>
			<td>時間/教室</td>
			<td>LM103</td>
			<td>LM203</td>
			<td>LM303</td>
			<td>LM403</td>
			<td>LM503</td>
		</tr>
		<tr>
			<td>D0 07:10~08:00</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
		</tr>
		<tr>
			<td>D1 08:10~09:00</td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
		</tr>
		<tr>
			<td>D2 09:10~10:00</td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
		</tr>
		<tr>
			<td>D3 10:10~11:00</td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
		</tr>
		<tr>
			<td>D4 11:10~12:00</td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
		</tr>
		<tr>
			<td>DN 12:40~13:30</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
		</tr>
		<tr>
			<td>D5 13:40~14:30</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
		</tr>
		<tr>
			<td>D6 14:40~15:30</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
		</tr>
		<tr>
			<td>D7 15:40~16:30</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
		</tr>
		<tr>
			<td>D8 16:40~17:30</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
		</tr>
		<tr>
			<td>E0 17:40~18:30</td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/error.png"></td>
			<td><img src="icon/success.png"></td>
			<td><img src="icon/error.png"></td>
		</tr>
	</table>
	<a href = "JavaScript:void(0)" onclick = "closeDialog()"><font size="3" color="#3399ff">&nbsp;&nbsp;關閉</font></a>
</center>