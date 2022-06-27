@extends('layouts.app')

@section('title', 'FAQ')
@section('content')
			<div class="wrapper">
                        <!-- Banner Start -->
		   <section class="breadcrumb-main">
			  <div class="container">
				<div class="row">
				  <div class="col-md-12">
				     <h1>Frequently Asked Questions</h1>
					  <ol class="breadcrumb">
						  <li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
						  <li class="breadcrumb-item">FAQ</li>
					</ol>
				  </div>
				</div>
			  </div>
        </section>
      <!-- Banner End -->
      <!-- FAQ Start -->
	    <section class="faq">
		 <div class="container">
			 <div class="row">
				 <div class="col-md-12">
				   <div class="section-heading">
				     <h2>Account Setup</h2>
				   </div>
					   <div class="accordion" id="accordionExample">
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									How do I get started?
								  </button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Do Ipsum dolor sit amet consectetur adipiscing elit ?
								  </button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Why  aute irure dolor in reprehenderit in voluptate velit esse  ?
								  </button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							</div>
				 </div>
				 	 <div class="col-md-12 mt-3">
				   <div class="section-heading">
				     <h2>Support</h2>
				   </div>
					   <div class="accordion" id="accordionExample1">
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingOne1">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									What sed ut perspiciatis unde omnis iste natus error ?
								  </button>
								</h2>
								<div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo1">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
									How  excepteur sint occaecat cupidatat non proident ?
								  </button>
								</h2>
								<div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingThree1">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
									Do you duis aute irure dolor in reprehenderit in voluptate ?
								  </button>
								</h2>
								<div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							   <div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo11">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo11" aria-expanded="false" aria-controls="collapseTwo1">
									Are you sunt in culpa qui officia deserunt mollit anim ?
								  </button>
								</h2>
								<div id="collapseTwo11" class="accordion-collapse collapse" aria-labelledby="headingTwo11" data-bs-parent="#accordionExample1">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							  <div class="accordion-item">
								<h2 class="accordion-header" id="headingThree11">
								  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree11" aria-expanded="false" aria-controls="collapseThree11">
									Do you voluptate velit esse cillum dolore eu fugiat nulla pariatur ?
								  </button>
								</h2>
								<div id="collapseThree11" class="accordion-collapse collapse" aria-labelledby="headingThree11" data-bs-parent="#accordionExample11">
								  <div class="accordion-body">
									<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								  </div>
								</div>
							  </div>
							</div>
				 </div>
			 </div>
		 </div>
		</section>
      <!-- FAQ End -->
			</div>
@endsection