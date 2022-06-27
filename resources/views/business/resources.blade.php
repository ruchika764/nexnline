@extends('business.layouts.app')
@section('title', 'Resources')
@section('content')
		<div class="wrapper">
			<!-- Banner Start -->
			<section class="breadcrumb-main">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Resources</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item">Resources</li>
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
						<div class="col-lg-8 col-xl-9 col-xxl-9 col-md-9">
							<div class="card">
								<div class="card-header p-3">
									<div class="row align-items-center">
										<div class="col-md-6">
											<h2 class="card-title">Resources </h2>
										</div>
										<div class="col-md-6 text-end">
											<a href="javascript:void(0)" class="btn-action btn-nav" data-bs-toggle="modal" data-bs-target="#resourceModal">Add New</a>
										</div>
									</div>
								</div>
								<div class="card-body p-3">
									<div class="tablescroll">
										<div class=" mCustomScrollbar" data-mcs-theme="dark">
											<table id="example" class="table table-striped" style="width:100%">
												<thead>
													<tr>
														<th>Image</th>
														<th>Resource Name</th>
														<th>Phone No.</th>
														<th>Email</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="userimg-wh">J</span></td>
														<td><b>Jane</b></td>
														<td>+91 9872080436</td>
														<td>jane@gmail.com</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editresourceModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="userimg-wh">S</span></td>
														<td><b>Sally</b></td>
														<td>+91 9872080436</td>
														<td>sally@gmail.com</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editresourceModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="userimg-wh">D</span></td>
														<td><b>David</b></td>
														<td>+91 9872080436</td>
														<td>david@gmail.com</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editresourceModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="userimg-wh">S</span></td>
														<td><b>Adam</b></td>
														<td>+91 9872080436</td>
														<td>adam@gmail.com</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editresourceModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="userimg-wh">S</span></td>
														<td><b>Stephen</b></td>
														<td>+91 9872080436</td>
														<td>stephen@gmail.com</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editresourceModal"><i class="fa fa-pencil"></i>Edit</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td><span class="userimg-wh">M</span></td>
														<td><b>Maria</b></td>
														<td>+91 9872080436</td>
														<td>maria@gmail.com</td>
														<td>
															<div class="dropdown dropup d-inline-block">
																<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-ellipsis-h"></i>
																</a>
																<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
																	<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editresourceModal"><i class="fa fa-pencil"></i>Edit</a></li>
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
		<div class="modal fade" id="resourceModal" tabindex="-1" aria-labelledby="resourceModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Resource</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
						<div class="col-md-9">
						   <div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Resource Name</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Resource Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  rows="4" name="description" class="form-control" placeholder="Enter Description"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone No.</label>
									<input type="tel" name="phone" class="form-control" placeholder="Enter Phone No">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" name="email" class="form-control" placeholder="Enter Email Address">
								</div>
							</div>
								<div class="col-md-12">
								  <div class="form-group">
								  <label>Services provided</label>
									<select class="multipleChosen" multiple="true">
										<option value="1">Nails</option>
										<option value="2">Brows</option>
										</select>	
						          </div>
					         	</div>
							</div>
							</div>
							
						
						<div class="col-md-3">
								  <div class="form-group uploadimg">
										    <label>
											   Image
											</label>
										    <div class="profileimg">
											     <i class="fa fa-camera"></i>
											   </div>
										    <label for="profileimg" class="browsebtn">
											  Browse
											</label>
											<input type="file" id="profileimg" name="profileimg" style="display:none"/>
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
		<div class="modal fade" id="editresourceModal" tabindex="-1" aria-labelledby="editserviceModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Resource</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
						<div class="col-md-9">
						   <div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Resource Name</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Resource Name" value="Jane">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  rows="4" name="description" class="form-control" placeholder="Enter Description">Lorem porem ipsum dolor sit amet</textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone No.</label>
									<input type="tel" name="phone" class="form-control" placeholder="Enter Phone No" value="+91 9872080436">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" name="email" class="form-control" placeholder="Enter Email Address" value="jane@gmail.com">
								</div>
							</div>
								<div class="col-md-12">
								  <div class="form-group">
								  <label>Services provided</label>
									<select class="multipleChosen" multiple="true">
										<option value="1" selected>Nails</option>
										<option value="2" selected>Brows</option>
										</select>	
						          </div>
					         	</div>
							</div>
							</div>
						<div class="col-md-3">
								  <div class="form-group uploadimg">
										    <label>
											   Image
											</label>
										    <div class="profileimg">
											     <i class="fa fa-camera"></i>
											   </div>
										    <label for="profileimg" class="browsebtn">
											  Browse
											</label>
											<input type="file" id="profileimg" name="profileimg" style="display:none"/>
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

		@endsection