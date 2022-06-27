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
												<h3>Forgot Password</h3>
												<p>Please fill the registered email address below to reset your password</p>
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
										 <form  name="forget_password" method="POST"
                        action="{{ route('business.user_forgotpassword') }}">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
						<div class="form-group">
							<label>Email Address</label>
							<div class="input-group" id="useremail">
							  	<i class="fa fa-envelope"></i>
							  	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Enter Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
													</div>
												</div>
											
												<div class="form-group mt-30">
													<button type="submit" class="btn-nav btn-login " name="submit-btn">Send</button>
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
<script>
    $(function() {
    $("form[name='forget_password']").validate({
    // Specify validation rules
    rules: {
        email: {
        required: true,
        email: true
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "email") {
          error.insertAfter("#useremail");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
        email: "<strong>Please enter your valid email id</strong>"
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