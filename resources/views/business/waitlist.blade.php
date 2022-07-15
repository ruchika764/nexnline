@extends('business.layouts.app')
@section('title', 'Waitlist')
@section('content')
<div class="wrapper">
			<!-- Banner Start -->
			<section class="breadcrumb-main">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Waitlist</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
								<li class="breadcrumb-item">Waitlist</li>
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
							<div id="response">
									@if(Session::has('message'))
									<div class="alert alert-success alert-dismissable" role="alert">
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
									@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
								</div>
							<div class="card ">
								<div class="card-header p-3">
									<div class="row align-items-center">
										<div class="col-6">
											<h2 class="card-title">Waitlist </h2>
										</div>
										<div class="col-6 text-end">
											<a href="javascript:void(0)" class="btn-action btn-nav" data-bs-toggle="modal" data-bs-target="#waitlistModal">Add New</a>
										</div>
									</div>
								</div>
								<div class="card-body p-3">
									<div class="row align-items-center mb-3">
										<div class="col-md-8 mb-mob-15">
											<button class="btn-filters btn-nav" data-bs-toggle="modal" data-bs-target="#waitlinesModal"><i class="fa fa-user-o"></i> 2 People</button>
											<button class="btn-filters btn-nav" data-bs-toggle="modal" data-bs-target="#waittimesModal"><i class="fa fa-clock-o"></i> 17 hours wait</button>
										</div>
										<div class="col-md-4 text-start text-sm-end">
											<button class="btn-filters btn-nav" data-bs-toggle="modal" data-bs-target="#addfiltersModal"><i class="fa fa-filter"></i> Filter</button>
										</div>
									</div>
									<div class="tablescroll">
										<div class=" mCustomScrollbar" data-mcs-theme="dark">
											<table id="example" class="table table-striped" style="width:100%">
												<thead>
													<tr>
														<th>Name</th>
														<th>Staff</th>
														<th>Service</th>
														<th>Wait</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>John Smith <i class="ms-1 fa fa-phone"></i></b></a><span class="notes">lorem porem ipsum</span></td>
														<td>Jane</td>
														<td><span class="service-label">Brows</span></td>
														<td>1h 42 min</td>
														<td><span class="label label-warning">Delayed</span> <span class="label label-success">Arrived</span></td>
														<td>
															<a href="javascript:void(0)" class="btn-warning btn-action"><i class="fa fa-bell-o"></i></a>
															<a href="javascript:void(0)" class="btn-success btn-action"><i class="fa fa-check"></i></a>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>Adam Smith <i class="ms-1 fa fa-phone"></i></b></a><span class="notes">lorem porem ipsum</span></td>
														<td>Jone</td>
														<td><span class="service-label">Nails</span></td>
														<td>45 min</td>
														<td><span class="label label-success">Arrived</span> <span class="label label-danger">Cancelled</span> </td>
														<td>
															<a href="javascript:void(0)" class="btn-danger btn-action"><i class="fa fa-remove"></i></a>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>Maria James <i class="ms-1 fa fa-phone"></i></b></a><span class="notes">lorem porem ipsum</span></td>
														<td>Sally</td>
														<td><span class="service-label">Brows</span></td>
														<td>1h 42 min</td>
														<td><span class="label label-warning">Delayed</span> <span class="label label-success">Arrived</span></td>
														<td>
															<a href="javascript:void(0)" class="btn-warning btn-action"><i class="fa fa-bell-o"></i></a>
															<a href="javascript:void(0)" class="btn-success btn-action"><i class="fa fa-check"></i></a>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>David Jones <i class="ms-1 fa fa-phone"></i></b></a><span class="notes">lorem porem ipsum</span></td>
														<td>James</td>
														<td><span class="service-label">Nails</span></td>
														<td>45 min</td>
														<td><span class="label label-success">Arrived</span> <span class="label label-danger">Cancelled</span></td>
														<td>
															<a href="javascript:void(0)" class="btn-danger btn-action"><i class="fa fa-remove"></i></a>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><b>John Smith <i class="ms-1 fa fa-phone"></i></b></a><span class="notes">lorem porem ipsum</span></td>
														<td>Jane</td>
														<td><span class="service-label">Brows</span></td>
														<td>1h 42 min</td>
														<td><span class="label label-success">Arrived</span> <span class="label label-warning">Delayed</span></td>
														<td>
															<a href="javascript:void(0)" class="btn-warning btn-action"><i class="fa fa-bell-o"></i></a>
															<a href="javascript:void(0)" class="btn-success btn-action"><i class="fa fa-check"></i></a>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editwaitlistModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
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
		<div class="modal-dialog modal-lg">
			<form method="POST" id="add_waitlist_form" name="add_waitlist_form"  enctype="multipart/form-data" action="{{route('business.save_waitlist')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Client To Waitlist</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						@if(!empty($settings))
						<div class="row">
							@foreach($settings as $setting)
							<?php 
								$type = 'text';
								if($setting->type == 'type1'){
									$type = 'text';
								}else if($setting->type == 'type3'){
									$type = 'number';
								}else if($setting->type == 'type5'){
									$type = 'date';
								}else if($setting->type == 'type7'){
									$type = 'url';
								}else{
									$type = 'text';
								}
							?>
							@if($setting->is_show == 1)
								<div class="col-md-6">
									<div class="form-group">
										<label>{{$setting->label}}</label>
										@if($setting->type == 'type1' || $setting->type == 'type3' || $setting->type == 'type5' ||$setting->type == 'type7')
										<input type="{{$type}}" name="{{$setting->name}}" id="{{$setting->name}}" class="form-control" placeholder="{{$setting->placeholder}}" data-id = "{{$setting->id}}" data-required ="{{$setting->is_required}}" <?php if($setting->is_required) {echo 'required';} else{ echo ''; }?>>
										@elseif($setting->type == 'type2')
										<textarea name="{{$setting->name}}" id="{{$setting->name}}" placeholder="{{$setting->placeholder}}" data-id = "{{$setting->id}}" data-required ="{{$setting->is_required}}" <?php if($setting->is_required) {echo 'required';} else{ echo ''; }?>></textarea>
										@elseif($setting->type == 'type4')
										<select name="{{$setting->name}}" placeholder="{{$setting->placeholder}}" id="{{$setting->name}}" data-id = "{{$setting->id}}" data-required ="{{$setting->is_required}}" <?php if($setting->is_required) {echo 'required';} else{ echo ''; }?>>
											@if($setting->options != Null)
												<?php $getoptions = explode(',',$setting->options); ?>
												@foreach($getoptions as $option)
												<option>{{$option}}</option>
												@endforeach
											@endif
										</select>
										@else

										@endif
									</div>
									<span id="error_{{$setting->id}}" name="error_{{$setting->id}}"></span>
								</div>
								@endif
								@endforeach
							</div>
							@endif
						</div>
						<div class="modal-footer">
							<button type="submit" id="submit_btn" class="btn-nav btn-action">Add</button>
						</div>
					</div>
			</form>
			</div>
		</div>
		<div class="modal fade" id="editwaitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit  John</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Client Name</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Client Name" value="John Smith">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone</label>
									<input type="tel" name="phone" class="form-control" placeholder="Enter Phone No" value="987654210">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Choose service</label>
									<select  class="form-control">
										<option>--Select--</option>
										<option selected>Nails</option>
										<option>Brows</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Staff</label>
									<select  class="form-control">
										<option>--Select--</option>
										<option selected>Sally</option>
										<option>Adam</option>
										<option>Jane</option>
										<option>James</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="waittimesModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Current Wait Times</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Overall</b></label>
									<div class="d-flex justify-content-between">
										<span>Estimated</span>
										<span>1 min</span>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Staff</b></label>
									<div class="d-flex justify-content-between">
										<span>First available</span>
										<span>n/a</span>
									</div>
									<div class="d-flex justify-content-between">
										<span>Jane</span>
										<span>16.6 hours</span>
									</div>
									<div class="d-flex justify-content-between">
										<span>Sally</span>
										<span>n/a</span>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Service</b></label>
									<div class="d-flex justify-content-between">
										<span>Brows</span>
										<span>n/a</span>
									</div>
									<div class="d-flex justify-content-between">
										<span>Nails</span>
										<span>n/a</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-nav btn-action">Ok</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="waitlinesModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Overview Of Lines</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Overall</b></label>
									<div class="d-flex justify-content-between">
										<span>Individuals</span>
										<span>1 in line</span>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Staff</b></label>
									<div class="d-flex justify-content-between">
										<span>Jane</span>
										<span>1 in line</span>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Service</b></label>
									<div class="d-flex justify-content-between">
										<span>Nails</span>
										<span>1 in line</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-nav btn-action">Ok</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="addfiltersModal" tabindex="-1" aria-labelledby="addfiltersModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Filters</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Staff</b></label>
									<div class="staff-checkbox">
										<div class="staffinner">
											<input type="checkbox" id="checkbox1" name="checkbox" style="display:none">
											<label for="checkbox1">Jane</label>
										</div>
										<div class="staffinner">
											<input type="checkbox" id="checkbox2" name="checkbox" style="display:none">
											<label for="checkbox2">Sally</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label><b>Service</b></label>
									<div class="staff-checkbox">
										<div class="staffinner">
											<input type="checkbox" id="checkbox3" name="checkbox" style="display:none">
											<label for="checkbox3">Nails</label>
										</div>
										<div class="staffinner">
											<input type="checkbox" id="checkbox4" name="checkbox" style="display:none">
											<label for="checkbox4">Brows</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Clear</button>
						<button type="button" class="btn-nav btn-action">Apply</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="addnoteModal" tabindex="-1" aria-labelledby="addnoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
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
									<textarea  class="form-control" placeholder="Write your note..." rows="5"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Cancel</button>
						<button type="button" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="editnoteModal" tabindex="-1" aria-labelledby="editnoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
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
									<textarea  class="form-control" placeholder="Write your note..." rows="5">Lorem Porem Ipsum</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Cancel</button>
						<button type="button" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade drawer right-align" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content"  id="abc">
					<div class="modal-header">
						<div class="modal-inner">
							<h5 class="modal-title" id="exampleModalLabel">John</h5>
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
								<button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes" type="button" role="tab" aria-controls="notes" aria-selected="false">Notes</button>
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
														<label for="checkbox11"><span class="label label-success"></span> Arrived</label>
														<input type="checkbox" id="checkbox11" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox12"><span class="label label-danger"></span> Cancelled</label>
														<input type="checkbox" id="checkbox12" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox13"><span class="label label-success"></span> Confirmed</label> 
														<input type="checkbox" id="checkbox13" name="checkbox1">
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="javascript:void(0)">
														<label for="checkbox14"><span class="label label-warning"></span> Delayed</label>
														<input type="checkbox" id="checkbox14" name="checkbox1">
													</a>
												</li>
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
										<span class="detail-left">Estimated wait</span>
										<span class="detail-right">1 min</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Waited</span>
										<span class="detail-right">23.5 hours</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Position in line</span>
										<span class="detail-right">1</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Phone</span>
										<span class="detail-right">078965 41200</span>
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
										<span class="detail-left">Staff</span>
										<span class="detail-right">Jane</span>
									</div>
								</div>
								<div class="form-group detailmain">
									<div class="d-flex justify-content-between">
										<span class="detail-left">Added by</span>
										<span class="detail-right">Navpreet Kaur</span>
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
								<div class="notes-main">
									<div class="d-flex align-items-center notes-inner">
										<div class="flex-grow-1 me-3 ">
											<p class="para mb-0">Lorem Porem Ipsum dolor.</p>
											<small class="text-muted"><i>May 24th at 11:23 AM </i></small>
										</div>
										<div class="flex-shrink-0">
											<a class="edit-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editnoteModal"><i class="fa fa-pencil"></i></a>
										</div>
									</div>
									<div class="d-flex align-items-center notes-inner">
										<div class="flex-grow-1 me-3 ">
											<p class="para mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
											<small class="text-muted"><i>May 24th at 11:23 AM </i></small>
										</div>
										<div class="flex-shrink-0">
											<a class="edit-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editnoteModal"><i class="fa fa-pencil"></i></a>
										</div>
									</div>
									<div class="d-flex align-items-center notes-inner">
										<div class="flex-grow-1 me-3 ">
											<p class="para mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
											<small class="text-muted"><i>May 24th at 11:23 AM </i></small>
										</div>
										<div class="flex-shrink-0">
											<a class="edit-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editnoteModal"><i class="fa fa-pencil"></i></a>
										</div>
									</div>
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
														<span class="detail-right">Waiting</span>
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
														<span class="detail-right">First available</span>
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
														<span class="detail-right">59 min</span>
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
														<span class="detail-right">Complete</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"><span class="label label-success">Arrived</span> <span class="label label-danger">Cancelled</span></span>
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
														<span class="detail-right">Complete</span>
													</div>
												</div>
												<div class="form-group detailmain">
													<div class="d-flex justify-content-between">
														<span class="detail-left">Status</span>
														<span class="detail-right"> <span class="label label-danger">Removed</span></span>
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
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer p-0">
						<div class="details-tab m-0 px-3 py-2">
							<button type="button" class="btn-alert btn-nav btn-action">Alert</button>
							<button type="button" class="btn-nav btn-action">Serve</button>
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
@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script>
	$(function() {
	  	$("form[name='add_waitlist_form']").validate({
	  	// ignore: [],
	    rules: {
	    },
	    errorPlacement: function(error, element) {
	        if (element.attr("name") == "client_id") {
	          error.insertAfter("#client_id_err");
	        }
	        else {
	          error.insertAfter(element);
	        }
	      },
	    // Specify validation error messages
	    messages: 
	    {
		    'Name': {
		        required: "Please enter name",
		    },
		    'Email': {
		        required: "Please enter email",
		    },
	    },
	    submitHandler: function(form) {

	      form.submit();
	    }
	  });
	});
</script>
@endsection