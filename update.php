<?
	//$method="update";
	$tacc_id = $_GET['tacc_id'];

	$link=mysql_connect("localhost", "root", "12345");
	mysql_select_db("reservation", $link);
	mysql_query("SET NAMES 'utf8'", $link);

	$sql = "select * from tacc where tacc_id='$tacc_id'";
	$rs = mysql_query($sql, $link);
	if($record=mysql_fetch_row($rs)){
			$account= $record[1];
			$password= $record[2];
			$manager= $record[3];
		}

	mysql_close($link);
?>

 <center>
	<form method="POST" action="dblink.php">
		<input type=hidden name="method" value="<? echo $method ?>">
		<table class="table table-striped" width="40%">
			<tr>
				<td>編號</td>
				<td><font color="red"><? echo $tacc_id ?></font><input type=hidden name="tacc_id" value="<? echo $tacc_id ?>"></td>
			</tr>
			<tr>
				<td>帳號</td>
				<td><input type=text name="account" value="<? echo $account ?>" placeholder="帳號" required></td>
			</tr>
			<tr>
				<td>密碼</td>
				<td><input type=text name="password" value="<? echo $password ?>" placeholder="密碼" required></td>
			</tr>
			<tr>
				<td>管理者</td>
				<td><input type=text name="manager" value="<? echo $manager ?>" placeholder="若為管理者則標註 M "></td>
			</tr>
			<tr align=center>
				<td colspan="2">
					<button class="btn btn-primary" type="submit">修改</button>
				</td>
			</tr>
		</table>
	</form>
  
 </center>
