<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>لوحة التحكم - @yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{ asset('assets/backend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/backend/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('assets/backend/css/style-metronic-rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/backend/css/style-rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/backend/css/style-responsive-rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/backend/css/plugins-rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/backend/css/themes/light-rtl.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('assets/backend/css/custom-rtl.css') }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="/../admin">
			<img src="{{ asset('assets/backend/img/logo.png') }}" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="{{ asset('assets/backend/img/menu-toggler.png') }}" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="بحث..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start {{ HTML::isActive('backend.dash') }} ">
					<a href="/../">
						<i class="fa fa-home"></i>
						<span class="title">
							الصفحة الرئيسية
						</span>
						{{ HTML::isActive('backend.dash',true) }}
					</a>
				</li>
				<li class="{{ HTML::isActive('backend.pages') }} ">
					<a href="javascript:;">
						<i class="fa fa-files-o"></i>
						<span class="title">
							الصفحات
						</span>
						{{ HTML::isActive('backend.pages',true) }}
						<span class="arrow open">
					</a>
					<ul class="sub-menu">
						<li class="{{ HTML::isActive('backend.pages.index') }}">
							<a href="/../admin/pages">
								جميع الصفحات
							</a>
						</li>
						<li class="{{ HTML::isActive('backend.pages.create') }}">
							<a href="/../admin/pages/create">
								صفحة جديدة
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		جميع الحقوق محفوظة لشبكة سوداكتف &copy; 2014 
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
   <script src="{{ asset('assets/backend/plugins/respond.min.js') }}"></script>
   <script src="{{ asset('assets/backend/plugins/excanvas.min.js') }}"></script> 
   <![endif]-->
<script src="{{ asset('assets/backend/plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('assets/backend/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{ asset('assets/backend/scripts/core/app.js') }}"></script>
<script>
      jQuery(document).ready(function() {    
         App.init();
      });
   </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>