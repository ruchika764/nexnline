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
								<li class="breadcrumb-item active"><a href="
									{{route('index')}}">Home</a></li>
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
							<div>
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
						</div>
							<div class="card">
								<div class="card-header p-3">
									<div class="row align-items-center">
										<div class="col-md-6">
											<h2 class="card-title">Resources </h2>
										</div>
										<div class="col-md-6 text-end">
											<a href="javascript:void(0)" class="btn-action btn-nav" data-bs-toggle="modal" data-bs-target="#resourceModal">Add New</a>
										</div>
										<div class="form-group mb-0 mt-2">
                  							<div class="input-group">
                    							<input type="text" class="form-control" placeholder="Search" aria-label="Username" name="search_input" id="search_input">
              								</div>
                						</div>
									</div>
								</div>
								<div class="card-body p-3">
									<div class="tablescroll">
										<div class=" mCustomScrollbar" data-mcs-theme="dark">
												<table class="table table-striped" id="resources_table">
												<thead>
													<tr>
														<th>Image</th>
														<th>Resource Name</th>
														<th>Phone No.</th>
														<th>Email</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody id="resource_tableListing">
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
				<form method="POST" id="resource_form" name="resource_form"  enctype="multipart/form-data" action="{{route('business.save_resource')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
									<input type="text" name="resource_name" id="resource_name" class="form-control" placeholder="Enter Resource Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  rows="4" id="resource_description" name="resource_description" class="form-control" placeholder="Enter Description"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone No.</label>
									<input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone No">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" name="resource_email" id="resource_email" class="form-control" placeholder="Enter Email Address">
								</div>
							</div>
								<div class="col-md-12">
								  <div class="form-group" id="serviceserr">
								  <label>Services provided</label>
									<select class="multipleChosen" name="service_provided[]" id="service_provided" multiple="true" placeholder="Select services">
										<option value="" disabled>Select the service</option>
										@foreach($services as $service)
										<option value="{{$service->id}}">{{$service->service_name}}</option>
										@endforeach
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
											     <i class="fa fa-camera imgicon"></i>
											     <img class="serviceimg" src="" style="display: none;" />
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
						<button type="submit" class="btn-nav btn-action">Save</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		<div class="modal fade" id="editresourceModal" tabindex="-1" aria-labelledby="editresourceModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<form method="POST" name="edit_resource_form" id="edit_resource_form" action="{{ route('business.update_resources') }}">
                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="modal-content">
                  		<input type="hidden" name="resourceid" value="" id="resourceid">
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
													<input type="text" name="edit_resource_name" id="edit_resource_name" class="form-control" placeholder="Enter Resource Name" value="">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Description</label>
													<textarea  rows="4" name="edit_description" id="edit_description" class="form-control" placeholder="Enter Description"></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone No.</label>
													<input type="tel" name="edit_phone_number" id="edit_phone_number" class="form-control" placeholder="Enter Phone No" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Email Address</label>
													<input type="email" name="edit_email" id="edit_email" class="form-control" placeholder="Enter Email Address" value="">
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
								<button type="" class="btn-nav btn-action">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    		<input type="hidden" name="resourceid" id ="resourceid"/>
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
@endsection


@section('scripts')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.imgicon').css('display','block');
		$('.serviceimg').css('display','none');
	})
	$(function(){
$('#profileimg').on('change', function() {
    var file = $(this).get(0).files;
    var reader = new FileReader();
    reader.readAsDataURL(file[0]);
    reader.addEventListener("load", function(e) {
    var image = e.target.result;
    console.log(image,'image');
    $('.imgicon').css('display','none');
    $('.serviceimg').css('display','block');
	$(".serviceimg").attr('src', image);
});
});
});

	$(function(){
$('#editprofileimg').on('change', function() {
    var file = $(this).get(0).files;
    var reader = new FileReader();
    reader.readAsDataURL(file[0]);
    reader.addEventListener("load", function(e) {
    var image = e.target.result;
    console.log(image,'image');
    $('.imgicon').css('display','none');
    $('.serviceimg').css('display','block');
	$(".serviceimg").attr('src', image);
});
});
});
</script>

