<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Bookings </title>
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
                            <ul id="progressbar">
                                <li class="active" id="step1"><strong>Step 1</strong></li>
                                <li id="step2"><strong>Step 2</strong></li>
                                <li id="step3"><strong>Step 3</strong></li>
                                <li id="step4"><strong>Step 4</strong></li>
                                <li id="step5"><strong>Step 5</strong></li>
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
							  <div class="form-card">  
                                    <div class="heading mb-4">
									     <h2>Select Date & Time</h2>
									</div>	
                                     <div class="clearfix"></div>									
							        <div class="subheading mb-3">
									<div class="row justify-content-center">
									  <div class="col-6">
									     <h3 >Select Date & Time</h3>
									  </div>
									    <div class="col-6 text-end">
										<input type="button"  class=" btn-nav btn-clear" id="dp1"  value="Choose Calendar"/>
									    <button class=" btn-nav ms-2">Today</button>
									  </div>
									</div>
									</div>
									<div class="clearfix"></div>
                                     <div class="choosedate mt-3">
									      <div class=" datecarousel owl-carousel owl-theme">
									      <div class="item ">
										     <button class="active-btn">
												<div class="week">Sun</div>
												<div class="day">5</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										   <div class="item">
										     <button>
												<div class="week">Mon</div>
												<div class="day">6</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Tue</div>
												<div class="day">7</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Wed</div>
												<div class="day">8</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Thu</div>
												<div class="day">9</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Fri</div>
												<div class="day">10</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Sat</div>
												<div class="day">11</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										   <div class="item">
										     <button>
												<div class="week">Sun</div>
												<div class="day">12</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										   <div class="item">
										     <button>
												<div class="week">Mon</div>
												<div class="day">13</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Tue</div>
												<div class="day">14</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Wed</div>
												<div class="day">15</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Thu</div>
												<div class="day">16</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Fri</div>
												<div class="day">17</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
										    <div class="item">
										     <button>
												<div class="week">Sat</div>
												<div class="day">18</div>
												<div class="month">Jun</div>
											 </button>
									      </div>
									      </div>
									 </div>
                              
                                  <div class="subheading mb-3 mt-5">
									<div class="row justify-content-center">
									  <div class="col-6">
									     <h3>Choose Time For <select class="select-form"><option>First available staff</option><option>Jane</option><option>Sally</option></select></h3>
									  </div>
									    <div class="col-6 text-end">
										<select class="select-form"><option>Africa/Abidjan (UTC) </option><option>Africa/Accra (UTC) </option><option>Africa/Addis_Ababa (UTC+03:00) </option></select>
									  </div>
									</div>
									</div>
									<div class="clearfix"></div>
									<div class="choosetime">
									    <div class="checkbox-time">
										  <input type="checkbox" id="checkbox31" name="checkbox"  style="display:none"/>
										  <label for="checkbox31">12:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox32" name="checkbox"  style="display:none"/>
										  <label for="checkbox32">12:30am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox33" name="checkbox"  style="display:none"/>
										  <label for="checkbox33">01:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox34" name="checkbox"  style="display:none"/>
										  <label for="checkbox34">01:30am</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox35" name="checkbox"  style="display:none"/>
										  <label for="checkbox35">02:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox36" name="checkbox"  style="display:none"/>
										  <label for="checkbox36">02:30am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox37 name="checkbox"  style="display:none"/>
										  <label for="checkbox37">03:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox38" name="checkbox"  style="display:none"/>
										  <label for="checkbox38">03:30am</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox39" name="checkbox"  style="display:none"/>
										  <label for="checkbox39">04:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox40" name="checkbox"  style="display:none"/>
										  <label for="checkbox40">04:30am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox41" name="checkbox"  style="display:none"/>
										  <label for="checkbox41">05:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox42" name="checkbox"  style="display:none"/>
										  <label for="checkbox42">06:30am</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox43" name="checkbox"  style="display:none"/>
										  <label for="checkbox43">07:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox44" name="checkbox"  style="display:none"/>
										  <label for="checkbox44">07:30am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox45" name="checkbox"  style="display:none"/>
										  <label for="checkbox45">08:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox46" name="checkbox"  style="display:none"/>
										  <label for="checkbox46">08:30am</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox47" name="checkbox"  style="display:none"/>
										  <label for="checkbox47">09:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox48" name="checkbox"  style="display:none"/>
										  <label for="checkbox48">09:30am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox49" name="checkbox"  style="display:none"/>
										  <label for="checkbox49">10:00am</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox50" name="checkbox"  style="display:none"/>
										  <label for="checkbox50">11:30am</label>
										</div>
										                                        <div class="checkbox-time">
										  <input type="checkbox" id="checkbox301" npme="checkbox"  style="display:none"/>
										  <label for="checkbox301">12:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox302" npme="checkbox"  style="display:none"/>
										  <label for="checkbox302">12:30pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox303" npme="checkbox"  style="display:none"/>
										  <label for="checkbox303">01:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox304" npme="checkbox"  style="display:none"/>
										  <label for="checkbox304">01:30pm</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox305" npme="checkbox"  style="display:none"/>
										  <label for="checkbox305">02:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox306" npme="checkbox"  style="display:none"/>
										  <label for="checkbox306">02:30pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox307 npme="checkbox"  style="display:none"/>
										  <label for="checkbox307">03:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox308" npme="checkbox"  style="display:none"/>
										  <label for="checkbox308">03:30pm</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox309" npme="checkbox"  style="display:none"/>
										  <label for="checkbox309">04:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox400" npme="checkbox"  style="display:none"/>
										  <label for="checkbox400">04:30pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox401" npme="checkbox"  style="display:none"/>
										  <label for="checkbox401">05:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox402" npme="checkbox"  style="display:none"/>
										  <label for="checkbox402">06:30pm</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox403" npme="checkbox"  style="display:none"/>
										  <label for="checkbox403">07:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox404" npme="checkbox"  style="display:none"/>
										  <label for="checkbox404">07:30pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox405" npme="checkbox"  style="display:none"/>
										  <label for="checkbox405">08:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox406" npme="checkbox"  style="display:none"/>
										  <label for="checkbox406">08:30pm</label>
										</div>
										  <div class="checkbox-time">
										  <input type="checkbox" id="checkbox407" npme="checkbox"  style="display:none"/>
										  <label for="checkbox407">09:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox408" npme="checkbox"  style="display:none"/>
										  <label for="checkbox408">09:30pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox409" npme="checkbox"  style="display:none"/>
										  <label for="checkbox409">10:00pm</label>
										</div>
										 <div class="checkbox-time">
									       <input type="checkbox" id="checkbox500" npme="checkbox"  style="display:none"/>
										  <label for="checkbox500">11:30pm</label>
										</div>
									</div>
							  </div>
								<input type="button" name="previous" class="previous btn-nav btn-clear" value="Previous"/>
                                <input type="button" name="next" class="next  btn-nav" value="Next"/>
                               </div>
                              <div class="step-wizard">
							   <div class="form-card br-none mb-0 pb-0 text-center">
							        <div class="heading mb-3 d-inline-block"><h2>Enter Your Details</h2></div>
									<div class="clearfix"></div>
									<div class="row mt-2  justify-content-center">
									   <div class="col-md-8 col-lg-6">
														 <div  class="details-main">
															 <div  class="d-flex mb-2 justify-content-between">
																<span  class="detailleft"> Date </span>
																<span class="detailright"> Jun 06, Monday, 2022 </span>
															</div>
															 <div  class="d-flex mb-2 justify-content-between">
																<span  class="detailleft"> Time </span>
																<span class="detailright"> 1:00pm-1:30pm (PDT) </span>
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
								      <a href="bookingsuccessful.html"  class="btn-nav">Confirm</a>
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