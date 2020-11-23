<?
	$searchtxt = $_GET["searchtxt"];
?>
	<form action="manager.php" method=get>
		<input type=hidden name="method" value="query">
		<p align=center><input type=text name="searchtxt" value=<? echo $searchtxt ?>>&nbsp;&nbsp;<button class="btn btn-primary" type=submit>查詢</button>
			<button type="button" class="btn btn-primary" onclick="location.href='manager.php?method=insert'">新增帳號</button>
		</p>
	</form>
	<div class="table-responsive">
		<table class="table table-hover" width="50%">
			<tr class="warning"><td>編號</td><td>帳號</td><td>密碼</td><td>管理者</td><td>修改/刪除</td></tr>

		<?
			$link=mysql_connect("localhost", "root", "12345");
			mysql_select_db("reservation", $link);
			mysql_query("SET NAMES 'utf8'", $link);
			if(empty($searchtxt)){
				$sql="select * from tacc";
			}
			else{
				$sql="select * from tacc where tacc_id like '%$searchtxt%' or account like '%$searchtxt%'";
			}
			$rs=mysql_query($sql, $link);

			while($record=mysql_fetch_row($rs)){
				echo "<tr>";
					for($i=0; $i<count($record);$i++){
						echo "<td> $record[$i]</td>";
					}
				echo "<td><div class='btn-group'>
							<button type='button' class='btn btn-primary' onclick=\"location.href='manager.php?method=update&tacc_id=$record[0]'\">修改</button>
							<button type='button' class='btn btn-danger' onclick=\"location.href='manager.php?method=delete&tacc_id=$record[0]'\">刪除</button>
							</div>
						</td>";
				echo "</tr>";
			}

			mysql_close($link);
		?>
		</table>
	</div>