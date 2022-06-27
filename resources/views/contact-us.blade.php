@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')
			<div class="wrapper">
                        <!-- Banner Start -->
		   <section class="breadcrumb-main">
			  <div class="container">
				<div class="row">
				  <div class="col-md-12">
				     <h1>Contact Us</h1>
					  <ol class="breadcrumb">
						  <li class="breadcrumb-item active"><a href="index.html">Home</a></li>
						  <li class="breadcrumb-item">Contact Us</li>
					</ol>
				  </div>
				</div>
			  </div>
        </section>
      <!-- Banner End -->
    <!-- Get In Touch Start -->
	    <section class="get-in-touch">
		 <div class="container">
			 <div class="row">
				 <div class="col-md-4">
				         <div class="contact-info text-center " data-aos="fade-up">
										  <div class="contact-icon">
											<div class="contact-img">
											  <img src="{{ asset('assets/img/icons/address.png') }}" width="50">
											</div>
										  </div>
										  <div class="contact-text">
											<h3>Address</h3>
											<p>123 Lorem Street Newyork , USA 345345</p>
										  </div>
						</div>
				 </div>
				 	 <div class="col-md-4">
				         <div class="contact-info text-center " data-aos="fade-up">
										  <div class="contact-icon">
											<div class="contact-img">
											  <img src="{{ asset('assets/img/icons/email.png') }}" width="50">
											</div>
										  </div>
										  <div class="contact-text">
											<h3>Email Address</h3>
											<p>nexnline@gmail.com</p>
										  </div>
						</div>
				 </div>
				 	 <div class="col-md-4">
				         <div class="contact-info text-center " data-aos="fade-up">
										  <div class="contact-icon">
											<div class="contact-img">
											  <img src="{{ asset('assets/img/icons/phone.png') }}" width="50">
											</div>
										  </div>
										  <div class="contact-text">
											<h3>Phone Number</h3>
											<p>+91 98723 78653</p>
										  </div>
						</div>
				 </div>
			 </div>
		 </div>
		</section>
      <!-- Get In Touch End -->
	    <!-- Contact Us Start -->
	    <section class="contact-us">
		 <div class="container">
			 <div class="row">
			    <div class="col-md-12 section-heading text-center mb-5" data-aos="fade-down">
				    <h2>Tell Us About Yourself</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			 </div>
			 <div class="row" data-aos="fade-up">
				 <div class="col-md-6">
				   <div class="form-group">
						  <label>Full Name</label>
						  <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
				   </div>
				 </div>
				  <div class="col-md-6">
				   <div class="form-group">
						  <label>Email Address</label>
						  <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
				   </div>
				 </div>
				  <div class="col-md-6">
				   <div class="form-group">
						  <label>Subject</label>
						  <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
				   </div>
				 </div>
				  <div class="col-md-6">
				   <div class="form-group">
						  <label>Phone Number</label>
						  <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Number">
				   </div>
				 </div>
                   <div class="col-md-12">
				   <div class="form-group">
						  <label>Message</label>
						  <textarea rows="7" class="form-control" placeholder="Enter Message"></textarea>
				   </div>
				 </div>
				 <div class="col-md-12 mt-3">
				     <button class="btn-action btn-nav">Send Your Message</button>
				 </div>
			 </div>
		 </div>
		</section>
      <!-- Contact Us End -->
			</div>
      @endsection