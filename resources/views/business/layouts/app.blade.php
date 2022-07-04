<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
      	<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="16x16" type="image/png">
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.min.css') }}"/>
	 	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
      	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
	  	<link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet">
	  	<link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
		<!-- <link rel="stylesheet" href="{{ asset('assets/css/plugins.bundle.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/prismjs/prismjs.bundle.css') }}" /> -->
	  	@yield('head')
	</head>
	<body>
		<!-- Header Start -->
		<header id="myHeader">
			<nav class="navbar navbar-expand-md navbar-dark p-0">
				<div class="container">
					<a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('assets/img/logo.png') }}"/></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<img src="{{ asset('assets/img/toggleNavbar.svg') }}">
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link"  href="{{route('index')}}">Home</a>
							</li>
							<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">List My Business</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Solutions</a></li>
							<li><a class="dropdown-item" href="#">Industries</a></li>
							<li><a class="dropdown-item" href="{{route('case_study')}}">Case Studies</a></li>
							<li><a class="dropdown-item" href="{{route('pricing')}}">Pricing</a></li>
							<li><a class="dropdown-item" href="#">Free Trial</a></li>
						  </ul>   
                     </li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
							</li>
							<li class="nav-item user-dropdown dropdown ">
								<a href="javascript:void(0)" class="dropdown-toggle nav-link p-0" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="user-img"><i class="fa fa-user-o"></i></span> {{Auth::User()->name}} {{Auth::User()->lname}}</a>
								<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
								    <li><a class="dropdown-item " href="{{route('business.profile')}}"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a></li>
									<li><a class="dropdown-item " href="{{route('business.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
								</ul>
							</li>
							<!-- <li><a class="btn-nav" href="javascript:void(0)">Free Trial</a></li> -->
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Header End -->

		 @yield('content')
		
		<!-- Footer Start -->
		<footer class="footer">
          <div class="container">
            <div class="row text-center align-items-center">
              <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="footer-logo">
                  <img src="{{ asset('assets/img/logo-white.png') }}"/>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                  <ul class="footer-menu">
                  <li><a href="{{route('about_us')}}">About</a> </li>
                  <li><a href="{{route('privacy_policy')}}">Privacy</a> </li>
                  <li><a href="{{route('terms')}}">Terms Of Use</a> </li>
                  <li><a href="{{route('faq')}}">FAQs</a> </li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="footer-links">
                  <ul>
                    <li><a href="javascript:void(0)"> <img class="img-fluid" src="{{ asset('assets/img/icons/in.png') }}" alt="Icon"> </a> </li>
                    <li><a href="javascript:void(0)"> <img class="img-fluid" src="{{ asset('assets/img/icons/li.png') }}" alt="Icon"> </a> </li>
                    <li><a href="javascript:void(0)"> <img class="img-fluid" src="{{ asset('assets/img/icons/tw.png') }}" alt="Icon"> </a> </li>
                    <li><a href="javascript:void(0)"> <img class="img-fluid" src="{{ asset('assets/img/icons/tt.png') }}" alt="Icon"> </a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Scroll To Top -->
              <a id="back-top" class="back-to-top js-scroll-trigger" href="javascript:void(0)"></a>
            <!-- Scroll To Top Ends-->
          </div>
</footer>
		<!-- Footer End -->
        <!-- <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script> -->
        <!-- <script src="{{ asset('assets/js/prismjs/prismjs.bundle.js') }}"></script> -->
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
      <script src="{{ asset('assets/js/animation.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
		<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.min.js') }}"></script>
		<script>
		$(document).ready(function(){
			$('.timepicker').timepicker({});
		});

		$(document).ready(function(){
         //Chosen
           $(".multipleChosen").chosen();
        });
		</script>
      @yield('scripts')
	</body>
</html>