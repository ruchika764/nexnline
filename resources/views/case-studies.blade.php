@extends('layouts.app')

@section('title', 'Case Studies')
@section('content')
			<div class="wrapper">
                        <!-- Banner Start -->
		   <section class="breadcrumb-main">
			  <div class="container">
				<div class="row">
				  <div class="col-md-12">
				     <h1>Case Studies</h1>
					  <ol class="breadcrumb">
						  <li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
						  <li class="breadcrumb-item">Case Studies</li>
					</ol>
				  </div>
				</div>
			  </div>
        </section>
      <!-- Banner End -->
    <!-- Case Studies Start -->
	    <section class="case-study">
		 <div class="container">
			 <div class="row">
			   <div class="col-md-4">
					 <div class="card border-0">
					  <div class="card-img-top">
						<img class="img-fluid" src="{{ asset('assets/img/case-study1.jpg') }}"/>
					  </div>
					  <div class="card-body ps-0 pe-0">
						<h5 class="card-title">Louis Vuitton create luxury</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						 <a href="{{route('view_case_study')}}" class="view-case-study">View Case Study</a>
					  </div>
					</div>
			   </div>
			   			   <div class="col-md-4">
					 <div class="card border-0">
					  <div class="card-img-top">
						<img class="img-fluid" src="{{ asset('assets/img/case-study3.jpg') }}"/>
					  </div>
					  <div class="card-body ps-0 pe-0">
						<h5 class="card-title">We elevates user experience</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						 <a href="{{route('view_case_study')}}" class="view-case-study">View Case Study</a>
					  </div>
					</div>
			   </div>
			   			   <div class="col-md-4">
					 <div class="card border-0">
					  <div class="card-img-top">
						<img class="img-fluid" src="{{ asset('assets/img/case-study2.jpg') }}"/>
					  </div>
					  <div class="card-body ps-0 pe-0">
						<h5 class="card-title">Hartford HealthCare hospital </h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						 <a href="{{route('view_case_study')}}" class="view-case-study">View Case Study</a>
					  </div>
					</div>
			   </div>
			   			   <div class="col-md-4">
					 <div class="card border-0">
					  <div class="card-img-top">
						<img class="img-fluid" src="{{ asset('assets/img/case-study4.png') }}"/>
					  </div>
					  <div class="card-body ps-0 pe-0">
						<h5 class="card-title">Mid City Pediatrics</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						 <a href="{{route('view_case_study')}}" class="view-case-study">View Case Study</a>
					  </div>
					</div>
			   </div>
			   			   <div class="col-md-4">
					 <div class="card border-0">
					  <div class="card-img-top">
						<img class="img-fluid" src="{{ asset('assets/img/case-study5.png') }}"/>
					  </div>
					  <div class="card-body ps-0 pe-0">
						<h5 class="card-title">Oasis Cannabis Dispensary</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						 <a href="{{route('view_case_study')}}" class="view-case-study">View Case Study</a>
					  </div>
					</div>
			   </div>
			   			   <div class="col-md-4">
					 <div class="card border-0">
					  <div class="card-img-top">
						<img class="img-fluid" src="{{ asset('assets/img/case-study6.png') }}"/>
					  </div>
					  <div class="card-body ps-0 pe-0">
						<h5 class="card-title">Southport Grocery</h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						 <a href="{{route('view_case_study')}}" class="view-case-study">View Case Study</a>
					  </div>
					</div>
			   </div>
			 </div>
		 </div>
		</section>
      <!-- Case Studies End -->
	 </div>
@endsection