@extends('layouts.app')

@section('title', 'Index')
@section('content')
  	<div class="wrapper">
      	<!-- Banner Start -->
       	<section class="banner">
          	<div class="container">
            	<div class="row text-center">
              		<div class="col-md-12">
                		<div class="hero-content wow fadeIn">
                  			<h1 data-aos="fade-up">Welcome To NexnLine Site</h1>
              				<p data-aos="fade-up" >It allows users to search for nearby businesses by type that displays the distance from users location.</p>
                  			<form data-aos="fade-up" class="search-form" action="javascripr:void(0)">
                    			<div class="row me-2 w-100">
                    				<div class="col-md-6 position-relative">
                    					<input class="search" type="text" name="text" placeholder="Search Here..."><i class="fa fa-search"></i>
                    				</div>
                   					<div class="col-md-6 position-relative">
               					 		<input class="search" type="text" name="text" placeholder="City, state or Zip Code"><i class="fa fa-map-marker"></i>
                   					</div>
								</div>
								<input class="submit-button" type="submit" value="Search Now">
                  			</form>
                		</div>
                		<div data-aos="fade-up" class="form-note">
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                		</div>
              		</div>
            	</div>
            	<div class="col-md-12">
	              	<div class="client-list owl-carousel owl-theme  brandscarousel">
					    <div class="item">
						   <img class="img-fluid" src="{{ asset('assets/img/icons/c1.png') }}" alt="Client">
						</div>
						<div class="item">
						   <img class="img-fluid" src="{{ asset('assets/img/icons/c2.png') }}" alt="Client">
						</div>
						<div class="item">
						   <img class="img-fluid" src="{{ asset('assets/img/icons/c3.png') }}" alt="Client">
						</div>
						<div class="item">
						   <img class="img-fluid" src="{{ asset('assets/img/icons/c4.png') }}" alt="Client">
						</div>
						<div class="item">
						   <img class="img-fluid" src="{{ asset('assets/img/icons/c5.png') }}" alt="Client">
						</div>
		            </div>
            	</div>
          	</div>
        </section>
      	<!-- Banner End -->
 		<!-- Industries Start -->
       	<section class="industries">
          	<div class="container">
             	<div class="row">
			    	<div class="col-md-12 section-heading text-center mb-4" data-aos="fade-down">
				    	<h2>Our Industries</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-md-4">
					   	<div class="card_single text-center" data-aos="fade-up">
						  	<div class="card-icon">
								<a href="{{route('healthcare')}}" class="card-img">
								  	<img src="{{ asset('assets/img/icons/p2.png') }}" width="50" >
								</a>
						  	</div>
						  	<div class="card-text">
								<a href="{{route('healthcare')}}"><h3>Restaurants</h3></a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
						  	</div>
						</div>
					</div>
					<div class="col-md-4">    
						<div class="card_single text-center" data-aos="fade-up">
						  	<div class="card-icon">
								<a href="{{route('healthcare')}}" class="card-img">
								  	<img src="{{ asset('assets/img/icons/p8.png') }}" width="50">
								</a>
						  	</div>
						  	<div class="card-text">
								<a href="{{route('healthcare')}}"><h3>Stylists</h3></a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
						  	</div>
							</div>
						</div>
						<div class="col-md-4">       
						 	<div class="card_single text-center" data-aos="fade-up">
							  	<div class="card-icon">
									<a href="{{route('healthcare')}}" class="card-img">
									  	<img src="{{ asset('assets/img/icons/p9.png') }}" width="50">
									</a>
							  	</div>
							  	<div class="card-text">
									<a href="{{route('healthcare')}}"><h3>Barbers</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
							  	</div>
							</div>
						</div>
					 	<div class="col-md-4">        
						 	<div class="card_single text-center" data-aos="fade-up">
							  	<div class="card-icon">
									<a href="{{route('healthcare')}}" class="card-img">
									  	<img src="{{ asset('assets/img/icons/p4.png') }}" width="50" >
									</a>
							  	</div>
							  	<div class="card-text">
									<a href="{{route('healthcare')}}"><h3>Nail Salons & Spas</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
							  	</div>
							</div>
						</div>
						<div class="col-md-4">          
							<div class="card_single text-center" data-aos="fade-up">
							  	<div class="card-icon">
									<a href="{{route('healthcare')}}" class="card-img">
									  	<img src="{{ asset('assets/img/icons/p10.png') }}" width="50">
									</a>
							  	</div>
							  	<div class="card-text">
									<a href="{{route('healthcare')}}"><h3>Coaches/Trainers</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
							  	</div>
							</div>
						</div>
						<div class="col-md-4">
						 	<div class="card_single text-center" data-aos="fade-up">
						  		<div class="card-icon">
									<a href="{{route('healthcare')}}" class="card-img">
									  	<img src="{{ asset('assets/img/icons/p1.png') }}" width="50">
									</a>
							  	</div>
							  	<div class="card-text">
									<a href="{{route('healthcare')}}"><h3>Healthcare</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit et dolore magna aliqua.</p>
							  	</div>
							</div>
						</div>	 
				  	</div>
				</div>
        	</section>
      		<!-- Industries End -->
	   		<!-- Features Start -->
	       	<section class="features">
	          	<div class="container container-s">
	             	<div class="row">
						<div class="col-md-12 section-heading text-center" data-aos="fade-up">
							<h2>Our Features</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="col-md-12">
							<div class="flex-inner align-center">
							  	<div class="f-image"  data-aos="fade-left">
									<img class="img-fluid" src="{{ asset('assets/img/feature1.png') }}" alt="Feature">
							  	</div>
							  	<div class="f-text"  data-aos="fade-right">
									<div class="left-content">
									  <h2>Waitlist Feature</h2>
									  <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									  <a href="#">Know more</a>
									</div>
							  	</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="flex-inner flex-inverted align-center">
							  	<div class="f-image"  data-aos="fade-left">
									<img class="img-fluid" src="{{ asset('assets/img/feature2.png') }}" alt="Feature">
							  	</div>
							  	<div class="f-text"  data-aos="fade-right">
									<div class="left-content">
									  	<h2>Appointment Feature</h2>
									  	<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									  	<a href="#">Know more</a>
									</div>
							  	</div>
							</div>
						</div>
				 	</div>
          		</div>
	        </section>
      		<!-- Features End -->
      		<!-- Join Us Start -->
		  	<section class="join-us">
		     	<div class="cta_box_inner">
				  	<div class="container">
				  		<div class="row">
							<div class="col-lg-8 col-xs-12">
					  			<h4 data-aos="fade-up">Join Us</h4>
					  			<h2 data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h2>
					  			<a  data-aos="fade-up" class="btn-action btn-nav" href="javascript:void(0)">Join Now</a>
							</div>
				  		</div>
				  	</div>
			  	</div>
	      	</section>
      		<!-- Join Us End -->
	        <!-- About Us Start -->
		  	<section class="about-us">
			  	<div class="container">
				  	<div class="row">
						<div class="col-md-6"  data-aos="fade-left">
							<div class="section-heading">
							  	<h4>About Us</h4>
							  	<h2>Something About NexnLine</h2>
						  	</div>
						  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						  	<a class="btn-action btn-nav" href="javascript:void(0)">Know More</a>
						</div>
						<div class="col-md-6"  data-aos="fade-right">
							<div class="about-img">
							   <img class="img-fluid" src="{{ asset('assets/img/about.png') }}"/>
						   	</div>
					   	</div>
				  	</div>
			 	</div>
		  	</section>
      		<!-- About Us End -->
        	<!-- Pricing Plans Start -->
		  	<section class="pricing-plans">
			  	<div class="container">
				  	<div class="row">
						<div class="col-lg-4 text-center text-lg-start text-xl-start text-xxl-start"  data-aos="fade-left">
							<div class="section-heading">
							  	<h2>Our Pricing Plans</h2>
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						  	</div>
							<a class="btn-action btn-nav mt-4" href="{{route('pricing')}}">Know More</a>
						</div>
					    <div class="col-lg-8"  data-aos="fade-right">
							<div class="row">
							  	<div class="col-md-6">
							      	<div class="single-pricing-table">
										<div class="title">
											<h3>Basic Plan</h3>
											<p>Lorem ipsum dolor sit amet </p>
										</div>
										<span class="popular">Popular</span>
										<div class="price">
											$49 <span>/Month</span>
										</div>
										<ul class="features-list">
											<li><i class="check"></i> Up to 10 List</li>
											<li><i class="check"></i> Lorem ipsum dolor sit amet</li>
											<li><i class="check"></i> Sed ut perspiciatis unde iste</li>
											<li><i class="check"></i> Nemo enim ipsam voluptatem</li>
											<li><i class="check"></i> Vel illum qui dolorem eum </li>
										</ul>
									  	<a class="btn-action btn-nav mt-4" href="javascript:void(0)">Get Started</a>
									</div>
							 	</div>
							  	<div class="col-md-6">
								      <div class="single-pricing-table pricing-active">
											<div class="title">
												<h3>Premium Plan</h3>
												<p>Lorem ipsum dolor sit amet </p>
											</div>
											<div class="price">
												$69 <span>/Month</span>
											</div>
											<ul class="features-list">
												<li><i class="check"></i> Up to 100 List</li>
												<li><i class="check"></i> Lorem ipsum dolor sit amet</li>
												<li><i class="check"></i> Sed ut perspiciatis unde iste</li>
												<li><i class="check"></i> Nemo enim ipsam voluptatem</li>
												<li><i class="check"></i> Vel illum qui dolorem eum </li>
											</ul>
											  <a class="btn-action btn-nav mt-4" href="javascript:void(0)">Get Started</a>
											</div>
									 </div>
								</div>
							</div>
						  </div>
					 </div>
			  </section>
      <!-- Pricing Plans End -->
	  </div>
@endsection