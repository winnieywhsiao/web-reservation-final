<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		
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
						
						<a class="dropdown-item" href="borrowlogin.html" data-toggle="modal" data-target="#logoutModal">Logout</a>
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
			<li class="nav-item dropdown">
				<a class="nav-link" href="index.php">
					<i class="fas fa-fw fa-folder"></i>
					<span>預約教室</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="reservation.php">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>預約紀錄</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="mlogin.php">
					<i class="fas fa-fw fa-table"></i>
					<span>帳號管理</span>
				</a>
			</li>
		</ul>

		<div id="content-wrapper">

			<div class="container-fluid">

			<!-- DataTables Example -->
			<div class="card mb-3">
				<div class="card-header">
					<i class="fas fa-table"></i>
					預約紀錄</div>
				<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>預借人</th>
								<th>教室</th>
								<th>時間</th>
								<th>日期</th>
								<th>預借形式</th>
								<th>用途</th>
								<th>取消預借</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>預借人</th>
								<th>教室</th>
								<th>時間</th>
								<th>日期</th>
								<th>預借形式</th>
								<th>用途</th>
								<th>取消預借</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2011/04/25</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2011/07/25</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>LM201</td>
								<td>D0~D2</td>
								<td>2009/01/12</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>LM301</td>
								<td>D0~D2</td>
								<td>2012/03/29</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>LM301</td>
								<td>D0~D2</td>
								<td>2008/11/28</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td>LM104</td>
								<td>D0~D2</td>
								<td>2012/12/02</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td>LM202</td>
								<td>D0~D2</td>
								<td>2012/08/06</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td>LM202</td>
								<td>D0~D2</td>
								<td>2010/10/14</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2009/09/15</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td>LM302</td>
								<td>D0~D2</td>
								<td>2008/12/13</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2008/12/19</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2013/03/03</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2008/10/16</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2012/12/18</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2010/03/17</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td>LM202</td>
								<td>D0~D2</td>
								<td>2012/11/27</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2010/06/09</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2011/09/03</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2009/06/25</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2011/12/12</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td>LM302</td>
								<td>D0~D2</td>
								<td>2010/09/20</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2009/10/09</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td>LM101</td>
								<td>D0~D2</td>
								<td>2010/12/22</td>
								<td>平時預借</td>
								<td>&nbsp;</td>
								<td><button type="button" class="btn btn-primary" name="cancel">取消</button></td>
							</tr>							
						</tbody>
					</table>
				</div>
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

