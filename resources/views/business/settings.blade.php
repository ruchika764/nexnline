@extends('business.layouts.app')
@section('title', 'Settings')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<style type="text/css">
    .copy-notification {
        color: #ffffff;
	    background-color: rgba(0,0,0,0.8);
	    padding: 20px;
	    border-radius: 4px;
	    position: fixed;
	    top: 77%;
	    left: 50%;
	    width: 299px;
	    margin-top: -30px;
	    margin-left: -85px;
	    display: none;
	    text-align: left;
    }
    .updateSuccessfull{
    	color: #ffffff;
	    background-color: rgba(0,0,0,0.8);
	    padding: 20px;
	    border-radius: 4px;
	    position: fixed;
	    top: 87%;
	    left: 50%;
	    width: 299px;
	    margin-top: -30px;
	    margin-left: -85px;
	    display: none;
	    text-align: left;
    }
    .tag {
    	background-color: #a3dbba;
    }


</style>
@endsection
@section('content')
<div class="wrapper">
	<!-- Banner Start -->
	<section class="breadcrumb-main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Settings</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="{{route('index')}}">Home</a></li>
						<li class="breadcrumb-item">Settings</li>
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
				<div class="col-lg-8 col-xl-9 col-xxl-9 col-md-8 settings mb-mob-15">
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
					<div class="card">
						<div class="card-header   p-3">
							<div class="row align-items-center">
								<div class="col-6">
									<h2 class="card-title">Customer Input Fields </h2>
								</div>
								<div class="col-6 text-end">
									<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addfieldModal" class="btn-action btn-nav" >Add Field</a>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<div class="dashboard-listing">
								@if(count($settings) > 0)
								@foreach($settings as $setting)
							  	<div class="d-flex dashboard-inner p-3">
									<div class="flex-shrink-0">
										<label class="switch">
											@if($setting->is_show == 1)
										  <input class="change_toggle" type="checkbox" checked value="{{$setting->is_show}}" data-id="{{$setting->id}}">
										  @else
										  <input class="change_toggle" type="checkbox" value="{{$setting->is_show}}" data-id="{{$setting->id}}">
										  @endif
										  <span class="slider round"></span>
										</label>
									</div>
									<div class="flex-grow-1 ms-3 d-flex align-items-center">
										<h5 class="mt-0  w-100 flex-column">{{$setting->name}}
											@if($setting->is_required == 1)
											<small class="text-muted mt-1"><i>Required</i></small>
											@endif
										</h5>
										<button type="button" data-bs-toggle="modal"  data-id="{{$setting->id}}" class="btn-clear btn-nav btn-action edit_field">Edit</button>
									</div>
							   	</div>
							   	@endforeach
							   	@endif
								  	 	  
									</div>
								</div>
							</div>
						  <div class="card mt-3">
								<div class="card-header   p-3">
									<h2 class="card-title">Public Links</h2>
								</div>
								<div class="card-body">
								<div class="form-group">
									<label>Waitlist</label>
									<div class="input-group publiclinks">
									   <input type="text" name="waitlistLink" id="waitlistLink" class="form-control" value="{{Auth::User()->waitlist_public_link}}" readonly>
									   <button class="waitlistcopy"><i class="fa fa-copy"></i></button>
								   </div>
								</div>
								<div class="form-group">
									<label>Bookings</label>
									<div class="input-group publiclinks">
									   <input type="text" name="bookingLink" id="bookingLink" class="form-control" value="{{Auth::User()->booking_public_link}}" readonly>
									   <button class="bookingcopy"><i class="fa fa-copy"></i></button>
								   </div>
								</div>
								</div>
							</div>
						  
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
		<div class="modal fade" id="addfieldModal" tabindex="-1" aria-labelledby="addfieldModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="POST" id="add_field_form" name="add_field_form"  enctype="multipart/form-data" action="{{route('business.save_field')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New Field</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="field_name" id="field_name" class="form-control" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Label</label>
									<input type="text" name="field_label" id="field_label" class="form-control" placeholder="Enter Label">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Type</label>
									<select class="form-control appearance-auto" name="field_type" id="field_type">
									  <option value="type1">Text Field</option>
									  <option value="type2">Text Area</option>
									  <option value="type3">Number</option>
									  <option value="type4">Selection</option>
									  <option value="type5">Date</option>
									  <option value="type6">Checkbox</option>
									  <option value="type7">URL</option>
									</select>
								</div>
							</div>
							<div class="row show_number_div" style="display: none;">
								<div class="col-md-6">
									<div class="form-group">
										<label>Minimum Number</label>
										<input type="number" min ="1" name="minimum_number" id="minimum_number" class="form-control" placeholder="Enter minimum number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Maximum Number</label>
										<input type="number" min ="1" name="maximum_number" id="maximum_number" class="form-control" placeholder="Enter maximum number">
									</div>
								</div>
							</div>
							<div class="row show_option_div" style="display: none;">
								<div class="col-md-12">
									<div class="form-group">
										<label>Options</label>
										<input id="add_options" class="form-control" value="" name="add_options[]" data-role="tagsinput" type="text" placeholder="Add options and Press enter">

									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Placeholder</label>
									<input type="text" name="field_placeholder" id="field_placeholder" class="form-control" placeholder="Enter placeholder">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group common_default">
									<label>Default Value</label>
									<input type="text" name="field_default"  id="field_default"class="form-control" placeholder="Enter Default Value">
								</div>
								<div class="form-group option_default" style="display: none;">
									<label>Default Value</label>
									<select class="form-control appearance-auto" name="default_option" id="default_option">
									  <option value="">No Set</option>
									</select>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label>Required</label>
									<input class="form-check-input" type="checkbox" name="required_field" id="required_field">
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
	</div>
			<div class="modal fade" id="editfieldModal" tabindex="-1" aria-labelledby="editfieldModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form method="POST" name="edit_field_form" id="edit_field_form" action="{{ route('business.update_fields') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-content">
                  <input type="hidden" name="fieldid" value="" id="fieldid">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Field</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="edit_field_name" id="edit_field_name" class="form-control" placeholder="Enter Name" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Label</label>
									<input type="text" name="edit_field_label" id="edit_field_label" class="form-control" placeholder="Enter Label" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Type</label>
									<select class="form-control appearance-auto" id="edit_field_type" name="edit_field_type">
									  <option value="type1" selected="">Text Field</option>
									  <option value="type2">Text Area</option>
									  <option value="type3">Number</option>
									  <option value="type4">Selection</option>
									  <option value="type5">Date</option>
									  <option value="type6">Checkbox</option>
									  <option value="type7">URL</option>
									</select>
								</div>
							</div>
							<div class="row show_edit_number_div" style="display: none;">
								<div class="col-md-6">
									<div class="form-group">
										<label>Minimum Number</label>
										<input type="number" min ="1" name="edit_minimum_number" id="edit_minimum_number" class="form-control" placeholder="Enter minimum number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Maximum Number</label>
										<input type="number" min ="1" name="edit_maximum_number" id="edit_maximum_number" class="form-control" placeholder="Enter maximum number">
									</div>
								</div>
							</div>
							<div class="row show_edit_option_div" style="display: none;">
								<div class="col-md-12">
									<div class="form-group">
										<label>Options</label>
										<input id="edit_options" class="form-control" value="" name="edit_options[]" data-role="tagsinput" type="text" placeholder="Add options and Press enter">

									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Placeholder</label>
									<input type="text" name="edit_field_placeholder" id="edit_field_placeholder" class="form-control" placeholder="Enter placeholder" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Default Value</label>
									<input type="text" name="edit_field_default" class="form-control" id="edit_field_default" placeholder="Enter Default Value" value="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Required</label>
									<input class="form-check-input" type="checkbox" name="edit_required_field" id="edit_required_field">
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
	@endsection

	@section('scripts')
	<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
	<script type="text/javascript">

        $(document).ready(function () {
			

            $(".waitlistcopy").click(function (event) {
                event.preventDefault();
                var value = $('#waitlistLink').val();
                CopyToClipboard(value, true, "Copied link to clipboard!");
            });

            $(".bookingcopy").click(function (event) {
                event.preventDefault();
                var value = $('#bookingLink').val();
                CopyToClipboard(value, true, "Copied link to clipboard!");
            });

            $('#field_type').on('change',function(){
            	var getVal = $(this).val();
            	if(getVal == 'type3'){
            		$('.show_number_div').css('display','inline-flex');
            		$('#common_default').css('display','inline-flex');
			        $('#option_default').css('display','none');
			        $('.show_option_div').css('display','none');
            	}else if(getVal == 'type4'){
            		$('.show_option_div').css('display','inline-flex');
            		$('#option_default').css('display','inline-flex');
            		$('.show_number_div').css('display','none');
            	}else{
            		$('.show_option_div').css('display','none');
            		$('.show_number_div').css('display','none');
            		$('#common_default').css('display','inline-flex');
			        $('#option_default').css('display','none');
            	}
            });

            $('#edit_field_type').on('change',function(){
            	var getVal = $(this).val();
            	if(getVal == 'type3'){
            		$('.show_edit_number_div').css('display','inline-flex');
            		$('#common_default').css('display','inline-flex');
			        $('#option_default').css('display','none');
			        $('.show_edit_option_div').css('display','none');
            	}else if(getVal == 'type4'){
            		$('.show_edit_option_div').css('display','inline-flex');
            		$('#option_default').css('display','inline-flex');
            		$('.show_edit_number_div').css('display','none');
            	}else{
            		$('.show_edit_option_div').css('display','none');
            		$('.show_edit_number_div').css('display','none');
            		$('#common_default').css('display','inline-flex');
			        $('#option_default').css('display','none');
            	}
            });

            $("#add_options").on("change",function(e) {
			    if(event.key == 'Enter') {
			        $('#common_default').css('display','none');
			        $('#option_default').css('display','inline-flex');
			    }
			});

            $('input[name="field_name"]').keyup(function() {
    			$('input[name="field_label"]').val($(this).val());
			});

			$('.change_toggle').change(function(){
				var toggleval = $(this).val();
				// var updatedval = 0;
				if(toggleval == 1){
					$(this).val(0);
				}else{
					$(this).val(1);
				}
				var updatedval = $(this).val();
				var currentid = $(this).attr('data-id');
				
				$.ajax({
			      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      },
			      url: '{{ route("business.updatetoggle") }}',
			      type: 'POST',
			      data: {
			        id: currentid,
			        val:updatedval
			      },
			      success: function(response) {
			        if(response.success == true){
			        	var NotificationText = 'Updated Successfully!!';
			        	var notifications = $("div.updateSuccessfull");
                		notifications = $("<div/>", { "class": "updateSuccessfull", text: NotificationText });
			        	$("body").append(notifications);
			        	notifications.fadeIn("slow", function () {
                    	setTimeout(function () {
	                        notifications.fadeOut("slow", function () {
	                            notifications.remove();
	                        });
                    	}, 1000);
                	});
		        }else{
		        	var NotificationText = 'Error!!';
			        	var notifications = $("div.updateSuccessfull");
                		notifications = $("<div/>", { "class": "updateSuccessfull", text: NotificationText });
			        	$("body").append(notifications);
			        	notifications.fadeIn("slow", function () {
                    	setTimeout(function () {
	                        notifications.fadeOut("slow", function () {
	                            notifications.remove();
	                        });
                    	}, 1000);
                	});
		        }
			        
			      }
		    });

			});

           

            $("form[name='add_field_form']").validate({
    			// ignore: [],
    			// Specify validation rules
			    rules: {
			    'field_name': {
			        required: true,
			      },
			      'maximum_number':{
			      	required: true,
			      },
			      'minimum_number':{
			      	required:true
			      },
			      'add_options[]':{
			      	required:true
			      }
			    },
			    // Specify validation error messages
			    messages: {
			      'field_name':{
			         required: "<strong>Please enter field name</strong>",
			      },
			      'maximum_number':{
			         required: "<strong>Please enter maximum number</strong>",
			      },
			      'minimum_number':{
			         required: "<strong>Please enter minimum number</strong>",
			      },
			      'add_options[]':{
			      	required: "<strong>Please add options</strong>",
			      }
			    },
			    // Make sure the form is submitted to the destination defined
			    // in the "action" attribute of the form when valid
			    submitHandler: function(form) {
			      form.submit();
			    }
			  });

            	$("form[name='edit_field_form']").validate({
    			// ignore: [],
    			// Specify validation rules
			    rules: {
			    'edit_field_name': {
			        required: true,
			      },
			    'edit_maximum_number':{
			      	required: true,
			    },
			    'edit_minimum_number':{
			      	required:true
			    },
			    'edit_options[]':{
			      	required:true
			    }
			    },
			    // Specify validation error messages
			    messages: {
			      'edit_field_name':{
			         required: "<strong>Please enter field name</strong>",
			      },
			      'edit_maximum_number':{
			         required: "<strong>Please enter maximum number</strong>",
			      },
			      'edit_minimum_number':{
			         required: "<strong>Please enter minimum number</strong>",
			      },
			      'edit_options[]':{
			      	required: "<strong>Please add options</strong>",
			    }
			    },
			    // Make sure the form is submitted to the destination defined
			    // in the "action" attribute of the form when valid
			    submitHandler: function(form) {
			      form.submit();
			    }
			  });


        });

        function CopyToClipboard(value, showNotification, notificationText) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(value).select();
            document.execCommand("copy");
            $temp.remove();

            if (typeof showNotification === 'undefined') {
                showNotification = true;
            }
            if (typeof notificationText === 'undefined') {
                notificationText = "Copied link to clipboard";
            }

            var notificationTag = $("div.copy-notification");
            if (showNotification && notificationTag.length == 0) {
                notificationTag = $("<div/>", { "class": "copy-notification", text: notificationText });
                $("body").append(notificationTag);

                notificationTag.fadeIn("slow", function () {
                    setTimeout(function () {
                        notificationTag.fadeOut("slow", function () {
                            notificationTag.remove();
                        });
                    }, 1000);
                });
            }
        }



        $(document).on('click', '.edit_field', function(e){
        	var id = $(this).data("id");
		    $.ajax({
		      headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		      },
		      url: '{{ route("business.getfields") }}',
		      type: 'POST',
		      data: {
		        id: id
		      },
		      success: function(response) {
		        $.each(response.settings_data, function(i, d) {
		          $('#fieldid').val(d.id);
		          $('#edit_field_name').val(d.name);
		          $('#edit_field_label').val(d.label);
		          $('#edit_field_placeholder').val(d.placeholder);
		          $('#edit_field_default').val(d.default_value);
		          $("#edit_field_type option[value='"+ d.type +"']").attr("selected", "selected");
		          if(d.type == 'type3'){
		          	$('.show_edit_number_div').css('display','inline-flex');
            		$('#common_default').css('display','inline-flex');
			        $('#option_default').css('display','none');
			        $('.show_edit_option_div').css('display','none');
			    }else if(d.type == 'type4'){
            		$('.show_edit_option_div').css('display','inline-flex');
            		$('#option_default').css('display','inline-flex');
            		$('.show_edit_number_div').css('display','none');
            	}else{
            		$('.show_edit_option_div').css('display','none');
            		$('.show_edit_number_div').css('display','none');
            		$('#common_default').css('display','inline-flex');
			        $('#option_default').css('display','none');
            	}

		          if(d.is_required == 1){
		          	$('#edit_required_field').prop('checked', true);
		          	$('#edit_required_field').val(d.is_required);
		          }else{
		          	$('#edit_required_field').prop('checked', false);
		          	$('#edit_required_field').val(0);
			      }
			      $('#edit_maximum_number').val(d.maximum_number);
		          $('#edit_minimum_number').val(d.minimum_number);

		          var options = d.options;
		          if(options != null){
		          	var opt_val = options.split(",");
			          $.each(opt_val, function(i, d) { 
			          	$('#edit_options').tagsinput('add', d);	
			          });
		          }
		          

		        });
		        $('#editfieldModal').modal('show');
		      }
		    });
        });

        

    </script>
	@endsection