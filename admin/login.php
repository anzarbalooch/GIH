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
	<style>input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}</style>
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
			
			<!-- Menu Body -->
             <li class="user-body">
                <div class="row no-gutters">
                  
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
	
	
	
	
	
		</ul>
    </section>
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Registration</h1>
</section>
<!-- Main content -->
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border bg-success">
	<h3 class="box-title">New Account Signup</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<div class="row">
		<div class="col">
			<form novalidate action="" method="post">
				<div class="form-group">
					<h5>Society ID <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="s_id" class="form-control" required data-validation-required-message="Enter your full name"> </div>
					<div class="form-control-feedback"><small>The name should match your legal identity proofs.</small></div>
				</div>
			<div class="form-group">
					<h5>Full Name <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="s_name" class="form-control" required data-validation-required-message="Enter your full name"> </div>
					<div class="form-control-feedback"><small>The name should match your legal identity proofs.</small></div>
				</div>
				<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="s_email" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Please enter your email address" data-validation-regex-message="Enter a valid email address">
					</div>
					<div class="form-control-feedback"><small>We hate spam as much as you do.</small></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Phone <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="number" name="s_phone" class="form-control" data-validation-regex-regex="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" required data-validation-required-message="Enter your mobile number" data-validation-regex-message="Enter a valid Indian phone number"> </div>
				</div>
			</div>
		</div>
				<div class="col-md-6">
				<div class="form-group">
					<h5>Route No <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="route_id" id="route_id" required class="form-control">
							<option value="">Select Your Route No</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
						</select>
					</div>
				</div>
			</div>
		<div class="row">
			<div class="col-md-8">		
				<div class="form-group">
					<h5>Address &amp; <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="s_address" class="form-control" required data-validation-required-message="Enter your House Number, Floor, Appartment name"> </div>
				</div>
			</div>
			
			
		</div>
		
		<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h5>Average Production<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="number" name="s_avg" class="form-control" required data-validation-required-message="Enter your average production"> </div>
					</div>
				</div>
		</div>
				<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<h5>New Password <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="password" name="s_password" class="form-control" required data-validation-required-message="Enter a secure password" pattern="^(?=[\040-\176]*?[A-Z])(?=[\040-\176]*?[a-z])(?=[\040-\176]*?[0-9])(?=[\040-\176]*?[#?!@$%^&*-])[\040-\176]{8,72}$"></div>
						<div class="form-control-feedback"><small>Password should contain atleast one uppercase letter, one lowercase letter, one number, one symbol and should be 8 - 72 characters long.</small></div>
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

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="pull-right d-none d-sm-inline-block">
</div> &copy; 2019 Milky Way. All Rights Reserved.
</footer>
</div>
<!-- ./wrapper -->
<script src="../assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>
<script src="../assets/assets/vendor_components/popper/dist/popper.min.js"></script>
<script src="../assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
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
</body>

</html>
