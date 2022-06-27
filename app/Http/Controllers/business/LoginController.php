<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{	
	public function __construct()
   {
       $this->middleware('guest')->except('logout');
   }

   public function username()
    {
        return 'email';
    }

	//this function is used to get the view page for login
    public function login()
    {   
        return view('login');
    }

    //this function is used to get the view page for signup
    public function signup()
    {   
        return view('signup');
    }

    //this function is used to get the view page for forgot password
    public function forgot_password(){
    	return view('forgot-password');
    }
    //this function is used for login user ,checck for validations and if user athenticated then will redirect to user dashboard.
    public function do_login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:8'
      ]);

      $remember = (!empty($request->remember)) ? true : false;

      // Attempt to log the user in
      if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        //remember me functionality code starts
        if($remember==true){
            setcookie ("useremail",$request->email,time()+ (10 * 365 * 24 * 60 * 60));  
            setcookie ("userpassword",$request->password,time()+ (10 * 365 * 24 * 60 * 60));   
          }else{
            setcookie ("useremail",'',5);  
            setcookie ("userpassword",'',5);
          }
          //remember me functionality code ends

        // if successful, then redirect to their intended location
        return redirect()->intended(route('business.waitlist'));
      }
      // if unsuccessful, then redirect back to the login with the form data
        return $this->sendFailedLoginResponse($request);
    }

    
    //if login failed then send error message to the user
     protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username()))
            ->withErrors($errors);
    }


    //function for creating new user 
    public function doSignup(Request $request)
    {

        $user = new User();
        $validator = Validator::make($request->all(),  [
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->passes()) {
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);
            $user->save();
            //send login email to user code starts
            $login_link = url('/') . '/business/login';
            $email_data = array('username' => $user->name);
            $email_to = $user->email;
            $name_to = $user->name;
            Mail::send('emails.success', $email_data, function ($message) use ($name_to, $email_to) {
                $message->to($email_to, $name_to)->subject('Register Successfully - Nexnline');
                $message->from('ruchikaindiit@gmail.com', 'Nexnline');
            });

            //send login email to user code ends
            Auth::login($user);
            return redirect()->route('business.waitlist');
        } else {
            return redirect()->back()->with('error', 'User with this email already exists. Please try with another email.');
        }
    }

    //for logout
    public function logout()
    { 
                Auth::logout();
        // Auth::guard('user')->logout();
        return redirect()->route('business.login');
    }

    //function to send the email for reset password
    public function user_forgotpassword(Request $request)
    {
        if (!empty($request->email)) {
            $check = User::select('*')->where('email', $request->email)->first();

            if (!empty($check)) {
                $token = hexdec(uniqid());

                $update = DB::table('users')
                    ->where('id',  $check->id)
                    ->update(['remember_token' => $token]);
                $reset_link = url('/') . '/business/user_resetpassword/' . $token;
                $email_data = array('username' => $check->name, 'reset_link' => $reset_link);
                $email_to = $check->email;
                $name_to = $check->name;
                Mail::send('emails.password', $email_data, function ($message) use ($name_to, $email_to) {
                    $message->to($email_to, $name_to)->subject('Reset Password - Nexnline');
                    $message->from('ruchikaindiit@gmail.com', 'Nexnline');
                });
                Session::flash('message', 'Reset password mail sent! Please check your inbox.');
                return redirect()->back();
            } else {
                return redirect()->back()->with('error', 'Entered email does not exist.');
                $data['status'] = 0;
            }
        } else {
            return redirect()->back()->with('error', 'Please enter a valid email.');
            $data['status'] = 0;
        }
    }

    public function user_resetpassword($token)
    {
        $check_token = User::select('*')->where('remember_token', $token)->first();
        if (!empty($check_token)) {
            $user_id = $check_token->id;
        } else {
            $user_id = 0;
        }
        return view('resetpassword', compact('user_id'));
    }

    public function user_set_password(Request $request)
    {


        $id = $request->user_id;

        $ruser = User::findOrFail($id);
        $validator = Validator::make(
            $request->all(),
            [
                'newpassword' => ['required', 'min:8'],
                'confirmpassword' => ['required', 'same:newpassword'],
            ],
            $messages = [
                'newpassword.min' => 'The new password must contain atleast 8 characters',
                'confirmpassword.same' => 'Confirm password must be same as your new password.'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $input['password'] = "";

        if ($request->newpassword == $request->confirmpassword) {
            $ruser->password = Hash::make($request->newpassword);
            $ruser->save();
            Session::flash('message', 'Your Password Updated Successfully!!');
        } else {
            Session::flash('error', 'Confirm Password Does not match.');
        }
        return redirect()->back();
    }

    
}
