@extends('business.layouts.app')
@section('title', 'Customers')
@section('content')
<div class="wrapper">
	<!-- Banner Start -->
	<section class="breadcrumb-main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Customers</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item">Customers</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->
	<div class="my-account">
		<div class="container">
			<div class="row">
				@include('business.layouts.sidebar')
				<div class="col-lg-8 col-xl-9 col-xxl-9 col-md-8">
					<div class="card">
						<div class="card-header p-3">
							<div class="row align-items-center">
								<div class="col-6">
									<h2 class="card-title">Customers </h2>
								</div>
								<div class="col-6 text-end">
									<a href="javascript:void(0)" class="btn-action btn-nav" data-bs-toggle="modal" data-bs-target="#waitlistModal">Add New</a>
								</div>
								<div class="form-group mb-0 mt-2">
                  							<div class="input-group">
                    							<input type="text" class="form-control" placeholder="Search" aria-label="Username" name="search_input" id="search_input">
              								</div>
                						</div>
							</div>
						</div>
						<div class="card-body p-3">
							<div class="row align-items-center mb-3 customerfilter">
								<div class="col-md-12 d-flex justify-content-between">
									<div class="input-group">
									    <i class="fa fa-calendar"></i>
										<select class="btn-select">
									 	 	<option>Today</option>
										  	<option>Last 24 Hours</option>
										  	<option>Last 7 Days</option>
										  	<option>Last 30 Days</option>
									  		<option>Yesterday</option>
										  	<option>This Week</option>
										  	<option>Last Week</option>				
										  	<option>This Month</option>
										  	<option>Last Month</option>
										  	<option>This Year</option>
										  	<option>All Time</option>
										</select>
									</div>
									<div class="input-group ">
										<i class="fa fa-clock-o"></i>
										<select class="btn-select">
										  	<option>Any Status</option>
										  	<option>Waiting</option>
										  	<option>Serving</option>
										  	<option>Completed</option>
										  	<option>Booked</option>
										</select>
									</div>
								</div>
							</div>
							<div id="response">
						      @if(Session::has('message'))
						      <div class="alert alert-success alert-dismissable">
						       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						       {{ Session::get('message') }}
						      </div>
						      @endif
						      @if(Session::has('error'))
						      <div class="alert alert-danger alert-dismissable">
						       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						       {{ Session::get('error') }}
						      </div>
						      @endif
						      @if($errors->has('error_card'))
						      <div class="alert alert-danger alert-dismissable">
						       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						       {{ $errors->first('error_card') }}
						      </div>
						      @endif
   							</div>
							<div class="tablescroll">
								<div class=" mCustomScrollbar" data-mcs-theme="dark">
									<table class="table table-striped" id="customer_table">
										<thead>
											<tr>
												<th>Name</th>
												<th>Phone No</th>
												<th>Visit</th>
												<th>Last updated</th>
												<th>Action</th>
											</tr>
											</thead>
												<tbody id="customer_tableListing">
													<!-- <tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>John Smith</b></a></td>
														<td>078965 41200</td>
														<td>2</td>
														<td>Tue, May 24 2022, 2:31pm</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>	
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-clock-o"></i>Add To Waitlist</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
														<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>Adam Jones</b></a></td>
														<td>078965 41200</td>
														<td>2</td>
														<td>Tue, May 24 2022, 2:31pm</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>	
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-clock-o"></i>Add To Waitlist</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
														<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>Maria James</b></a></td>
														<td>078965 41200</td>
														<td>2</td>
														<td>Tue, May 24 2022, 2:31pm</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>	
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-clock-o"></i>Add To Waitlist</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
														<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>Andrew James</b></a></td>
														<td>078965 41200</td>
														<td>4</td>
														<td>Tue, May 24 2022, 2:31pm</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>	
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-clock-o"></i>Add To Waitlist</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
														<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>John Smith</b></a></td>
														<td>078965 41200</td>
														<td>2</td>
														<td>Tue, May 24 2022, 2:31pm</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>	
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-clock-o"></i>Add To Waitlist</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr> -->
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="waitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form method="POST" id="client_form" name="client_form"  enctype="multipart/form-data" action="{{route('business.save_customer')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Client Name</label>
									<input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter Client Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="tel" name="client_number" id="client_number" class="form-control" placeholder="Enter Phone No">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Notes</label>
									<input type="text" name="client_notes" id="client_notes" class="form-control" placeholder="Additional Notes">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn-nav btn-action">Add</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		<div class="modal fade" id="editwaitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form method="POST" name="edit_customer_form" id="edit_customer_form" action="{{ route('business.update_customer') }}">
                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  	<input type="hidden" name="customer_id" value="" id="customer_id">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title edit_title" id="exampleModalLabel"></h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Client Name</label>
									<input type="text" name="edit_name" id="edit_name" class="form-control" placeholder="Enter Client Name" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="tel" name="edit_phone" id="edit_phone" class="form-control" placeholder="Enter Phone No" value="">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	
		
		<div class="modal fade" id="addnoteModal" tabindex="-1" aria-labelledby="addnoteModalLabel" aria-hidden="true">
			
			<div class="modal-dialog">
				<form method="POST" name="add_notes_form" id="add_notes_form" enctype="multipart/form-data">
                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  	<input type="hidden" name="customerId" id="customerId">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Note</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Note</label>
									<textarea  class="form-control" placeholder="Write your note..." rows="8"name="addnotes" id="addnotes"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Cancel</button>
						<button type="save" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		<div class="modal fade" id="editnoteModal" tabindex="-1" aria-labelledby="editnoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form method="POST" name="edit_notes_form" id="edit_notes_form" enctype="multipart/form-data">
                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  	<input type="hidden" name="Id" id="Id">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Note</label>
									<textarea  class="form-control" placeholder="Write your note..." rows="8" id="editnotes" name="editnotes"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Cancel</button>
						<button type="submit" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		<div class="modal fade drawer right-align" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content"  id="abc">
					<div class="modal-header">
						<div class="modal-inner">
							<h5 class="modal-title username" id="exampleModalLabel"></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">Details</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="chat-tab" data-bs-toggle="tab" data-bs-target="#chat" type="button" role="tab" aria-controls="chat" aria-selected="false">Chat</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link " id="notes-tab notesclass" data-bs-toggle="tab" data-bs-target="#notes" type="button" role="tab" aria-controls="notes" aria-selected="false">Notes</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="visits-tab" data-bs-toggle="tab" data-bs-target="#visits" type="button" role="tab" aria-controls="visits" aria-selected="false">Visits(4)</button>
							</li>
						</ul>
					</div>
					<div class="modal-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Status</span>
										<div class="dropdown dropup d-inline-block">
											<a class="detail-right dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Set Status
											</a>
											<ul class="dropdown-menu detaildropdown" aria-labelledby="navbarDropdown">											
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox15"><span class="label label-dark"></span> Flagged</label>
														<input type="checkbox" id="checkbox15" name="checkbox1">
													</a>
												</li>
												<li class="px-3 py-2"><button type="button" class="btn-nav btn-action">Save</button></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Phone</span>
										<span class="detail-right userphone"></span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Number Of Visits</span>
										<span class="detail-right uservisit"></span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Created</span>
										<span class="detail-right userdate"></span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Last State</span>
										<span class="detail-right userstate"></span>
									</div>
								</div>
									<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Last Visit</span>
										<span class="detail-right userlastvisit"></span>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
								<div class="chat-main">
									<div class="d-flex chat-inner">
										<div class="flex-shrink-0">
											<span class="user-img">NK</span>
										</div>
										<div class="flex-grow-1 ms-3 ">
											<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-grow-1  me-3 text-end">
											<h5 class="mt-0">Adam Jones  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
										<div class="flex-shrink-0">
											<span class="user-img userbusiness">AJ</span>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-shrink-0">
											<span class="user-img">NK</span>
										</div>
										<div class="flex-grow-1 ms-3 ">
											<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-shrink-0">
											<span class="user-img">NK</span>
										</div>
										<div class="flex-grow-1 ms-3 ">
											<h5 class="mt-0">Navpreet Kaur  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
									</div>
									<div class="d-flex chat-inner">
										<div class="flex-grow-1  me-3 text-end">
											<h5 class="mt-0">Adam Jones  <small class="text-muted"><i>11:55am</i></small></h5>
											<p class="para">Cras sit amet nibh libero, in gravida nulla.</p>
										</div>
										<div class="flex-shrink-0">
											<span class="user-img userbusiness">AJ</span>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes-tab">
								<div class="notes-main" id="getnotesData">
									
								</div>
							</div>
							<div class="tab-pane fade" id="visits" role="tabpanel" aria-labelledby="visits-tab">
								<div class="accordion" id="accordionExample">
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Tue, May 24 2022, 12:59pm 
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
														                                    	<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">State</span>
														<span class="detail-right">Serving</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"><span class="label label-warning">Alerted</span> </span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Phone</span>
														<span class="detail-right">+919855607503</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Notes</span>
														<span class="detail-right">Lorem Porem Ipsum</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Staff</span>
														<span class="detail-right">Jane</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Service</span>
														<span class="detail-right">Nails</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Waited</span>
														<span class="detail-right">6.9 days</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Location</span>
														<span class="detail-right">nextinline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed  p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Mon, May 23 2022, 3:11pm 
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body">
														                                    	<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">State</span>
														<span class="detail-right">Serving</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"><span class="label label-warning">Alerted</span> </span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Phone</span>
														<span class="detail-right">+919855607503</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Staff</span>
														<span class="detail-right">Jane</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Service</span>
														<span class="detail-right">Nails</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Waited</span>
														<span class="detail-right">6.9 days</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Location</span>
														<span class="detail-right">nextinline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed  p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Sun, May 15 2022, 9:25pm 
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body">
														                                    	<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">State</span>
														<span class="detail-right">Serving</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"><span class="label label-warning">Alerted</span> </span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Phone</span>
														<span class="detail-right">+919855607503</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Notes</span>
														<span class="detail-right">Lorem Porem Ipsum</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Staff</span>
														<span class="detail-right">Jane</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Service</span>
														<span class="detail-right">Nails</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Waited</span>
														<span class="detail-right">6.9 days</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Location</span>
														<span class="detail-right">nextinline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer p-0">
						<div class="details-tab m-0 px-3 py-2">
							<button type="button" class="btn-nav btn-action" disabled>Restor Last Visit</button>
						</div>
						<div class="chat-tab w-100  m-0 px-3 py-2" style="display:none">
							<div class="input_msg_write d-flex justify-content-between">
								<input type="text" class="write_msg" placeholder="Type a message">
								<button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
							</div>
						</div>
						<div class="visit-tab-tab  m-0" style="display:none">
						</div>
						<div class="notes-tab  m-0 px-3 py-2" style="display:none">
							<button type="button"  data-bs-toggle="modal" data-bs-target="#addnoteModal" class="btn-nav btn-action">Add New Note</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- delete modal starts-->
		<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    		<input type="hidden" name="customerid" id ="customerid"/>
       	 	<div class="modal-dialog modal-dialog-centered">
            	<div class="modal-content">
                	<div class="modal-body">
                    	<div class="delete-cont">
                        	<p>Are you sure you want to delete this item ?</p>
                    	</div>
                	</div>
                	<div class="modal-footer">
                    	<button type="button" class="btn btn-secondary" id="Cancel" data-dismiss="modal" style="border-radius: 50px;">Cancel</button>
                    	<button type="button" style="border-radius: 50px; background-color: #a3dbba; border-color:#a3dbba; border: #a3dbba;" class="btn btn-danger" id="confirm">Delete</button>
                	</div>
            	</div>
        	</div>
    	</div>
    	<!-- delete modal ends-->
	@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
    $(function() {

    $.validator.methods.phoneUS = function( value, element ) {
        var filter = /^(\+91-|\+91|0)?\d{7,15}$/;
    if (filter.test(value)) {
      
        return true;
    }
    else {
     
        return false;
    }
    }

    $("form[name='client_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    client_name: {
        required: true,
      },
      client_number: {
        required: true,
        phoneUS: true
      }
    },
    // Specify validation error messages
    messages: {
      client_name:{
         required: "<strong>Please enter client name</strong>",
      },
      client_number: {
        required: "<strong>Please enter phone number</strong>",
        phoneUS: "<strong>Phone number length should be in between 7-15 digits</strong>"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

    $("form[name='add_notes_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    addnotes: {
        required: true,
      },
    },
    // Specify validation error messages
    messages: {
      addnotes:{
         required: "<strong>Please enter notes</strong>",
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
    	var customerId = $('#customerId').val();
    	var notesdata = $('#addnotes').val();
      	$.ajax({
	      url: '{{Route("business.save_notes")}}',
	      type: 'POST',
	      data : {
	              '_token': "{{ csrf_token() }}",
	              'customerId' : customerId,
	              'addnotes' : notesdata
	          },
	      success: function(response) {
	          if ($.isEmptyObject(response.error)) {
	              var data =  response.notes_data;
	              var temp = '';
			      	if(data.length > 0){
				      		$.each(data, function(i, d) {
				        	let created_at = d.created_at;
				          	let first_date = moment(created_at, 'YYYY-MM-DD HH:mm:ss').format('ddd, MMMM DD YYYY HH:mm:A');
				          	$('#customerId').val(d.customer_id);
				          	
				          	temp += '<div class="d-flex align-items-center notes-inner "><div class="flex-grow-1 me-3 ">';
				          	temp += '<p class="para mb-0">'+ d.notes_data +'</p>';
							temp += '<small class="text-muted"><i>' +first_date + '</i></small></div>';
							temp += '<div class="flex-shrink-0">';
							temp += '<a class="edit-icon edit_notes" href="javascript:void(0)" data-id="'+ d.id +'"><i class="fa fa-pencil"></i></a></div></div>';
							document.getElementById('getnotesData').innerHTML = temp;
							$('#addnoteModal').modal('hide');

				        });
				      		
			      	}else{
			      	
				          	temp += '<div class="d-flex align-items-center notes-inner "><div class="flex-grow-1 me-3 ">';
				          	temp += '<p class="para mb-0" style="text-align:center; color:#a3dbba;"><b>No Notes added Yet!</b> </p>';
							temp += '</div></div>';
							document.getElementById('getnotesData').innerHTML = temp;
							$('#addnoteModal').modal('hide');
			      	}
	          } else {
	              printErrorMsg(response.error);
	          }
	        }
	    });
    }
  });


    $("form[name='edit_notes_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    editnotes: {
        required: true,
      },
    },
    // Specify validation error messages
    messages: {
      editnotes:{
         required: "<strong>Please enter notes</strong>",
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
    	var notesId = $('#Id').val();
    	var notesval = $('#editnotes').val();
      	$.ajax({
	      url: '{{Route("business.update_notes")}}',
	      type: 'POST',
	      data : {
	              '_token': "{{ csrf_token() }}",
	              'Id' : notesId,
	              'editnotes':notesval
	          },
	      success: function(response) {
	          if ($.isEmptyObject(response.error)) {
	              var data =  response.notes_data;
	              var temp = '';
			      	if(data.length > 0){
				      		$.each(data, function(i, d) {
				        	let created_at = d.created_at;
				          	let first_date = moment(created_at, 'YYYY-MM-DD HH:mm:ss').format('ddd, MMMM DD YYYY HH:mm:A');
				          	$('#customerId').val(d.customer_id);
				          	
				          	temp += '<div class="d-flex align-items-center notes-inner "><div class="flex-grow-1 me-3 ">';
				          	temp += '<p class="para mb-0">'+ d.notes_data +'</p>';
							temp += '<small class="text-muted"><i>' +first_date + '</i></small></div>';
							temp += '<div class="flex-shrink-0">';
							temp += '<a class="edit-icon edit_notes" href="javascript:void(0)" data-id="'+ d.id +'"><i class="fa fa-pencil"></i></a></div></div>';
							document.getElementById('getnotesData').innerHTML = temp;
							$('#editnoteModal').modal('hide');

				        });
				      		
			      	}else{
			      	
				          	temp += '<div class="d-flex align-items-center notes-inner "><div class="flex-grow-1 me-3 ">';
				          	temp += '<p class="para mb-0" style="text-align:center; color:#a3dbba;"><b>No Notes added Yet!</b> </p>';
							temp += '</div></div>';
							document.getElementById('getnotesData').innerHTML = temp;
							$('#editnoteModal').modal('hide');
			      	}
	          } else {
	              printErrorMsg(response.error);
	          }
	        }
	    });
    }
  });


    $("form[name='edit_customer_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    edit_name: {
        required: true,
      },
      edit_phone: {
        required: true,
        phoneUS: true
      }
    },
    // Specify validation error messages
    messages: {
      edit_name:{
         required: "<strong>Please enter client name</strong>",
      },
      edit_phone: {
        required: "<strong>Please enter phone number</strong>",
        phoneUS: "<strong>Phone number length should be in between 7-15 digits</strong>"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>

<script type="text/javascript">
    $(document).ready(function(e){      
        var oTable = $('#customer_table').DataTable({
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("business.get_customerListing")}}', 
                data : function (d) {
                    d.name = $('input[name=search_input]').val();
                    // d.daterange = $('input[name=daterange]').val();
                }
            },
            ordering: true,
            button: false,
            scrollX: true,
            scrollCollapse: true,
            autoWidth: false,
            oLanguage: {
                sEmptyTable: 'No records found!!',
            },
          
            columns: [     
                        {
                            data: 'name',
                            name: 'Name'
                        },
                        {
                            data: 'phone_number',
                            name: 'Phone No.'
                        },
                        {
                            data: 'visit_count',
                            name: 'Visit'
                        },
                        {
                            data: 'updated_at',
                            name: 'Last Updated'
                        },
                        {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        }
                    ]
        });

        $('#search_input').on('keyup', function(e) {
      		oTable.draw();
      		e.preventDefault();
    	});

         $(document).on('click', '.delete_customer', function(e){
    		var customerid = $(this).attr('data-id');
    		$('#customerid').val(customerid);
    		$('#delete-popup').modal('show');
  		});

        $(document).on('click', '#Cancel', function(e){
    		$('#delete-popup').modal('hide');
  		});

	     $(document).on('click', '#confirm', function(e){  
	    var deleted_id = $('#customerid').val();
	    $.ajax({
	      url: '{{Route("business.delete_customer")}}',
	      type: 'POST',
	      data : {
	              '_token': "{{ csrf_token() }}",
	              'deleted_id' : deleted_id
	          },
	      success: function(response) {
	          if ($.isEmptyObject(response.error)) {
	              window.location.href = "{{route('business.customers')}}";
	              $(window).scrollTop(0);
	          } else {
	              printErrorMsg(response.error);
	          }
	        }
	    });
	  });

 	$(document).on('click', '.edit_customer', function() {

	    var id = $(this).data("id");
	    $.ajax({
	      headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      },
	      url: '{{ route("business.getcustomer") }}',
	      type: 'POST',
	      data: {
	        id: id
	      },
	      success: function(response) {
	        $.each(response.customer_data, function(i, d) {
	          $('#customer_id').val(d.id);
	          $('.edit_title').html(d.name);
	          $('#edit_name').val(d.name);
	          $('#edit_phone').val(d.phone_number);
	        });
	        $('#editwaitlistModal').modal('show');
	      }
	    });


  	});

  	$(document).on('click', '.get_details', function() {

	    var id = $(this).data("id");
	    $.ajax({
	      headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      },
	      url: '{{ route("business.getcustomer") }}',
	      type: 'POST',
	      data: {
	        id: id
	      },
	      success: function(response) {
	      	console.log(response);
	        $.each(response.customer_data, function(i, d) {
	        	let created_at = d.created_at;
	        	// Mon, May 23 2022, 12:28pm
	        	// Friday,01 July
	          	let first_date = moment(created_at, 'YYYY-MM-DD HH:mm:ss').format('ddd, MMMM DD YYYY HH:mm:A'); 
	        	$('.username').text(d.name);
	        	$('.userphone').text(d.phone_number);
	        	$('.uservisit').text(d.visit_count);
	          	$('.userdate').text(first_date);
	          	if(d.status == '1'){
	          		$('.userstate').text('Waiting');
	          	}
	          	$('.userlastvisit').text('Today');
	          	$('#notesclass').attr('data-id', id);
	          	getnotesdetails(d.id);
	        });
	        $('#detailModal').modal('show');
	      }
	    });


  	});

  	$(document).on('click', '#notesclass', function() {

	    var id = $(this).data("id");
	    alert(id);
	    getnotesdetails(id);
  	});

  	function getnotesdetails(id){
  		$.ajax({
	      headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      },
	      url: '{{ route("business.getnotes") }}',
	      type: 'POST',
	      data: {
	        id: id
	      },
	      success: function(response) {
	      	var data =  response.notes_data;
	      	var temp = '';
	      	if(data.length > 0){
		      		$.each(data, function(i, d) {
		        	let created_at = d.created_at;
		          	let first_date = moment(created_at, 'YYYY-MM-DD HH:mm:ss').format('ddd, MMMM DD YYYY HH:mm:A');
		          	$('#customerId').val(d.customer_id);
		          	temp += '<div class="d-flex align-items-center notes-inner "><div class="flex-grow-1 me-3 ">';
		          	temp += '<p class="para mb-0">'+ d.notes_data +'</p>';
					temp += '<small class="text-muted"><i>' +first_date + '</i></small></div>';
					temp += '<div class="flex-shrink-0">';
					temp += '<a class="edit-icon edit_notes" href="javascript:void(0)" data-id="'+ d.id +'"><i class="fa fa-pencil"></i></a></div></div>';
					document.getElementById('getnotesData').innerHTML = temp;		
		        });
		      		
	      	}else{
		          	temp += '<div class="d-flex align-items-center notes-inner "><div class="flex-grow-1 me-3 ">';
		          	temp += '<p class="para mb-0" style="text-align:center; color:#a3dbba;"><b>No Notes added Yet!</b> </p>';
					temp += '</div></div>';
					document.getElementById('getnotesData').innerHTML = temp;
	      	}

	        
	
	      }
	    });
  	}

  		$(document).on('click', '.edit_notes', function() {

	    var id = $(this).data("id");
	    $.ajax({
	      headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      },
	      url: '{{ route("business.geteditnotes") }}',
	      type: 'POST',
	      data: {
	        id: id
	      },
	      success: function(response) {
	        $.each(response.notes_data, function(i, d) {
	        	$('#Id').val(d.id);
	         	$('#editnotes').text(d.notes_data);
	        });
	        $('#editnoteModal').modal('show');
	      }
	    });


  	});

     });
</script>
@endsection