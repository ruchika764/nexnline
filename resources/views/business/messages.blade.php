<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>messages </title>
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
							<h1>Messages</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item">Messages</li>
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
									<li class="sideitem ">
										<a href="waitlist.html">
										<i class="fa fa-clock-o"></i><span>Waitlist</span>            
										</a>
									</li>
									<li class="sideitem ">
										<a href="serving.html">
										<i class="fa fa-check-square-o"></i><span>Serving</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="bookings.html">
										<i class="fa fa-calendar-o"></i><span>Bookings</span>            
										</a>
									</li>
									<li class="sideitem active">
										<a href="messages.html">
										<i class="fa fa-comment-o"></i><span>Messages</span>            
										</a>
									</li>
									<li class="sideitem ">
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
									<li class="sideitem">
										<a href="settings.html">
										<i class="fa fa-cog"></i><span>Settings</span>            
										</a>
									</li>
									<li class="sideitem ">
										<a href="login.html">
										<i class="fa fa-sign-out"></i><span>Logout</span>            
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-lg-8 col-xl-9 col-xxl-9 col-md-8">
							<div class="card">
								<div class="card-header p-3">
									<div class="row align-items-center">
										<div class="col-6">
											<h2 class="card-title">Messages </h2>
										</div>
										<div class="col-6 text-end">
											<select class="btn-select">
											  <option>Incoming</option>
											  <option selected>Outcoming</option>
											  <option>All</option>
											</select>
										</div>
									</div>
								</div>
								<div class="card-body p-3">
								    <div class=" messages-main">
										<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal" class="d-flex messages-inner">
											<div class="flex-shrink-0">
												<span class="user-img">NK</span>
											</div>
											<div class="flex-grow-1 ms-3 ">
												<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
												<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
											</div>
										</a>
										<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal" class="d-flex messages-inner">
											<div class="flex-shrink-0">
												<span class="user-img userbusiness">A</span>
											</div>
											<div class="flex-grow-1 ms-3 ">
												<h5 class="mt-0">Anowar  <small class="text-muted"><i>4h</i></small></h5>
												<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
										</a>
										<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal" class="d-flex messages-inner">
											<div class="flex-shrink-0">
												<span class="user-img">AJ</span>
											</div>
											<div class="flex-grow-1 ms-3 ">
												<h5 class="mt-0">Andrew James  <small class="text-muted"><i>5h</i></small></h5>
												<p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
											</div>
										</a>
										<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal" class="d-flex messages-inner">
											<div class="flex-shrink-0">
												<span class="user-img">AJ</span>
											</div>
											<div class="flex-grow-1 ms-3 ">
												<h5 class="mt-0">Adam Jones  <small class="text-muted"><i>23/05/22</i></small></h5>
												<p class="para">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
											</div>
										</a>
										<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal" class="d-flex messages-inner">
											<div class="flex-shrink-0">
												<span class="user-img">MJ</span>
											</div>
											<div class="flex-grow-1 ms-3 ">
												<h5 class="mt-0">Maria James <small class="text-muted"><i>21/05/22</i></small></h5>
												<p class="para">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
											</div>
										</a>
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
	<div class="modal fade drawer right-align" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content"  id="abc">
					<div class="modal-header">
						<div class="modal-inner">
							<h5 class="modal-title" id="exampleModalLabel">John</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link " id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
							</li>
							<li class="nav-item " role="presentation">
								<button class="nav-link active" id="chat-tab" data-bs-toggle="tab" data-bs-target="#chat" type="button" role="tab" aria-controls="chat" aria-selected="true">Chat</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes" type="button" role="tab" aria-controls="notes" aria-selected="false">Notes</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="visits-tab" data-bs-toggle="tab" data-bs-target="#visits" type="button" role="tab" aria-controls="visits" aria-selected="false">Visits(4)</button>
							</li>
						</ul>
					</div>
					<div class="modal-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade " id="details" role="tabpanel" aria-labelledby="details-tab">
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Status</span>
										<div class="dropdown dropup d-inline-block">
											<a class="detail-right dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Set Status
											</a>
											<ul class="dropdown-menu detaildropdown" aria-labelledby="navbarDropdown">
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox11"><span class="label label-success"></span> Arrived</label>
														<input type="checkbox" id="checkbox11" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox12"><span class="label label-danger"></span> Cancelled</label>
														<input type="checkbox" id="checkbox12" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox13"><span class="label label-success"></span> Confirmed</label> 
														<input type="checkbox" id="checkbox13" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox14"><span class="label label-warning"></span> Delayed</label>
														<input type="checkbox" id="checkbox14" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox15"><span class="label label-dark"></span> Flagged</label>
														<input type="checkbox" id="checkbox15" name="checkbox1">
													</a>
												</li>
												<li class="px-3 py-2"><button type="button" class="btn-nav btn-action">Save</button></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Served</span>
										<span class="detail-right">48 min</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Phone</span>
										<span class="detail-right">078965 41200</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Service</span>
										<span class="detail-right">Nails</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Staff</span>
										<span class="detail-right">Jane</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Served by</span>
										<span class="detail-right">Navpreet Kaur</span>
									</div>
								</div>
							</div>
							<div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
								<div class="chat-main">
									<div class="d-flex chat-inner">
										<div class="flex-shrink-0">
											<span class="user-img">NK</span>
										</div>
										<div class="flex-grow-1 ms-3 ">
											<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-grow-1  me-3 text-end">
											<h5 class="mt-0">Adam Jones  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
										<div class="flex-shrink-0">
											<span class="user-img userbusiness">AJ</span>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-shrink-0">
											<span class="user-img">NK</span>
										</div>
										<div class="flex-grow-1 ms-3 ">
											<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-shrink-0">
											<span class="user-img">NK</span>
										</div>
										<div class="flex-grow-1 ms-3 ">
											<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-grow-1  me-3 text-end">
											<h5 class="mt-0">Adam Jones  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
										<div class="flex-shrink-0">
											<span class="user-img userbusiness">AJ</span>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes-tab">
								<div class="notes-main">
									<div class="d-flex align-items-center notes-inner">
										<div class="flex-grow-1 me-3 ">
											<p class="para mb-0">Lorem Porem Ipsum dolor.</p>
											<small class="text-muted"><i>May 24th at 11:23 AM </i></small>
										</div>
										<div class="flex-shrink-0">
											<a class="edit-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editnoteModal"><i class="fa fa-pencil"></i></a>
										</div>
									</div>
									<div class="d-flex align-items-center notes-inner">
										<div class="flex-grow-1 me-3 ">
											<p class="para mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
											<small class="text-muted"><i>May 24th at 11:23 AM </i></small>
										</div>
										<div class="flex-shrink-0">
											<a class="edit-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editnoteModal"><i class="fa fa-pencil"></i></a>
										</div>
									</div>
									<div class="d-flex align-items-center notes-inner">
										<div class="flex-grow-1 me-3 ">
											<p class="para mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
											<small class="text-muted"><i>May 24th at 11:23 AM </i></small>
										</div>
										<div class="flex-shrink-0">
											<a class="edit-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editnoteModal"><i class="fa fa-pencil"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="visits" role="tabpanel" aria-labelledby="visits-tab">
								<div class="accordion" id="accordionExample">
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Tue, May 24 2022, 12:59pm 
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">State</span>
														<span class="detail-right">Waiting</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Phone</span>
														<span class="detail-right">+919855607503</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Staff</span>
														<span class="detail-right">First available</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Waited</span>
														<span class="detail-right">21 min</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Estimated Wait</span>
														<span class="detail-right">15 hours</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Location</span>
														<span class="detail-right">nextinline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed  p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Mon, May 23 2022, 3:11pm 
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">State</span>
														<span class="detail-right">Serving</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"><span class="label label-warning">Alerted</span> </span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Phone</span>
														<span class="detail-right">+919855607503</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Notes</span>
														<span class="detail-right">Lorem Porem Ipsum</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Staff</span>
														<span class="detail-right">Jane</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Service</span>
														<span class="detail-right">Nails</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Waited</span>
														<span class="detail-right">6.9 days</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Location</span>
														<span class="detail-right">nextinline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed  p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Sun, May 15 2022, 9:25pm 
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">State</span>
														<span class="detail-right">Serving</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"><span class="label label-warning">Alerted</span> </span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Phone</span>
														<span class="detail-right">+919855607503</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Notes</span>
														<span class="detail-right">Lorem Porem Ipsum</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Staff</span>
														<span class="detail-right">Jane</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Service</span>
														<span class="detail-right">Nails</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Waited</span>
														<span class="detail-right">6.9 days</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Location</span>
														<span class="detail-right">nextinline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer p-0">
						<div class="details-tab m-0 px-3 py-2" style="display:none">
							<button type="button" class="btn-nav btn-action">Done</button>
						</div>
						<div class="chat-tab w-100  m-0 px-3 py-2" >
							<div class="input_msg_write d-flex justify-content-between">
								<input type="text" class="write_msg" placeholder="Type a message">
								<button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
							</div>
						</div>
						<div class="visit-tab-tab  m-0" style="display:none">
						</div>
						<div class="notes-tab  m-0 px-3 py-2" style="display:none">
							<button type="button"  data-bs-toggle="modal" data-bs-target="#addnoteModal" class="btn-nav btn-action">Add New Note</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="addnoteModal" tabindex="-1" aria-labelledby="addnoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Note</label>
									<textarea  class="form-control" placeholder="Write your note..." rows="5"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Cancel</button>
						<button type="button" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="editnoteModal" tabindex="-1" aria-labelledby="editnoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Note</label>
									<textarea  class="form-control" placeholder="Write your note..." rows="5">Lorem Porem Ipsum</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Cancel</button>
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