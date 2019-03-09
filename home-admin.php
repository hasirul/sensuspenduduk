<?php ob_start("ob_gzhandler"); ?>
<?php
include 'koneksi.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<style type="text/css">
		.skin-red .main-header .navbar{
			background-color: #bfebc1 !important;
		}
		.skin-red .main-header .logo{
			background-color: #bfebc1 !important;

		}
		.skin-red .wrapper, .skin-red .main-sidebar, .skin-red .left-side{
			background-color: #e6e6e6 !important;
		}
		.skin-red .sidebar a{
			color: #333 !important;
		}
		.skin-red .sidebar-menu>li.header{
			background-color: #e6e6e6 !important;

		}
		.skin-red .sidebar-menu>li.header:hover{
			color: #fff !important;
			background-color: #333 !important;

		}
		.skin-red .sidebar a:hover{
			color: #fff !important;
		}
		.sidebar-menu > li:hover{
			background-color: #fff !important;
		}
		.skin-red .sidebar-menu>li:hover>a, .skin-red .sidebar-menu>li.active>a{
			background-color: #e6e6e6 !important;
			text-decoration: none;

		}
		.skin-red .sidebar-menu>li:hover>a, .skin-red .sidebar-menu>li.active>a:hover{
			background-color: #333 !important;
			color: #fff !important;
			
		}
		.skin-red .sidebar-menu>li>.treeview-menu{
			background-color: #e6e6e6 !important;

		}
		.sidebar-menu .treeview-menu > li:hover{
			background-color: #333 !important;
		}
		body{
			padding: 0px !important;
		}
		.treeview-menu .dua:hover{
			background: #e6e6e6 !important;
		}
		.treeview-menu li:hover{
			background: #e6e6e6 !important;
			color: #fff !important;
		}
	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DAILY REPORT</title>
	<link href="swal/dist/sweetalert.css" rel="stylesheet" type="text/css"/>
	<script src="swal/dist/sweetalert.min.js"></script>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="dist/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="dist/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="plugins/iCheck/square/blue.css">
	<!-- Morris chart -->
	<!-- jvectormap -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="plugins/datepicker/bootstrap-datetimepicker.min.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css">

	

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<a href="home-admin.php" class="logo"><b><span class="logo-lg"><img src="../../img/tebu.png" style="width:15%;margin-top:5px;margin-bottom:15px;">&nbsp;&nbsp;DAILY REPORT</span></b></a>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src='dist/img/profile/no-image.jpg' class='user-image' alt='User Image'>
							<span class="hidden-xs">DAILY REPORT</span> &nbsp;<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<img src='dist/img/profile/no-image.jpg' class='img-circle' alt='User Image'>
								<p>Welcome - <?php echo $_SESSION['log'] ?></p>
								<p>Divisi - <?php echo $_SESSION['divisi'] ?></p>

							</li>
							<li class="user-body">
								<div class="row">
								</div>
							</li>
							<li class="user-footer">
								<div class="pull-left">
									<?php echo date("d-m-Y");?>
								</div>
								<div class="pull-right">
								  <a href="pages/login/act-logout.php" class="btn btn-default btn-flat">Log out</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li class="treeview"><a href="home-admin.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></i></a></li>
				<li class="treeview"><a href="home-admin.php?page=data_region"><i class="fa fa-book"></i> <span>Data Region</span></a></li>
				<li class="treeview"><a href="home-admin.php?page=data_person"><i class="fa fa-calendar"></i><span>Data Person</span></a></li>
				
				<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Data Penduduk</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						
						<li><a href="home-admin.php?page=semua_daerah"> <i class="fa fa-caret-right"></i>Semua Daerah</a></li>
						<li><a href="home-admin.php?page=nama_daerah"> <i class="fa fa-caret-right"></i>Nama Daerah</a></li>

						
					</ul>
				</li>
			
				<!-- <li class="treeview"><a href="home-admin.php?page=pengguna"><i class="fa fa-users"></i> <span>Tambah Pengguna</span></a></li>

 -->

			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<section class="content">
			<?php
				$page = (isset($_GET['page']))? $_GET['page'] : "main";
				switch ($page) {
					case 'data_region': include "data_region.php"; break;
					case 'data_person': include "data_person.php";break;
					case 'semua_daerah': include "semua_daerah.php"; break;
					case 'nama_daerah': include "nama_daerah.php"; break;
					
				
					default : include 'dashboard.php';	
				}
			?>
		</section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs"><b>Version</b> 1.0</div>
		Copyright &copy; 2019 <a href="#" target="_blank">E-Sensus	</a>. All rights reserved
	</footer>
</div>
	<!-- ./wrapper -->
	<!-- jQuery 2.1.4 -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>


		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.5 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<!-- Sparkline -->
	<!-- jvectormap -->
	<!-- jQuery Knob Chart -->
	<!-- Bootstrap WYSIHTML5 -->
	<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	
<script type="text/javascript" src="jquery.autocomplete.min.js"></script>
</body>
</html>