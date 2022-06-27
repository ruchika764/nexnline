@extends('layouts.app')
@section('title', 'Sign Up')
@section('content')

<div class="wrapper">
    <section class="login-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-8">
                    <div class="contact-form-box">
                        <div class="login-head">
                            <h3>Signup</h3>
                            <p>Please fill the details below to create an account</p>
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
</div>
                        <form method="POST" action="{{ route('business.dosignup') }}" name="signup">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group" >
                                <label>Your Name</label>
                                <div class="input-group" id="usernamediv">
                                    <i class="fa fa-user"></i>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label>Your Email Address</label>
                                    <div class="input-group" id="useremaildiv">
                                        <i class="fa fa-envelope"></i>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group" >
                            <label>Your Password</label>
                            <div class="input-group" id="userpassworddiv">
                                <i class="fa fa-lock"></i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

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
                                    <input id="confirm_password" type="password" class="form-control" name="confirm_password" required autocomplete="new-password" placeholder="Enter Confirm Password">
                                </div>
                        </div>
                        <div class="form-group mt-30">
                            <button  class="btn-nav btn-login" name="submit-btn" type="submit">Signup</button>
                        </div>
                    </form>
                    <div class="bottom-box">
                        <div class="text">Already have an account? <a href="{{route('business.login')}}" class="signup">Login</a></div>
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
    $("form[name='signup']").validate({
    // Specify validation rules
    rules: {
        username:{
            required: true
        },
    email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 8
      },
      confirm_password: {
            required: true,
            equalTo: '[name="password"]'
       }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "username") {
          error.insertAfter("#usernamediv");
        }
        else if (element.attr("name") == "email") {
          error.insertAfter("#useremaildiv");
        }
        else if (element.attr("name") == "password") {
          error.insertAfter("#userpassworddiv");
        }
        else if (element.attr("name") == "confirm_password") {
          error.insertAfter("#userconfirmdiv");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
        username:{
            required: "<strong>Please enter your name</strong>"    
        },
      email: {
          required: "<strong>Please enter your email</strong>",
          email: "<strong>Please enter your valid email id</strong>",
        },
      password: {
          required: "<strong>Please enter your password</strong>",
          minlength: "<strong>Password length should be atleast 8 characters.</strong>"
        },
        confirm_password: {
            required: "<strong>Please enter confirm password</strong>",
            equalTo: "<strong>Password and confirm password must be same</strong>"
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

