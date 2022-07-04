@extends('business.layouts.app')
@section('title', 'Profile')
@section('content')
		<div class="wrapper">
			<!-- Banner Start -->
			<section class="breadcrumb-main">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Profile</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
								<li class="breadcrumb-item">Profile</li>
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
							<div class="card profile">
								<div class="card-header p-3">
								   <h2 class="card-title">Basic Information </h2>
								</div>
								<div class="card-body p-3">
									<form method="POST" id="profile_form" name="profile_form"  enctype="multipart/form-data" action="{{route('business.update_profile')}}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
      									<input type="hidden" name="userid" id="userid" value="{{$user_details->id}}">
									<div class="row">
									   <div class="col-md-9">
									      <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<div class="input-group" id="userfname">
													  <i class="fa fa-user"></i>
													  <input type="text" id="name" name="name" class="form-control" placeholder="Enter First Name" value="{{$user_details->name}}">
													</div>
												</div>
											</div>
											@error('name')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<div class="input-group" id="userlname">
													   <i class="fa fa-user"></i>
													  <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter First Name" value="{{$user_details->lname}}">
													</div>
												</div>
											</div>
											@error('lname')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>Email Address</label>
													<div class="input-group" id="useremail">
													 <i class="fa fa-envelope"></i>
													  <input type="email" name="email" class="form-control" placeholder="Enter Email Address" id="email" value="{{$user_details->email}}">
												   </div>
												</div>
											</div>
											@error('email')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>Opening Hours <small class="ms-2">Open 24/7</small></label>
													<div class="input-group">
													 <button data-bs-toggle="modal" data-bs-target="#openinghoursModal" class="opening-hours">Set Opening Hours</button>
												   </div>
												</div>
											</div>
									    	</div>
										</div>
										<?php
                           if($user_details->avatar != '') {
                              $image =  asset('/assets/business/' .$user_details->avatar); 
                           }else { 
                              $image =  asset('/assets/business/default.jpg'); 
                           }
                        ?>
										  <div class="col-md-3">
										  <div class="form-group uploadimg">
										    <label>
											   Image
											</label>
										    <div class="profileimg">
											     <!-- <i class="fa fa-camera imgicon"></i> -->
											     <img class="serviceimg" src="{{$image}}"/>
											   </div>
										    <label for="profileimg" class="browsebtn">
											  Browse
											</label>
											<input type="file" id="profileimg" name="profileimg" style="display:none"/>
										  </div>
									    	</div>
											<div class="col-md-12">
												<div class="heading">
												  <h2>Business Address</h2>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Street Address</label>
													<div class="input-group" id="useraddress1">
													 <i class="fa fa-map-marker"></i>
													  <input type="text" name="address1" id="address1" class="form-control" placeholder="Street Address" value="{{$user_details->address1}}">
												   </div>
												</div>
											</div>
											@error('address1')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>Address Line 2</label>
													<div class="input-group" id="useraddress2">
													 <i class="fa fa-map-marker"></i>
													  <input type="text" name="address2" id="address2" value="{{$user_details->address2}}" class="form-control" placeholder="Address Line 2">
												   </div>
												</div>
											</div>
											@error('address2')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label>
													<div class="input-group" id="usercity">
													 <i class="fa fa-map-pin"></i>
													  <input type="text" name="city" id="city" value="{{$user_details->city}}" class="form-control" placeholder="Enter City" value="Buford">
												   </div>
												</div>
											</div>
											@error('city')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>Zip / Postal code</label>
													<div class="input-group" id="userzipcode">
													  <i class="fa fa-map-o"></i>
													  <input type="text" name="zipcode" id="zipcode" value="{{$user_details->zipcode}}"class="form-control" placeholder="Enter Zip / Postal code">
												   </div>
												</div>
											</div>
											@error('zipcode')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
											<div class="col-md-6">
												<div class="form-group">
													<label>Country</label>
													<div class="input-group" id="usercountry">
													 <i class="fa fa-map-marker"></i>
													 <select  class="form-control" name="country" id="country">
													 	<option value="">Please Select Country</option>
								                    @foreach($countries as $country)
								                    <option value ="{{ $country->id }}" {{ $user_details->country == $country->id ? "selected" : "" }}>{{$country->name}}</option>
								                    @endforeach
														  
														</select>
												   </div>
												</div>
											</div>
											@error('country')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
												<div class="col-md-6">
												<div class="form-group">
													<label>State / Province</label>
													<div class="input-group" id="userstate">
													 <i class="fa fa-map-o"></i>
													 <select  class="form-control" name="state">
													 	<option value="">Please Select State</option>
													  @foreach($states as $state)
								                    <option value ="{{ $state->id }}" {{ $user_details->state == $state->id ? "selected" : "" }}>{{$state->state}}</option>
								                    @endforeach 
													</select>
												   </div>
												</div>
											</div>
											@error('state')
				                              <span class="invalid-feedback" role="alert">
				                                  <strong>{{ $message }}</strong>
				                              </span>
                           					@enderror
										</div>
										<button type="submit" class="btn-action btn-nav">Update</button>
									</form>
								</div>
							</div>
							<div class="card profile mt-3">
								<div class="card-header p-3">
								   <h2 class="card-title">Change Password</h2>
								</div>
								<div class="card-body p-3">
								<form method="POST" id="change_password" name="change_password"  enctype="multipart/form-data" action="{{route('business.update_password')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="userid" id="userid" value="{{$user_details->id}}">
									<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Old Password</label>
													<div class="input-group" id="usercpass">
													  <i class="fa fa-lock"></i>
													   <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Enter Old Password">
													</div>
												</div>
												@error('cpass')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>New Password</label>
													<div class="input-group" id="usernewpass">
													   <i class="fa fa-lock"></i>
													    <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password">
													</div>
												</div>
												 @error('newpass')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                           <p id="passwordHelpBlock" class="form-text text-muted pb-0">
                                                       Your password must have atleast 8 characters.
                                                   </p>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Confirm New Password</label>
													<div class="input-group" id="userenewpass">
													 <i class="fa fa-lock"></i>
													 <input type="password" class="form-control" name="renewpass" id="renewpass" placeholder="Enter Confirm New Password">
												   </div>
												</div>
												@error('renewpass')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                                   @enderror
											</div>
										</div>
										<button type="submit" class="btn-action btn-nav">Update</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="openinghoursModal" tabindex="-1" aria-labelledby="addnoteModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Opening Hours</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Monday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
					
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Tuesday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
					
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Wednesday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
					
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Thursday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
					
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Friday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
					
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Saturday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
				
						<div class="row align-items-center opening-hours-list">
							<div class="col-md-3 col-6">
							  <div class="form-group">
								<h2>Sunday</h2>
							  </div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <select class="form-control ">
									 <option  value="true" selected>Open</option>
									 <option  value="false">Closed</option>
									 <option  value="all">All day</option>
								  </select>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="09:00am"/>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="form-group">
								   <input text="text" class="form-control timepicker" value="06:00pm"/>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn-clear btn-nav btn-action">Clear All</button>
						<button type="button" class="btn-clear btn-nav btn-action">Reset</button>
						<button type="button" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</div>
		</div>
