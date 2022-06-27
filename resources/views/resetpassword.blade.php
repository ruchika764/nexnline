@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')
			<div class="wrapper">
                <section class="login-page">
						  <div class="container">
							<div class="row justify-content-center">
								  <div class="col-lg-6 col-sm-8">
									 <div class="contact-form-box">
									      <div class="login-head">
												<h3>Reset Password</h3>
											</div>
											<div id="response">
  @if(Session::has('message'))
  <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('message') }}
  </div>
  @endif
  @if(Session::has('errors'))
  <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ Session::get('errors') }}
  </div>
  @endif
</div>
<form  action="{{ route('business.user_set_password') }}" method="POST" id="reset_password" name="reset_password">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="form-group" >
                            <label>New Password</label>
                            <div class="input-group" id="userpassworddiv">
                                <i class="fa fa-lock"></i>
                                <input id="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword" required autocomplete="new-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" >
                            <label>Confirm Password</label>
                                <div class="input-group" id="userconfirmdiv">
                                    <i class="fa fa-lock"></i>
                                    <input id="confirmpassword" type="password" class="form-control" name="confirmpassword" required autocomplete="new-password" placeholder="Enter Confirm Password">
                                </div>
                        </div>
											
												<div class="form-group mt-30">
													<button type="submit" class="btn-nav btn-login " name="submit-btn" id="reset_password_btn">Reset Password</button>
												</div>
											</form>
											<div class="bottom-box">
											  <div class="text">Back To <a href="{{route('business.login')}}" class="signup">Login</a></div>
											</div>
										</div>
								  </div>
							</div>
							  
						  </div>
				</section>
	       </div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
    $('#reset_password_btn').click(function(){
    $("form[name='reset_password']").validate({
    // Specify validation rules
    rules: {
      newpassword: {
        required: true,
        minlength: 8
      },
      confirmpassword: {
        required: true,
        equalTo: '[name="newpassword"]'
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "newpassword") {
          error.insertAfter("#userpassworddiv");
        }else if(element.attr("name") == "confirmpassword"){
          error.insertAfter("#userconfirmdiv");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
      newpassword: {
        required: "<strong>Please enter new password</strong>",
         minlength: "<strong>Password length should be atleast 8 characters.</strong>"
    },
    confirmpassword: {
        required: "<strong>Please enter confirm password</strong>",
        equalTo: "<strong>Password and confirm password must be same</strong>"
    }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
       $form.submit();
    }
  });
});
  </script>

@endsection