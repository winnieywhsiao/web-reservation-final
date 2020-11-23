<?
	$searchtxt = $_GET["searchtxt"];
?>
	<form action="reservation.php" method=get>
		<input type=hidden name="method" value="query">
		<p align=center><input type=text name="searchtxt" value=<? echo $searchtxt ?>>&nbsp;&nbsp;<button class="btn btn-primary" type=submit>查詢</button></p>
	</form>
	<div class="table-responsive">
		<table class="table table-hover" width="50%">
			<tr class="warning">
				<td>編號</td><td>預借人</td><td>開始日期</td><td>結束日期</td><td>開始時間</td><td>結束時間</td><td>預借形式</td><td>教室</td><td>用途</td><td>取消預借</td>
			</tr>

		<?
			$link=mysql_connect("localhost", "root", "12345");
			mysql_select_db("reservation", $link);
			mysql_query("SET NAMES 'utf8'", $link);
			if(empty($searchtxt)){
				$sql="select i_id, account, sdate, edate, stime, etime, type, class, useway from information i, tacc t, class c where i.tacc_id=t.tacc_id and i.class_id=c.class_id ORDER BY i_id";
			}
			else{
				$sql="select i_id, account, sdate, edate, stime, etime, type, class, useway from information i, tacc t, class c where (i.tacc_id=t.tacc_id and i.class_id=c.class_id) and (account like '%$searchtxt%' or sdate like '%$searchtxt%' or edate like '%$searchtxt%' or type like '%$searchtxt%' or class like '%$searchtxt%')";
			}
			$rs=mysql_query($sql, $link);

			while($record=mysql_fetch_row($rs)){
				echo "<tr>";
					for($i=0; $i<count($record);$i++){
						echo "<td> $record[$i]</td>";
					}
				echo "<td>
						<button type='button' class='btn btn-primary' onclick=\"location.href='reservation.php?method=delete&i_id=$record[0]'\">取消</button>
					  </td>";
				echo "</tr>";
			}

			mysql_close($link);
		?>
		</table>
	</div>