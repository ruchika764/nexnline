@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="wrapper">
    <section class="login-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-8">
                    <div class="contact-form-box">
                        <div class="login-head">
                            <h3>Login</h3>
                            <p>Please fill the details below to access your account</p>
                        </div>
                        <form method="POST" action="{{ route('business.do_login') }}" name="signIn">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group" id="useremail">
                                    <i class="fa fa-envelope"></i>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group" id="userpassword">
                                    <i class="fa fa-lock"></i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                    <i class="fa fa-eye" id="togglePassword" style="position: relative;right: 24px;top: -32px;float: right;"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"  <?php if(isset($_COOKIE['useremail'])){echo 'checked';}?>>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        </div>
                            </div>
                            
                            <div class="customcheckbox text-end">
                                <span><a href="{{ route('business.forgot_password') }}">Forgot Password ?</a></span>
                            </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn-nav btn-login" name="submit-btn">Login</button>
                                                </div>
                                            </form>
                                            <div class="bottom-box">
                                              <div class="text">Don't have an account? <a href="{{route('business.signup')}}" class="signup">Signup</a></div>
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
    $("form[name='signIn']").validate({
    // Specify validation rules
    rules: {
    email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "email") {
          error.insertAfter("#useremail");
        }
        else if (element.attr("name") == "password") {
          error.insertAfter("#userpassword");
        }
        else {
          error.insertAfter(element);
        }
      },
    // Specify validation error messages
    messages: {
      email: {
          required: "<strong>Please enter your email</strong>",
          email: "<strong>Please enter your valid email id</strong>",
        },
      password: {
          required: "<strong>Please enter your password</strong>",
          minlength: "<strong>Password length should be atleast 8 characters.</strong>"
        }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

    $(document).ready(function(){
       const togglePassword = document.querySelector('#togglePassword');
     const password = document.querySelector('#password');
    
     togglePassword.addEventListener('click', function (e) {
       // toggle the type attribute
       const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
       password.setAttribute('type', type);
       // toggle the eye slash icon
       this.classList.toggle('fa-eye-slash');
   });
   });
</script>
@endsection
