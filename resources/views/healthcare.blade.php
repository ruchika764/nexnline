@extends('layouts.app')

@section('title', 'Healthcare')
@section('content')
			<div class="wrapper">
				<!-- Banner Start -->
				   <section class="breadcrumb-main">
					  <div class="container">
						<div class="row">
						  <div class="col-md-12">
							 <h1>Healthcare</h1>
							  <ol class="breadcrumb">
								  <li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
								  <li class="breadcrumb-item">Healthcare</li>
							</ol>
						  </div>
						</div>
					  </div>
				</section>
			  <!-- Banner End -->
            <!-- About Us Start -->
			  <section class="about-us">
					  <div class="container">
						  <div class="row">
							<div class="col-md-6"  data-aos="fade-left">
									<div class="section-heading">
									  <h4>Healthcare</h4>
									  <h2>Appointment Waitlist App for Healthcare and Medical Professionals</h2>
									  </div>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. </p>	  
									  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
									  <a class="btn-action btn-nav" href="javascript:void(0)">Try It Free</a>
							</div>
								<div class="col-md-6"  data-aos="fade-right">
									<div class="about-img pe-0">
										   <img class="img-fluid br-25" src="{{ asset('assets/img/healthcare1.png') }}"/>
								   </div>
							   </div>
						  </div>
					 </div>
			  </section>
            <!-- About Us End -->
			           <!-- About Us Start -->
			  <section class="about-us bg-grey">
					  <div class="container">
						  <div class="row">
								<div class="col-md-6"  data-aos="fade-left">
									<div class="about-img ps-0">
										   <img class="img-fluid br-25" src="{{ asset('assets/img/healthcare2.png') }}"/>
								   </div>
							   </div>
							<div class="col-md-6"  data-aos="fade-right">
									<div class="section-heading">
									  <h4>Healthcare</h4>
									  <h2>How Waitlist Management Apps Benefit Medical Professionals</h2>
									  </div>
									  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo fugit, sed quia consequuntur magni dolores eos qui. </p>	  
									  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
							
							</div>
						  </div>
					 </div>
			  </section>
			  <section class="join-us about-join">
	          <div class="cta_box_inner">
			  <div class="container">
			  <div class="row">
			  
					<div class="col-md-6 "  data-aos="fade-left">
				 <div class="section-heading">
									  <h4>Healthcare</h4>
									  <h2>How NexnLIne is Helping Mid City Pediatrics</h2>
									  </div>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>	  
									  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
				</div>
			  </div>
			  </div>
			  </div>
      </section>
         <section class="industries ptb-90">
          <div class="container">
             <div class="row">
						<div class="col-md-4">
							   <div class="card_single text-center bx-shd br-10 pt-30" data-aos="fade-up">
												  <div class="card-icon">
													<a href="javascript:void(0)" class="card-img">
													  <img src="{{ asset('assets/img/icons/heathcare-icon-1.png') }}" width="50">
													</a>
												  </div>
												  <div class="card-text">
													<a href="javascript:void(0)"><h3>Eliminate Crowded Waiting Rooms</h3></a>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
												  </div>
								</div>
						</div>
						<div class="col-md-4">    
							<div class="card_single text-center bx-shd br-10 pt-30" data-aos="fade-up">
											  <div class="card-icon">
												<a href="javascript:void(0)" class="card-img">
												  <img src="{{ asset('assets/img/icons/heathcare-icon-2.png') }}" width="50">
												</a>
											  </div>
											  <div class="card-text">
												<a href="javascript:void(0)"><h3>Improve Patient Satisfaction Scores by 18%</h3></a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
											  </div>
							</div>
						</div>
						<div class="col-md-4">       
								 <div class="card_single text-center bx-shd br-10 pt-30" data-aos="fade-up">
												  <div class="card-icon">
													<a href="javascript:void(0)" class="card-img">
													  <img src="{{ asset('assets/img/icons/heathcare-icon-3.png') }}" width="50">
													</a>
												  </div>
												  <div class="card-text">
													<a href="javascript:void(0)"><h3>Increase Patient Throughput by 35%</h3></a>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
												  </div>
								</div>
						</div>
					
							 
				  </div>
				</div>
        </section>
			</div>
@endsection