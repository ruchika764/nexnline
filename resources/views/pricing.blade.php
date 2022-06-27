@extends('layouts.app')

@section('title', 'Pricing')
@section('content')
			<div class="wrapper">
                        <!-- Banner Start -->
		   <section class="breadcrumb-main">
			  <div class="container">
				<div class="row">
				  <div class="col-md-12">
				     <h1>Pricing</h1>
					  <ol class="breadcrumb">
						  <li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
						  <li class="breadcrumb-item">Pricing</li>
					</ol>
				  </div>
				</div>
			  </div>
        </section>
      <!-- Banner End -->
     	  	        <!-- Pricing Plans Start -->
			     <section class="pricing-plans bg-white">
					  <div class="container">
						  <div class="row">
							<div class="col-lg-4 text-center text-lg-start text-xl-start text-xxl-start"  data-aos="fade-left">
									<div class="section-heading">
									  <h2>Our Pricing Plans</h2>
									    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
									  </div>
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