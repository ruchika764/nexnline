<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        $userid = Auth::user()->id; 
        $user_details = User::findOrFail($userid);
        $countries = DB::table('countries')->select('*')->get();
        $states = DB::table('states')->select('*')->get();
        return view('business.profile',compact('user_details','countries','states'));
    }

    //post method function for updating the profile details
    public function update_profile(Request $request){
        $id = $request->userid;
        $User = User::findOrFail($id);
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'name' => ['required', 'string', 'max:255'],
          'lname' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
          'address1' => ['required'],
          'city' => ['required'],
          'country' => ['required'],
          'state' => ['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('business.profile'))->withErrors($validator)->withInput();
          } 

                
        $input = $request->all();
        $oldphoto = $User['avatar'];
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/business/',$filename);
            $input['avatar'] = $filename;
            if($oldphoto != '' && $oldphoto != 'default.jpg')
            { 
                $image = 'assets/business/'.$oldphoto;
                // $filename = str_replace('app\Http\Controllers\Admin', '', __DIR__).$image;
                // unlink($filename);
                 if(\File::exists($image)) {
                   \File::delete($image);
               }
            }
        }
        $User->update($input);
       Session::flash('message', 'Your Profile Updated Successfully!!');
       return redirect(route('business.profile'));
    }

    //post method to change the password of the seller.
     function update_password(Request $request)
    {
        $id = $request->userid;
        $user = User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            
        ],
        $messages = [
             'cpass' => 'required',
            'newpass' => 'required|min:8',
            'renewpass' => 'required|same:newpass',
        ]);
        if ($validator->fails()) {
          return redirect(route('business.profile'))->withErrors($validator);
        }

        $input['password'] = "";
        if ($request->cpass){
          if (Hash::check($request->cpass, $user->password))
          {
            if ($request->newpass == $request->renewpass){
                 $input['password'] = Hash::make($request->newpass);
                 $user->update($input);
                 Session::flash('message', 'Your Password Updated Successfully!!');
            }
            else{
                Session::flash('error', 'Confirm Password does not match.');
            }
          }
          else
          {
            Session::flash('error', 'Current Password does not match');
          }
        }
        else
        {
          Session::flash('error', 'Please fill the required fields');
        }
        return redirect(route('business.profile'));
    }
}
