  <?
	$tacc_id= "";
	$account= "";
	$password= "";
	$manager= "";
  ?>

 <center>
	<form method="POST" action="dblink.php">
		<input type=hidden name="method" value="<? echo $method ?>">
		<table class="table table-striped" width="40%">
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
					<button class="btn btn-primary" type="submit">新增</button>
				</td>
			</tr>
		</table>
	</form>
  
 </center>
