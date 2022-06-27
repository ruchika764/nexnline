@extends('business.layouts.app')
@section('title', 'Services')
@section('content')
		<div class="wrapper">
			<!-- Banner Start -->
			<section class="breadcrumb-main">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Services</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
								<li class="breadcrumb-item">Services</li>
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
											<h2 class="card-title">Services </h2>
										</div>
										<div class="col-6 text-end">
											<a href="javascript:void(0)" class="btn-action btn-nav" data-bs-toggle="modal" data-bs-target="#serviceModal">Add New</a>
										</div>
									</div>
								</div>
								
								<div class="card-body p-3">
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
											 <table class="table table-hover table-center mb-0 datatable" id="services_table">
											
												<thead>
													<tr>
														<th>Image</th>
														<th>Service Name</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody id="service_tableListing">
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
		
		<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form method="POST" id="service_form" name="service_form"  enctype="multipart/form-data" action="{{route('business.save_service')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Service Name</label>
									<input type="text" name="service_name" id="service_name" class="form-control" placeholder="Enter Service Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  rows="4" id="service_description" name="service_description" class="form-control" placeholder="Enter Description"></textarea>
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Duration (mins)</label>
									<input type="number" min="1" max="60" name="service_duration" id="service_duration" class="form-control" placeholder="Time In Minutes">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Price (USD)</label>
									<input type="number" name="service_price" id="service_price" class="form-control" placeholder="Price In USD">
								</div>
							</div><div class="col-md-6">
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
		<div class="modal fade" id="editserviceModal" tabindex="-1" aria-labelledby="editserviceModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form method="POST" name="edit_service_form" id="edit_service_form" action="{{ route('business.update_services') }}">
                  @csrf
                  <input type="hidden" name="serviceid" value="" id="serviceid">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Service Name</label>
									<input type="text" name="edit_service_name" id="edit_service_name" class="form-control" placeholder="Enter Service Name" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea  rows="4" name="edit_description" id="edit_description" class="form-control" placeholder="Enter Description" value=""></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Duration (mins)</label>
									<input type="number" min="1" max="60" name="edit_duration" id="edit_duration" class="form-control" placeholder="Time In Minutes">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Price (USD)</label>
									<input type="number" name="edit_price" id="edit_price" class="form-control" placeholder="Price In USD">
								</div>
							</div>
							<div class="col-md-6">
								  <div class="form-group uploadimg">
										    <label>
											   Image
											</label>
										    <div class="profileimg">
										    	<i class="fa fa-camera"></i>
											     <img class="editserviceimg" src="" style="display: none;" src="img/service1.jpg"/>
											   </div>
										    <label for="profileimg" class="browsebtn">
											  Browse
											</label>
											<input type="file" id="editprofileimg" name="editprofileimg" style="display:none"/>
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
		<div class="modal fade" id="delete-popup" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<input type="hidden" name="serviceid" id ="serviceid"/>
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
    $("form[name='service_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    service_name: {
        required: true,
      },
      service_description: {
        required: true,
      },
      service_price: {
        required: true,
      },
      service_duration:{
         required: true
      }
    },
    // Specify validation error messages
    messages: {
      service_name:{
         required: "<strong>Please enter service name</strong>",
      },
      service_description:{
         required: "<strong>Please enter service description</strong>",
      },
      service_duration: {
          required: "<strong>Please enter service duration</strong>",
        },
       service_price:{
         required: "<strong>Please enter service price</strong>",
        }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

    $("form[name='edit_service_form']").validate({
    	ignore: [],
    // Specify validation rules
    rules: {
    edit_service_name: {
        required: true,
      },
      edit_description: {
        required: true,
      },
      edit_price: {
        required: true,
      },
      edit_duration:{
         required: true
      }
    },
    // Specify validation error messages
    messages: {
      edit_service_name:{
         required: "<strong>Please enter service name</strong>",
      },
      edit_description:{
         required: "<strong>Please enter service description</strong>",
      },
      edit_duration: {
          required: "<strong>Please enter service duration</strong>",
        },
       edit_price:{
         required: "<strong>Please enter service price</strong>",
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
        var oTable = $('#services_table').DataTable({
            "sDom": "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            bDestroy: true,
            processing: true,
            serverSide: true,
            ajax: { 
                url: '{{Route("business.get_serviceListing")}}', 
                data : function (d) {
                    d.name = $('input[name=name]').val();
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
                            data: 'image',
                            name: 'Image'
                        },
                        {
                            data: 'service_name',
                            name: 'Service Name'
                        },
                        {
                            data: 'action',
                            name: 'Action',
                            orderable: false
                        }
                    ]
        });

         $(document).on('click', '.delete_service', function(e){
    		var serviceid = $(this).attr('data-id');
    		$('#serviceid').val(serviceid);
    		$('#delete-popup').modal('show');
  		});

        $(document).on('click', '#Cancel', function(e){
    		$('#delete-popup').modal('hide');
  		});

	     $(document).on('click', '#confirm', function(e){  
	    var deleted_id = $('#serviceid').val();
	    $.ajax({
	      url: '{{Route("business.delete_service")}}',
	      type: 'POST',
	      data : {
	              '_token': "{{ csrf_token() }}",
	              'deleted_id' : deleted_id
	          },
	      success: function(response) {
	          if ($.isEmptyObject(response.error)) {
	              window.location.href = "{{route('business.services')}}";
	              $(window).scrollTop(0);
	          } else {
	              printErrorMsg(response.error);
	          }
	        }
	    });
	  });

 	$(document).on('click', '.edit_service', function() {

	    var id = $(this).data("id");
	    $.ajax({
	      headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      },
	      url: '{{ route("business.getservices") }}',
	      type: 'POST',
	      data: {
	        id: id
	      },
	      success: function(response) {
	        $.each(response.services_data, function(i, d) {
	          $('#serviceid').val(d.id);
	          $('#edit_service_name').val(d.service_name);
	          $('#edit_description').text(d.description);
	          var getduration = d.duration;
	          var duration = getduration.split(":");
	          $('#edit_duration').val(duration[1]);
	          $('#edit_price').val(d.price);
	        });
	        $('#editserviceModal').modal('show');
	      }
	    });


  	});

     });
</script>
@endsection