@endsection
		
		

@section('scripts')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.imgicon').css('display','none');
	});
$(function(){
$('#profileimg').on('change', function() {
    var file = $(this).get(0).files;
    var reader = new FileReader();
    reader.readAsDataURL(file[0]);
    reader.addEventListener("load", function(e) {
    var image = e.target.result;
    console.log(image,'image');
    $('.imgicon').css('display','none');
	$(".serviceimg").attr('src', image);
});
});
});

$.validator.methods.checkEmail = function( value, element ) {
        return this.optional( element ) || /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test( value );
    }

    $.validator.methods.phoneUS = function( value, element ) {
        var filter = /^(\+91-|\+91|0)?\d{7,15}$/;
    if (filter.test(value)) {
      
        return true;
    }
    else {
     
        return false;
    }
    }

</script>

<script>
    $(function() {
    $("form[name='profile_form']").validate({
    // Specify validation rules
    rules: {
    name: {
        required: true,
      },
      lname: {
        required: true,
      },
      email: {
        required: true,
        checkEmail: true
      },
      address1:{
         required: true
      }, 
       city: {
        required: true,
      },
      country:{
      	required: true
      },
      state:{
      	required: true
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "name") {
          error.insertAfter("#userfname");
        }else if(element.attr("name") == "lname"){
        	error.insertAfter("#userlname");
        }else if(element.attr("name") == "email"){
        	error.insertAfter("#useremail");
        }else if(element.attr("name") == "address1"){
        	error.insertAfter("#useraddress1");
        }else if(element.attr("name") == "city"){
        	error.insertAfter("#usercity");
        }else if(element.attr("name") == "country"){
        	error.insertAfter("#usercountry");
        }else if(element.attr("name") == "state"){
        	error.insertAfter("#userstate");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
      name:{
         required: "<strong>Please enter your first name</strong>",
      },
      lname:{
         required: "<strong>Please enter your last name</strong>",
      },
      email: {
          required: "<strong>Please enter your email</strong>",
          checkEmail: "<strong>Please enter your valid email id</strong>",
        },
        address1:{
         required: "<strong>Please enter your address</strong>",
        },
        city: {
        required: "<strong>Please enter your city</strong>",
      	},
      	country: {
        required: "<strong>Please select your country</strong>",
      	},
      	state: {
        required: "<strong>Please select your state</strong>",
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

<script>
    $(function() {
    $("form[name='change_password']").validate({
    // Specify validation rules
    rules: {
        cpass: "required",
        newpass: {
        required: true,
        minlength: 8
      },
      renewpass: {
        required: true,
        minlength: 8,
        equalTo : '[name="newpass"]'
      },
    },errorPlacement: function(error, element) {
        if (element.attr("name") == "cpass") {
          error.insertAfter("#usercpass");
        }else if(element.attr("name") == "newpass"){
        	error.insertAfter("#usernewpass");
        }else if(element.attr("name") == "renewpass"){
        	error.insertAfter("#userenewpass");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
        cpass: "Please enter your old password",
        newpass: {
        required: "Please enter your new password",
        minlength: "Password length should be atleast 8 characters."
      },
      renewpass: {
        required: "Please re-enter the above password",
        minlength: "Password length should be atleast 8 characters.",
        equalTo:"New password and confirm password must be same"
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

@endsection