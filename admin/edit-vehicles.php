<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../assets/images/favicon.ico">
<title>Admin Panel | Milky Way</title>
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="../assets/ser/css/master_style.css">
<link rel="stylesheet" href="../assets/ser/css/skins/_all-skins.css">
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
<script>
var random_images_array = ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png', 'avatar12.png', 'avatar13.png', 'avatar14.png', 'avatar15.png', 'avatar16.png', 'avatar17.png', 'avatar18.png', 'avatar19.png', 'avatar20.png', 'avatar21.png', 'avatar22.png', 'avatar23.png', 'avatar24.png', 'avatar25.png', 'avatar26.png', 'avatar27.png', 'avatar28.png', 'avatar29.png', 'avatar30.png', 'avatar31.png', 'avatar32.png', 'avatar33.png', 'avatar34.png', 'avatar35.png', 'avatar36.png', 'avatar37.png', 'avatar38.png', 'avatar39.png', 'avatar40.png', 'avatar41.png', 'avatar42.png', 'avatar43.png', 'avatar44.png'];

function getRandomImage(imgAr, path) {
path = path || '../assets/images/avatar/';
var num = Math.floor(Math.random() * imgAr.length);
var img = imgAr[num];
var imgStr = '<img src="' + path + img + '" alt = "Profile Icon" class="user-image rounded-circle">';
document.write(imgStr);
document.close();
}

</script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
<!-- Logo -->
<a href="index.php" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels --><b class="logo-mini"> <span class="light-logo"><img src="../assets/images/aries-light.png" alt="logo"></span> <span class="dark-logo"><img src="../assets/images/aries-dark.png" alt="logo"></span> </b>
<!-- logo for regular state and mobile devices --><span class="logo-lg"> <img src="../assets/images/logo-light-text.png" alt="logo" class="light-logo"> <img src="../assets/images/logo-dark-text.png" alt="logo" class="dark-logo"> </span> </a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
	<li class="search-box"> <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
		<form class="app-search" style="display: none;">
			<input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
	</li>
	<li class="dropdown user user-menu">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<script>
				getRandomImage(random_images_array, '../assets/images/avatar/')

			</script>
		</a>
		<ul class="dropdown-menu scale-up">
			<!-- User image -->
			<li class="user-header">
				<div class="col-12">
					<p>Name</p>
                  <p>Email</p>
				</div>
				<div class="col-12"> <a href="wallet.php" class="btn btn-success btn-sm btn-rounded">My Wallet</a> </div>
			</li>
			<!-- Menu Body -->
             <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
					  <a href="settings.php"><i class="ion ion-person"></i> Settings</a>
                  </div>
        <div role="separator" class="divider col-12"></div>
          <div class="col-12 text-left">
                    <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                  </div>        
                </div>
      			</li>
		</ul>
	</li>
</ul>
</div>
</nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
	<li>
		<a href="index.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Vehicles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-vehicles.php">View</a></li>
            <li class="active"><a href="edit-vehicles.php">Edit</a></li>
          </ul>
        </li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Drivers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-drivers.php">View</a></li>
            <li><a href="edit-drivers.php">Edit</a></li>
          </ul>
        </li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Society</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-society.php">View</a></li>
            <li><a href="edit-society.php">Edit</a></li>
          </ul>
        </li>
	<li>
		<a href="view-bmc.php"><i class="fa fa-industry"></i> BMCs</a></li>
		</ul>
    </section>
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Vehicles</h1>
</section>
<!-- Main content -->
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border bg-success">
	<h3 class="box-title">Add New Vehicle</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<div class="row">
		<div class="col">
			<form novalidate action="" method="post">
				<div class="form-group">
					<h5>Vehicle Number <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="vehicle_no" class="form-control" data-validation-regex-regex="(([A-Za-z]){2,3}(|-)(?:[0-9]){1,2}(|-)(?:[A-Za-z]){2}(|-)([0-9]){1,4})|(([A-Za-z]){2,3}(|-)([0-9]){1,4})" required data-validation-required-message="Please enter your vehicle's registered licence number" data-validation-regex-message="Enter a valid vehicle registration number"> </div>
				</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h5>Vehicle Model <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="vehicle_model" id="vehicle_model" required class="form-control">
							<option value="">Select Your State</option>
							<option value="1">Chota Hathi</option>
							<option value="2">Max Pick</option>
							<option value="3">Milk Container</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
					<h5>Vehicle Purchase Date <span class="text-danger">*</span></h5>
					<div class="input-group date">
           <input type="text" class="form-control" id="vehicle_purchase_date" name="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
					<span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h5>Storage Capacity<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="number" name="vehicle_capacity" class="form-control" required data-validation-required-message="Only digits are allowed here"> </div>
						<div class="form-control-feedback"><small>Enter storage capacity of the vehicle in Litres only.</small></div>
					</div>
				</div>
			<div class="col-md-6">
				<div class="form-group">
						<h5>Fuel Economy<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="number" name="vehicle_mileage" class="form-control" required data-validation-required-message="Only digits are allowed here"> </div>
						<div class="form-control-feedback"><small>Enter fuel economy of the vehicle in Km/L</small></div>
					</div>
			</div>
		</div>
						<div class="text-xs-right">
					<button type="submit" class="btn bg-success">Add</button>
				</div>
			</form>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<!-- /.box-body -->
	</div>
	</section>

	<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border bg-danger">
	<h3 class="box-title">Remove Any Vehicle</h3>
</div>
	<div class="box-body">
	<div class="row">
		<div class="col">
			<form novalidate action="" method="post">
				<div class="form-group">
					<h5>Vehicle Number <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="vehicle_no" class="form-control" data-validation-regex-regex="(([A-Za-z]){2,3}(|-)(?:[0-9]){1,2}(|-)(?:[A-Za-z]){2}(|-)([0-9]){1,4})|(([A-Za-z]){2,3}(|-)([0-9]){1,4})" required data-validation-required-message="Please enter your vehicle's registered licence number" data-validation-regex-message="Enter a valid vehicle registration number"> </div>
				</div>
						<div class="text-xs-right">
					<button type="submit" class="btn bg-danger">Remove</button>
				</div>
			</form>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="pull-right d-none d-sm-inline-block">
<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
<li class="nav-item"> <a class="nav-link" href="https://www.swagatdash.com/" target="_blank" style="display:none;">♥</a> </li>
<li class="nav-item"> <a class="nav-link" href="javascript:void(0)">FAQ</a> </li>
</ul>
</div> &copy; 2019 Milky Way. All Rights Reserved.
</footer>
</div>
<!-- ./wrapper -->
<script src="../assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>
<script src="../assets/assets/vendor_components/popper/dist/popper.min.js"></script>
<script src="../assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
<script src="../assets/ser/js/template.js"></script>
<script src="../assets/ser/js/demo.js"></script>
<script src="../assets/ser/js/pages/validation.js"></script>
<script>
! function(window, document, $) {
"use strict";
$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
}(window, document, jQuery);
</script>
	<script>
    $(function () {
    "use strict";
    $('#vehicle_purchase_date').datepicker({
    autoclose: true,
    todayHighlight: true
    });
  });</script>
</body>

</html>
