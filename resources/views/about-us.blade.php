@extends('layouts.app')

@section('title', 'About us')
@section('content')
			<div class="wrapper">
                        <!-- Banner Start -->
		   <section class="breadcrumb-main">
			  <div class="container">
				<div class="row">
				  <div class="col-md-12">
				     <h1>About us</h1>
					  <ol class="breadcrumb">
						  <li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
						  <li class="breadcrumb-item">About us</li>
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
									  <h4>About Us</h4>
									  <h2>Something About NexnLine</h2>
									  </div>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>	  
									  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
								<div class="col-md-6"  data-aos="fade-right">
									<div class="about-img pe-0">
										   <img class="img-fluid" src="{{ asset('assets/img/about.jpg') }}"/>
								   </div>
							   </div>
						  </div>
					 </div>
			  </section>
      <!-- About Us End -->
	    
	  <section class="join-us about-join">
	     <div class="cta_box_inner">
			  <div class="container">
			  <div class="row">
				<div class="col-lg-8 col-xs-12"  data-aos="fade-up">
				  <h4>Our Mission</h4>
				  <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h2>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>	  
				  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
				</div>
			  </div>
			  </div>
			  </div>
      </section>
   
	      <!-- About Us Start -->
			  <section class="about-us ">
					  <div class="container">
						  <div class="row">
							<div class="col-md-6"  data-aos="fade-left">
								<div class="about-img  ps-0">
									   <img class="img-fluid" src="{{ asset('assets/img/about2.jpg') }}"/>
							   </div>
						   </div>
							<div class="col-md-6"  data-aos="fade-right">
									<div class="section-heading">
									  <h4>About Us</h4>
									  <h2>Why Choose Us ?</h2>
									  </div>
									  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</p>	  
									  <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil.</p>
							</div>
						  </div>
					 </div>
			  </section>
      <!-- About Us End -->
			</div>
@endsection