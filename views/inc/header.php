<!doctype html>
<!-- <html lang="ar" dir="rtl"> -->
<html lang="en" dir="ltr">
<head>

	<title>Page title</title>
	<meta name="description" content="...">

	<meta charset="utf-8">
	<meta name="MobileOptimized" content="320"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- speed up external res -->
	<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com/">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<!-- preloading icon font is helping to speed up a little bit -->
	<link rel="preload" href= "assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="stylesheet" href="assets/css/core.min.css">
	<link rel="stylesheet" href="assets/css/vendor_bundle.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body class="header-sticky header-fixed">
<header id="header" class="shadow-xs">

	<!-- /TOP BAR -->




	<!-- Navbar -->
	<div class="container position-relative">

		<!-- /SEARCH -->





		<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">






			<div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


				<!-- navbar : mobile menu -->
				<div class="navbar-xs d-none"><!-- .sticky-top -->

					<!-- mobile menu button : close -->
					<button class="navbar-toggler pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
						<svg width="20" viewBox="0 0 20 20">
							<path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
						</svg>
					</button>

					<!--
						Mobile Menu Logo
						Logo : height: 70px max
					-->
					<a class="navbar-brand" href="index.html">
						<img src="assets/images/logo/logo_dark.svg" width="110" height="38" alt="...">
					</a>

				</div>
				<!-- /navbar : mobile menu -->



				<!-- navbar : navigation -->
				<ul class="navbar-nav">

					<li class="nav-item d-block d-sm-none">

						<!-- image -->
						<div class="mb-4">
							<img width="600" height="600" class="img-fluid" src="demo.files/svg/artworks/people_crossbrowser.svg" alt="...">
						</div>



					</li>


					<!-- home -->
					<li class="nav-item dropdown active">

						<a href="#" id="mainNavHome" class="nav-link dropdown-toggle js-stoppropag" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Home
						</a>

						<div aria-labelledby="mainNavHome" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover dropdown-mega-md dropdown-fadeinup">


						</div>

					</li>







					<!-- social icons : mobile only -->
					<li class="nav-item d-block d-sm-none text-center mb-4">

						<h3 class="h6 text-muted">Follow Us</h3>

						<!-- facebook -->
						<a href="#" class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
							<i class="fi fi-social-facebook"></i>
						</a>



					</li>





				</ul>
				<!-- /navbar : navigation -->


			</div>





			<!-- OPTIONS -->
			<ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

				<li class="list-inline-item mx-1 dropdown">

					<a href="#" aria-label="Account Options" id="dropdownAccountOptions" class="btn btn-sm rounded-circle btn-light bg-transparent text-muted shadow-none js-stoppropag" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
									<span class="group-icon">
										<i class="fi fi-user-male"></i>
										<i class="fi fi-close"></i>
									</span>
					</a>


					<!--

						Dropdown Classes
							.dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
							.dropdown-menu-hover 		- open on hover
							.dropdown-menu-clean 		- no background color on hover
							.dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
							.dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

							Dropdown prefix icon (optional, if enabled in variables.scss)
								.prefix-link-icon .prefix-icon-dot 		- link prefix
								.prefix-link-icon .prefix-icon-line 	- link prefix
								.prefix-link-icon .prefix-icon-ico 		- link prefix
								.prefix-link-icon .prefix-icon-arrow 	- link prefix

								.prefix-icon-ignore 					- ignore, do not use on a specific link

					-->
					<!-- dropdown -->
					<div aria-labelledby="dropdownAccountOptions" class="list-unstyled dropdown-menu dropdown-menu-clean dropdown-click-ignore end-0 py-2 rounded-xl" style="min-width:215px;">

						<div class="dropdown-header px-4 mb-1 text-wrap fw-medium">John Doe</div>
						<div class="dropdown-divider mb-3"></div>
						<a class="dropdown-item active" href="account-index.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
								<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
							</svg>
							<span>My account</span>
						</a>
						<a class="dropdown-item" href="account-orders.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
								<path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
							</svg>
							<span>My orders</span>
						</a>
						<a class="dropdown-item" href="account-favourites.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
							</svg>
							<span>Favourites</span>
						</a>
						<a class="dropdown-item" href="account-reward.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
								<path fill-rule="evenodd" d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"></path>
							</svg>
							<span>Reward points</span>
						</a>
						<a class="dropdown-item" href="account-coupons.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
								<path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
							</svg>
							<span>Coupons</span>
						</a>
						<a class="dropdown-item" href="account-reviews.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"></path>
								<path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
							</svg>
							<span>My reviews</span>
						</a>
						<a class="dropdown-item" href="account-refunds.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"></path>
								<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"></path>
							</svg>
							<span>My refunds</span>
						</a>
						<a class="dropdown-item" href="account-addresses.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
								<circle cx="12" cy="10" r="3"></circle>
							</svg>
							<span>My addresses</span>
						</a>
						<a class="dropdown-item" href="account-settings.html">
							<svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
								<path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"></path>
							</svg>
							<span>Account settings</span>
						</a>
						<div class="dropdown-divider mt-3"></div>
						<a href="<?=PATH?>logout" title="Log Out" class="dropdown-item mt-1">
							<i class="fi fi-power float-start"></i>
							Log Out
						</a>
					</div>

				</li>

			</ul>
			<!-- /OPTIONS -->



		</nav>

	</div>
	<!-- /Navbar -->

</header>