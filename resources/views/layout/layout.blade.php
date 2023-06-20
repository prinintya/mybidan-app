
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
		<meta name="Author" content="">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>

        <!-- Title -->
		<title>@yield('title')</title>
        
        <!-- Favicon -->

		<link rel="icon" href="https://laravel.spruko.com/dashfox/ltr/assets/img/brand/favicon.png" type="image/x-icon"/>
		

		<!-- Bootstrap css -->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
		
		<!-- Icons css -->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/icons/icons.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="https://laravel.spruko.com/dashfox/ltr/assets/css/sidemenu.css">

		<!--- Dashboard-2 css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/style.css" rel="stylesheet">
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/style-dark.css" rel="stylesheet">

		<!--- Color css-->
		<link id="theme" href="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color.css" rel="stylesheet">

		 

		<!---Skinmodes css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/animate.css" rel="stylesheet">

		<!---Switcher css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/switcher/demo.css" rel="stylesheet">

    </head>

    <body  class="main-body light-theme app sidebar-mini active leftmenu-color">
		

        <!-- Loader -->
		<div id="global-loader">
			<img src="https://laravel.spruko.com/dashfox/ltr/assets/img/loader-2.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!--Navbar-->
		<nav class="navbar navbar-expand-sm bg-primary justify-content-center navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img class="" src="/gambar/logoBidan.png" width="115px" height="55px">
				</a>
			  </div>
		

			  <!--Profil-->
			<div class="container-fluid">
				<div class="main-header-left">			 
					<div class="app-sidebar__toggle d-md-none" data-toggle="sidebar">
						<a class="open-toggle" href="#"><i class="fas fa-bars" style="font-size:25px"></i></a>
						<a class="close-toggle" href="#"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="main-header-right">
					<div class="nav nav-item  navbar-nav-right ml-auto">
						<div class="dropdown main-profile-menu nav nav-item nav-link">
							<a class="profile-user d-flex" href=""><img src="/gambar/profil.png">
								<div class="p-text d-none">
									<span class="p-name font-weight-bold">{{session('username')}}</span>
									<small class="p-sub-text">Administrator</small>
								</div>
							</a>
							<div class="dropdown-menu shadow">
								<div class="main-header-profile header-img">
									<div class="main-img-user"><img src="/gambar/profil.png"></div>
									<h6>{{session('username')}}</h6><span>Administrator</span>
								</div>
								<a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
							</div>
						</div>
						<div class="dropdown main-header-message right-toggle">
								<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="fas fa-caret-down" style="font-size:20px"></i>
								</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-dark card mb-0 box-shadow">
				<div class="tab-menu-heading border-0 p-3">
					<div class="card-title mb-0">Profil Saya</div>
					<div class="card-options ml-auto">
						<a href="#" class="sidebar-remove"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
					<div class="tab-content">
						<div class="tab-pane active" id="side1">
							<div class="card-body text-center">
								<div class="dropdown user-pro-body">
									<div class="">
										<img class="avatar avatar-xl brround mx-auto text-center" src="/gambar/profil.png"><span class="avatar-status profile-status bg-green"></span>
									</div>
									<div class="user-info mg-t-20">
										<h6 class="font-weight-semibold  mt-2 mb-0">{{session('username')}}</h6>
										<span class="mb-0 text-muted">Administrator</span>
									</div>
								</div>
							</div>
							<a class="dropdown-item d-flex pd-y-15 border-bottom" href="/logout">
								<div class="d-flex"><i class="fas fa-sign-out-alt mr-3 tx-20 mg-t-5 text-muted"></i>
									<div>
										<h6 class="mb-0">Log Out</h6>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->        



		  </nav>
		<!-- container -->
		@yield('content')
		<!-- Container closed -->



















        
        <!-- Footer opened -->
		<div class="main-footer ht-40">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span>Copyright © 2023 <a href="#">INFORMATICS PROGRAMMING TEAM TEL-U </a></span>
			</div>
		</div>
		<!-- Footer closed -->
        <!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fas fa-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/popper.min.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Ionicons js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/moment/moment.js"></script>	

		<!-- P-scroll js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Sidebar js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Rating js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/rating/jquery.barrating.js"></script>		

		<!-- Suggestion js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/suggestion/jquery.input-dropdown.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/search.js"></script>

		<!-- Right-sidebar js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Sticky js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/sticky.js"></script>

		<!-- eva-icons js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/eva-icons/eva-icons.min.js"></script>

		 

		<!-- Eva-icons js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/eva-icons.min.js"></script>
		

		<!-- custom js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/custom.js"></script>

		<!-- Switcher js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/switcher/js/switcher.js"></script>
		
		<!-- font awesome -->
		<script src="https://kit.fontawesome.com/964ae5b0fd.js" crossorigin="anonymous"></script>
    </body>
</html>