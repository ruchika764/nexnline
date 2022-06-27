<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Join Waitlist </title>
		<link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/dataTables.bootstrap5.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
		<link rel="stylesheet" href="css/datepicker.css" />
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/animation.css" rel="stylesheet">
		<link href="css/fullcalendar.css" rel="stylesheet">
	
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
							<li><a class="btn-nav" href="login.html">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Header End -->
		<div class="wrapper bg-grey">
		<section class="booking-steps">
		  <div class="container">
			 <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="javascript:void(0)">
                            <!-- progressbar -->
                            <ul id="progressbar" class="progessbar2">
                                <li class="active" id="step1"><strong>Step 1</strong></li>
                                <li id="step2"><strong>Step 2</strong></li>
                                <li id="step3"><strong>Step 3</strong></li>
                                <li id="step4"><strong>Step 4</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <div class="step-wizard">
                                <div class="form-card">
                                    <div class="heading mb-3"><h2>Select Service</h2></div>
									<div class="clearfix"></div>
									<div class="row mt-3">
									   <div class="form-group checkbox-list col-md-6 col-lg-4">
										  <input type="checkbox" id="checkbox1" name="checkbox" style="display:none"/>
										  <label for="checkbox1">Brows <img class="activecheck" src="img/check.png"/><img class="uncheck" src="img/uncheck.png"/></label>
										</div>
										 <div class="form-group checkbox-list col-md-6  col-lg-4">
										  <input type="checkbox" id="checkbox2" name="checkbox"  style="display:none"/>
										  <label for="checkbox2">Nails <img class="activecheck" src="img/check.png"/><img class="uncheck" src="img/uncheck.png"/></label>
										</div>
                                    </div>
                                </div>
                                <input type="button" name="skip" class="next btn-nav btn-clear" value="Skip"/>
                                <input type="button" name="next" class="next btn-nav" value="Next"/>
                            </div>
                           <div class="step-wizard">
                                <div class="form-card">
								    <div class="heading mb-3"><h2>How Many Are In Your Party ?</h2></div>
									<div class="clearfix"></div>
                                   <div class="quantity form-group mt-2">
								   <input type="button" value="-" id="subs" class="btn-nav me-2"/>
                                     <input type="text"  class="onlyNumber form-control" id="noofmember" value="1" name="noofmember" />
                                    <input type="button" value="+" id="adds" class="ms-2 btn-nav" />
								   </div>
                                </div>
                                <input type="button" name="previous" class="previous btn-nav btn-clear" value="Previous"/>
                                <input type="button" name="next" class="next  btn-nav" value="Next"/>
                            </div>
							  <div class="step-wizard">
							   <div class="form-card">
							        <div class="heading mb-3"><h2>Select Staff</h2></div>
									<div class="clearfix"></div>
									<div class="row mt-4">
									   <div class="form-group checkbox-list col-md-6 col-lg-4">
										  <input type="checkbox" id="checkbox11" name="checkbox" style="display:none"/>
										  <label for="checkbox11">First Available <img class="activecheck" src="img/check.png"/><img class="uncheck" src="img/uncheck.png"/></label>
										</div>
                                    </div>
									<div class="row">
									   <div class="form-group checkbox-list col-md-6 col-lg-4">
										  <input type="checkbox" id="checkbox12" name="checkbox" style="display:none"/>
										  <label for="checkbox12"><span class="usermain"><span class="user-img">J</span> Jane</span> <img class="activecheck" src="img/check.png"/><img class="uncheck" src="img/uncheck.png"/></label>
										</div>
										  <div class="form-group checkbox-list col-md-6 col-lg-4">
										  <input type="checkbox" id="checkbox13" name="checkbox" style="display:none"/>
										  <label for="checkbox13"><span class="usermain"><span class="user-img">S</span> Sally</span> <img class="activecheck" src="img/check.png"/><img class="uncheck" src="img/uncheck.png"/></label>
										</div>
                                    </div>
                                </div>
								 <input type="button" name="previous" class="previous btn-nav btn-clear" value="Previous"/>
                                <input type="button" name="next" class="next btn-nav" value="Next"/>
                               </div>
							
                              <div class="step-wizard">
							   <div class="form-card br-none mb-0 pb-0 text-center">
							        <div class="heading mb-3 d-inline-block"><h2>Enter Your Details</h2></div>
									<div class="clearfix"></div>
									<div class="row mt-2  justify-content-center">
									   <div class="col-md-8 col-lg-6">
														 <div  class="details-main">
															 <div  class="d-flex mb-2 justify-content-between">
																<span  class="detailleft"> Service </span>
																<span class="detailright"> Brows </span>
															</div>
															 <div  class="d-flex mb-2 justify-content-between">
																<span  class="detailleft"> Staff </span>
																<span class="detailright"> Jane </span>
															</div>

															 <div  class="d-flex justify-content-between">
																<span  class="detailleft"> Party size </span>
																<span class="detailright"> 1 person </span>
															</div>

														</div>
											 <div class="form-group text-start">
										     <label>Name</label>
											 <input type="text" placeholder="Enter your name" id="name" class="form-control" name="name"/>
										  </div>
										    <div class="form-group text-start">
										     <label>Phone No.</label>
											 <input type="tel" placeholder="Enter your Phone No"  class="form-control" id="phoneno" name="phoneno"/>
										  </div>
                                       </div>
                                   </div>
								      <a href="javascript:void(0)"  class="btn-nav">Confirm</a>
                                </div>
                             
                               </div>
                           
                        </form>
                    </div>
                </div>
		  </div>
		</section>
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
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/animation.js"></script>
		<script src="js/fullcalendar.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap5.min.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/main.js"></script>
		<script>
		$(document).ready(function(){
    
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($(".step-wizard").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
        }, 
        duration: 600
    });
});

$(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($(".step-wizard").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
        }, 
        duration: 600
    });
});


    
});

$('#adds').click(function add() {
    var $rooms = $("#noofmember");
    var a = $rooms.val();
    
    a++;
    $("#subs").prop("disabled", !a);
    $rooms.val(a);
});
$("#subs").prop("disabled", !$("#noofmember").val());

$('#subs').click(function subst() {
    var $rooms = $("#noofmember");
    var b = $rooms.val();
    if (b >= 1) {
        b--;
        $rooms.val(b);
    }
    else {
        $("#subs").prop("disabled", true);
    }
});
$('.choosedate .datecarousel .owl-item button').on('click', function(){
    $('.choosedate .datecarousel .owl-item button.active-btn').removeClass('active-btn');
    $(this).addClass('active-btn');
});


		</script>
		
		<script src="js/bootstrap-datepicker.js"></script>
		<script>
		$(document).ready(function(){
			$('#dp1').datepicker()
		});
	</script>
	</body>
</html>