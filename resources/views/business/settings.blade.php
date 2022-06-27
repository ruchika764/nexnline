<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Settings </title>
		<link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/dataTables.bootstrap5.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/animation.css" rel="stylesheet">
	</head>
	<body>
		<!-- Header Start -->
		<header id="myHeader">
			<nav class="navbar navbar-expand-md navbar-dark p-0">
				<div class="container">
					<a class="navbar-brand" href="index.html"><img src="img/logo.png"/></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<img src="img/toggleNavbar.svg">
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link"  href="index.html">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">List My Business</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">Solutions</a></li>
									<li><a class="dropdown-item" href="#">Industries</a></li>
									<li><a class="dropdown-item" href="case-studies.html">Case Studies</a></li>
									<li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
									<li><a class="dropdown-item" href="#">Free Trial</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact-us.html">Contact Us</a>
							</li>
							<li class="nav-item user-dropdown dropdown ">
								<a href="javascript:void(0)" class="dropdown-toggle nav-link p-0" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="user-img"><i class="fa fa-user-o"></i></span> Andrew James</a>
								<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
								    <li><a class="dropdown-item " href="profile.html"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a></li>
									<li><a class="dropdown-item " href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
								</ul>
							</li>
							<!-- <li><a class="btn-nav" href="javascript:void(0)">Free Trial</a></li> -->
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Header End -->
		<div class="wrapper">
			<!-- Banner Start -->
			<section class="breadcrumb-main">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Settings</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item">Settings</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- Banner End -->
			<div class="my-account">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-xl-3 col-xxl-3 col-md-4 mb-mob-15">
							<nav class="dashboard-nav my-10 mb-md-0">
								<div class="top-main-bf">
									<div class="userinfo">
										<div class="img-edt">
											<i class="fa fa-user usericon"></i>
										</div>
										<h4> Andrew James </h4>
									</div>
								</div>
								<ul>
								    <li class="sideitem ">
										<a href="dashboard.html">
										<i class="fa fa-tachometer"></i><span>Dashboard</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="waitlist.html">
										<i class="fa fa-clock-o"></i><span>Waitlist</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="serving.html">
										<i class="fa fa-check-square-o"></i><span>Serving</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="bookings.html">
										<i class="fa fa-calendar-o"></i><span>Bookings</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="messages.html">
										<i class="fa fa-comment-o"></i><span>Messages</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="customers.html">
										<i class="fa fa-user-o"></i><span>Customers</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="services.html">
											<i class="fa fa-file-o"></i><span>Services</span>    
										</a>
									</li>
									<li class="sideitem">
										<a href="resources.html">
										<i class="fa fa-cogs"></i><span>Resources</span>            
										</a>
									</li>
									<li class="sideitem active">
										<a href="settings.html">
										<i class="fa fa-cog"></i><span>Settings</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="login.html">
										<i class="fa fa-sign-out"></i><span>Logout</span>            
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-lg-8 col-xl-9 col-xxl-9 col-md-8 settings mb-mob-15">
					
							<div class="card">
								<div class="card-header   p-3">
									<div class="row align-items-center">
										<div class="col-6">
											<h2 class="card-title">Customer Input Fields </h2>
										</div>
										<div class="col-6 text-end">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addfieldModal" class="btn-action btn-nav" >Add Field</a>
										</div>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="dashboard-listing">
									  <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Name  <small class="text-muted mt-1"><i>Required</i></small></h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Client ID</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   	  		  <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Phone</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" >
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Email</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   		  <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Party Size</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" >
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Quote Wait</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   		  <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Notes</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
									   <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Services</h5>
												<button type="button" data-bs-toggle="modal" data-bs-target="#editfieldModal" class="btn-clear btn-nav btn-action">Edit</button>
											</div>
									   </div>
										  	   <div class="d-flex dashboard-inner p-3">
											<div class="flex-shrink-0">
															<label class="switch">
															  <input type="checkbox" checked>
															  <span class="slider round"></span>
															</label>
											</div>
										<div class="flex-grow-1 ms-3 d-flex align-items-center">
												<h5 class="mt-0  w-100 flex-column">Resources </h5>
											
											</div>
									   </div> 	  
									</div>
								</div>
							</div>
						  <div class="card mt-3">
								<div class="card-header   p-3">
									<h2 class="card-title">Public Links</h2>
								</div>
								<div class="card-body">
								<div class="form-group">
									<label>Waitlist</label>
									<div class="input-group publiclinks">
									   <input type="text" name="waitlist" class="form-control" value="Nexnline.com/welcome/waitlist" readonly>
									   <button><i class="fa fa-copy"></i></button>
								   </div>
								</div>
								<div class="form-group">
									<label>Bookings</label>
									<div class="input-group publiclinks">
									   <input type="text" name="waitlist" class="form-control" value="Nexnline.com/welcome/bookings" readonly>
									   <button><i class="fa fa-copy"></i></button>
								   </div>
								</div>
								</div>
							</div>
						  
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Start -->
		<footer class="footer">
			<div class="container">
				<div class="row text-center align-items-center">
					<div class="col-lg-2 col-md-3 col-sm-12">
						<div class="footer-logo">
							<img src="img/logo-white.png"/>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<ul class="footer-menu">
							<li><a href="about-us.html">About</a> </li>
							<li><a href="privacy-policy.html">Privacy</a> </li>
							<li><a href="terms.html">Terms Of Use</a> </li>
							<li><a href="faq.html">FAQs</a> </li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-3 col-sm-12">
						<div class="footer-links">
							<ul>
								<li><a href="javascript:void(0)"> <img class="img-fluid" src="img/icons/in.png" alt="Icon"> </a> </li>
								<li><a href="javascript:void(0)"> <img class="img-fluid" src="img/icons/li.png" alt="Icon"> </a> </li>
								<li><a href="javascript:void(0)"> <img class="img-fluid" src="img/icons/tw.png" alt="Icon"> </a> </li>
								<li><a href="javascript:void(0)"> <img class="img-fluid" src="img/icons/tt.png" alt="Icon"> </a> </li>
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
		
		<div class="modal fade" id="addfieldModal" tabindex="-1" aria-labelledby="addfieldModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New Field</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Label</label>
									<input type="text" name="label" class="form-control" placeholder="Enter Label">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Type</label>
									<select class="form-control appearance-auto">
									  <option value="type1">Text Field</option>
									  <option value="type2">Text Area</option>
									  <option value="type3">Number</option>
									  <option value="type4">Selection</option>
									  <option value="type5">Date</option>
									  <option value="type6">Checkbox</option>
									  <option value="type7">URL</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Placeholder</label>
									<input type="text" name="placeholder" class="form-control" placeholder="Enter placeholder">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Default Value</label>
									<input type="text" name="default" class="form-control" placeholder="Enter Default Value">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-nav btn-action">Add</button>
					</div>
				</div>
			</div>
		</div>
			<div class="modal fade" id="editfieldModal" tabindex="-1" aria-labelledby="editfieldModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Field</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Name" value="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Label</label>
									<input type="text" name="label" class="form-control" placeholder="Enter Label" value="Label">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Type</label>
									<select class="form-control appearance-auto">
									  <option value="type1" selected="">Text Field</option>
									  <option value="type2">Text Area</option>
									  <option value="type3">Number</option>
									  <option value="type4">Selection</option>
									  <option value="type5">Date</option>
									  <option value="type6">Checkbox</option>
									  <option value="type7">URL</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Placeholder</label>
									<input type="text" name="placeholder" class="form-control" placeholder="Enter placeholder" value="Enter Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Default Value</label>
									<input type="text" name="default" class="form-control" placeholder="Enter Default Value" value="Default">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/animation.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap5.min.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/main.js"></script>
		
	</body>
</html>