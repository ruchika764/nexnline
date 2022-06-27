@extends('layouts.app')

@section('title', 'View Case Study')
@section('content')
			<div class="wrapper">
                        <!-- Banner Start -->
		   <section class="breadcrumb-main">
			  <div class="container">
				<div class="row">
				  <div class="col-md-12">
				     <h1>View Case Study</h1>
					  <ol class="breadcrumb">
						  <li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
						  <li class="breadcrumb-item active"><a href="{{route('case_study')}}">Case Studies</a></li>
						  <li class="breadcrumb-item">View Case Study</li>
					</ol>
				  </div>
				</div>
			  </div>
        </section>
      <!-- Banner End -->
    <!-- Case Studies Start -->
	    <section class="view-case-study-main">
		 <div class="container">
			 <div class="row">
			   <div class="col-md-12">
					 <div class="case-main">
					  <div class="case-img">
						<img class="img-fluid" src="{{ asset('assets/img/view-case-study.jpg') }}"/>
					  </div>
					  <div class="case-content">
					     <h3>Nexnline helps Louis Vuitton create luxury check-in experiences across locations worldwide</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis placerat arcu nibh sed placerat elementum. lorrna et purus et mi sit rhoncus. Id nisl quis arcu nulla leo nulla cras just. Something alit dolor siand t amet, cont  arsectetur adipiscing elit. Quis placerat arcu nibh sed placerat elementum. Quis placerat arcu nibh sed placerat elementum. lorem Urna et purus et mi sit rhoncus. Id nisl quis arcu nulla leo nulla.</p>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis placerat arcu nibh sed placerat elementum. lorrna et purus et mi sit rhoncus. Id nisl quis arcu nulla.</p> 
						 <blockquote>
						<p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. Quis placrat arcu amet rem ipsum dolor sit amecon. Lacerat arcu is a rem ipsum dolor. Lorem ipsum dolor sit amet, sectetur adipiscing elit. Quis placerat arcu amet rem ipsum dolor sit amecon.</p>
					</blockquote>
						 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					   <div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-blog-img">
								<a href="javascript:void(0)">
									<img class="img-fluid" src="{{ asset('assets/img/view-case-study-1.jpg') }}" alt="Image">
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-blog-img">
								<a href="javascript:void(0)">
									<img class="img-fluid" src="{{ asset('assets/img/view-case-study-2.jpg') }}" alt="Image">
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-blog-img">
								<a href="javascript:void(0)">
									<img class="img-fluid" src="{{ asset('assets/img/view-case-study-3.jpg') }}" alt="Image">
								</a>
							</div>
						</div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis placerat arcu nibh sed placerat elementum. lorrna et purus et mi sit rhoncus. Id nisl quis arcu nulla.</p>
					<h3>The Solution</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<ul class="case-list mb-15">
								<li>
									<i class="fa fa-check"></i>
									Sed ut perspiciatis unde omnis iste natus error 
								</li>
								<li>
									<i class="fa fa-check"></i>
									 Ut enim ad minima veniam, quis nostrum
								</li>
								<li>
									<i class="fa fa-check"></i>
									Quis autem vel eum iure reprehenderit qui in
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-md-6">
							<ul class="case-list mb-15">
								<li>
									<i class="fa fa-check"></i>
									At vero eos et accusamus et iusto odio dignissimos 
								</li>
								<li>
									<i class="fa fa-check"></i>
									 Nam libero tempore, cum soluta nobis 
								</li>
								<li>
									<i class="fa fa-check"></i>
									Temporibus autem quibusdam et aut officiis debitis
								</li>
							</ul>
						</div>
					</div>
					  </div>
					</div>
			   </div>
			  </div>
		 </div>
		</section>
      <!-- Case Studies End -->
	</div>
@endsection