<?
	$method = $_POST['method'];
	//$method="update";
	$i_id = $_GET['i_id'];

	$link=mysql_connect("localhost", "root", "12345");
	mysql_select_db("reservation", $link);
	mysql_query("SET NAMES 'utf8'", $link);

	$sql = "delete from information where i_id='$i_id'";
	mysql_query($sql, $link);

	mysql_close($link);
?>
<table class="table table-hover">
	<tr>
		<td bgcolor=white align=center height=1></td>
	</tr>
	<tr>
		<td bgcolor=white align=center height=150>
			<p align=center><font size="3" color="#ff0000">取消成功</font></p>
		</td>
	</tr>
	<tr>
		<td bgcolor=white align=center height=1></td>
	</tr>
	<tr>
		<td align=center bgcolor="#c6d7e7">
			<a href="reservation.php?method=query">回帳號管理</a>
		</td>
	</tr>
</table>