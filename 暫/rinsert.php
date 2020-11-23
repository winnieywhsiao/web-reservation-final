<?
	$i_id= "";
	$type = "";
	$sdate = "";
	$edate = "";
	$stime = "";
	$etime = "";
	$class = "";
	$useway = "";
?>
<form method="post" action="rdblink.php">
	<input type=hidden name="method" value="<? echo $method ?>">
	<div class="works-content">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="single-how-works">
					<div class="single-how-works-icon">
						<img src="icon/type.png">
					</div>
					<h2>預借形式</h2>
					<p></p>
					<select name="type" >
						<option value ="null">&nbsp;</option>
						<option value ="type1">平時預借(30天內)</option>
						<option value ="type2">學期預借</option>
					</select>
					<br>
					<label for="bookdate">日期：</label><br>
					<input type="date" name="sdate" value="<? echo $sdate ?>" placeholder="2018-10-27"><br>
					至<br>
					<input type="date" name="edate" value="<? echo $edate ?>" placeholder="2018-10-27">
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="single-how-works">
					<div class="single-how-works-icon">
						<img src="icon/classroom.png">
					</div>
					<h2>教室</h2>
					<p></p>
					<select name="class">
						<option value ="null">&nbsp;</option>
						<option value ="LM103">LM103</option>
						<option value ="LM203">LM203</option>
						<option value ="LM303">LM303</option>
						<option value ="LM403">LM403</option>
						<option value ="LM503">LM503</option>
					</select>
					<p></p>
					<label>用途:&nbsp;<label>
					<input type="text" name="useway" value="<? echo $useway ?>">
					<p></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-5">
				<div class="single-how-works">
					<div class="single-how-works-icon">
						<img src="icon/time.png">
					</div>
					<h2>時間</h2>
					<p></p>
					<select name="stime">
						<option value ="D0">D0 07:10~08:00</option>
						<option value ="D1">D1 08:10~09:00</option>
						<option value ="D2">D2 09:10~10:00</option>
						<option value ="D3">D3 10:10~11:00</option>
						<option value ="D4">D4 11:10~12:00</option>
						<option value ="DN">DN 12:40~13:30</option>
						<option value ="D5">D5 13:40~14:30</option>
						<option value ="D6">D6 14:40~15:30</option>
						<option value ="D7">D7 15:40~16:30</option>
						<option value ="D8">D8 16:40~17:30</option>
						<option value ="E0">E0 17:40~18:30</option>
					</select>
					<p></p>
					<h6> 至 </h6>
					<br>
					<select name="etime">
						<option value ="D0">D0 07:10~08:00</option>
						<option value ="D1">D1 08:10~09:00</option>
						<option value ="D2">D2 09:10~10:00</option>
					    <option value ="D3">D3 10:10~11:00</option>
						<option value ="D4">D4 11:10~12:00</option>
						<option value ="DN">DN 12:40~13:30</option>
						<option value ="D5">D5 13:40~14:30</option>
						<option value ="D6">D6 14:40~15:30</option>
						<option value ="D7">D7 15:40~16:30</option>
						<option value ="D8">D8 16:40~17:30</option>
						<option value ="E0">E0 17:40~18:30</option>
					</select>
				</div>
			</div>
		</div>
	<center>
		<button type="submit" class="btn btn-primary" name="submit" onclick="show_confirm()" onclick="location.href='manager.php?method=insert' value="送出">送出</button>
	</center>
	</div><!--/.container-->
</form>