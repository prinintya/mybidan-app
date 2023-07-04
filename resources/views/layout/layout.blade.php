
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
		<!-- Navbar -->
		<div class="main-header nav nav-item">	
			<nav class="navbar navbar-expand-sm navbar-dark bg-info justify-content-center fixed-top ">
					<div class="container-fluid">
						<a class="navbar-brand" href="">
						<img class="" src="/gambar/logoBidan.png" width="145px" height="50px"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<ul class="navbar-nav">
							<a class="btn btn-outline-light btn-lg m-2" href="/" role="button">Beranda</a>
				
							<button class="btn btn-outline-light btn-lg m-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Layanan
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="/data_kehamilan">Kehamilan</a>
								<a class="dropdown-item" href="/data_persalinan">Persalinan</a>
								<a class="dropdown-item" href="/data_nifas">Nifas</a>
								<a class="dropdown-item" href="/data_kb">KB</a>
							</div>
							<a class="btn btn-outline-light btn-lg m-2" href="/rekam_medik" role="button">Rekam Medik</a>
								
						</ul>
					</div>
	
				   <!--Profil-->		 
								


			
			
				<!-- main-header -->
						
										
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
						</div>
					</div>
				</div>
			</nav>
		  <!-- Navbar -->
		</div>  
			
		
	
		<!-- container -->
		@yield('content')
		<!-- Container closed -->

		

        <!-- Footer opened -->
		<div class="text-center p-3 fixed-bottom">
			Copyright © 2023
			<a class="text-dark" href="#">INFORMATICS PROGRAMMING TEAM TEL-U</a>
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