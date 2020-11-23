<?
	$link=mysql_connect("localhost", "root", "12345");
	mysql_select_db("reservation", $link);
	mysql_query("SET NAMES 'utf8'", $link);

	$sqlid= "select time_id from retime";
	$rsid=mysql_query($sqlid, $link);
		if($record=mysql_fetch_row($rsid)){
			$time_id= $record[0];
		}

	$sql = "select * from retime where time_id='$time_id'";
	$rs = mysql_query($sql, $link);
	if($record=mysql_fetch_row($rs)){
			$date1= $record[1];
			$date2= $record[2];
			$time1= $record[3];
			$time2= $record[4];
		}

	mysql_close($link);
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

		<script type="text/javascript">
			function show_confirm()
			{
			var r=confirm("已完成時間區間設定");
			}
		</script>
		
		<title>教室預借系統</title>

		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!-- Bootstrap core CSS-->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Page level plugin CSS-->
		<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="css/sb-admin.css" rel="stylesheet">

	</head>
	
	<body id="page-top">

		<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

			<a class="navbar-brand" href="index.php">FJU</a>

			<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
				<i class="fas fa-bars"></i>
			</button>

			<!-- Navbar Search -->
			<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
				<div class="input-group"></div>
			</form>

			<!-- Navbar -->
			<ul class="navbar-nav ml-auto ml-md-0"><p></p>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-circle fa-fw"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						
						<a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
					</div>
				</li>
			</ul>
		</nav>

		<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>home</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="manager.php">
					<i class="fas fa-fw fa-table"></i>
					<span>帳號管理</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="time.php">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>設定學期區間</span>
				</a>
			</li>
		</ul>

		<div id="content-wrapper">

			<div class="container-fluid">

			<!-- DataTables Example -->
			<div class="card mb-3">
				<div class="card-header">
					<i class="fas fa-table"></i>
					學期區間
				</div>
				<div class="card-body">
				<div class="table-responsive">
					<form method=post action="tlink.php">
						<input type=hidden name="method" value="update">
						<center>
							日期：
							<input type="date" name="date1" value="<? echo $date1 ?>" required>
							&nbsp;~&nbsp;
							<input type="date" name="date2" value="<? echo $date2 ?>" required>
							<p></p>
							時間：
							<input type="time" name="time1" value="<? echo $time1 ?>" required>
							&nbsp;~&nbsp;
							<input type="time" name="time2" value="<? echo $time2 ?>" required>
							<p></p>
							<?
							echo "<button type='submit' class='btn btn-primary' onclick=\"location.href='time.php?method=update&time_id=$record[0]'\">更新</button>"
							?>
						</center>
					</form>
				</div>
				<br>
				
				</div>
				<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; 2018. College of Management, Fu Jen Catholic University</span>
					</div>
				</div>
			</footer>
		</div>
		<!-- /.content-wrapper -->
		
	</div>
    <!-- /#wrapper -->

	

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are you sure to logout?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="borrowlogin.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>