<script>
    $(function() {

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

    $("form[name='resource_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    resource_name: {
        required: true,
      },
      resource_description: {
        required: true,
      },
      phone_number: {
        required: true,
        phoneUS: true
      },
      resource_email:{
         required: true,
         checkEmail: true
      },
      service_provided:{
      	required: true
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "service_provided") {
          error.insertAfter("#serviceserr");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
      resource_name:{
         required: "<strong>Please enter resource name</strong>",
      },
      resource_description:{
         required: "<strong>Please enter resource description</strong>",
      },
      resource_email: {
          required: "<strong>Please enter email</strong>",
          checkEmail: "<strong>Please enter valid email id</strong>",
        },
        phone_number: {
        required: "<strong>Please enter phone number</strong>",
        phoneUS: "<strong>Phone number length should be in between 7-15 digits</strong>"
      },
      service_provided:{
      	required: "<strong>Please select services</strong>",
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

    $("form[name='edit_resource_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    edit_resource_name: {
        required: true,
      },
      edit_description: {
        required: true,
      },
      edit_phone_number: {
        required: true,
        phoneUS: true
      },
      edit_email:{
         required: true,
         checkEmail: true
      }
    },
    // Specify validation error messages
    messages: {
      edit_resource_name:{
         required: "<strong>Please enter resource name</strong>",
      },
      edit_description:{
         required: "<strong>Please enter resource description</strong>",
      },
      edit_email: {
          required: "<strong>Please enter email</strong>",
          checkEmail: "<strong>Please enter valid email id</strong>",
        },
        eddit_phone_number: {
        required: "<strong>Please enter your phone number</strong>",
        phoneUS: "<strong>Phone number length should be in between 7-15 digits</strong>"
      },
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
        var oTable = $('#resources_table').DataTable({
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("business.get_resourceListing")}}', 
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
                            data: 'avatar',
                            name: 'Image'
                        },
                        {
                            data: 'name',
                            name: 'Resource Name'
                        },
                        {
                            data: 'phone_number',
                            name: 'Phone No.'
                        },
                        {
                            data: 'email',
                            name: 'Email'
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

         $(document).on('click', '.delete_resource', function(e){
    		var serviceid = $(this).attr('data-id');
    		$('#resourceid').val(serviceid);
    		$('#delete-popup').modal('show');
  		});

        $(document).on('click', '#Cancel', function(e){
    		$('#delete-popup').modal('hide');
  		});

	     $(document).on('click', '#confirm', function(e){  
	    var deleted_id = $('#resourceid').val();
	    $.ajax({
	      url: '{{Route("business.delete_resource")}}',
	      type: 'POST',
	      data : {
	              '_token': "{{ csrf_token() }}",
	              'deleted_id' : deleted_id
	          },
	      success: function(response) {
	          if ($.isEmptyObject(response.error)) {
	              window.location.href = "{{route('business.resources')}}";
	              $(window).scrollTop(0);
	          } else {
	              printErrorMsg(response.error);
	          }
	        }
	    });
	  });

 	$(document).on('click', '.edit_resource', function() {

	    var id = $(this).data("id");
	    $.ajax({
	      headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      },
	      url: '{{ route("business.getresource") }}',
	      type: 'POST',
	      data: {
	        id: id
	      },
	      success: function(response) {
	        $.each(response.resource_data, function(i, d) {
	          $('#resourceid').val(d.id);
	          $('#edit_resource_name').val(d.name);
	          $('#edit_description').text(d.description);
	          $('#edit_phone_number').val(d.phone_number);
	          $('#edit_email').val(d.email);
	        });
	        $('#editresourceModal').modal('show');
	      }
	    });


  	});

     });
</script>
@endsection