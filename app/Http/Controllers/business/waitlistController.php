<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Waitlist;
use App\Models\Settings;
use DB;
use Illuminate\Support\Facades\Auth;

class waitlistController extends Controller
{
    public function waitlist(){
    	$userid = Auth::User()->id;
    	$settings = Settings::select('*')->where('user_id',$userid)->get();
    	return view('business.waitlist',compact('settings'));
    }

    //post method function for adding new fields
    public function save_waitlist(Request $request){
        $user_id = Auth::User()->id;
                
        $input = $request->all();
        $settings_data = new Settings();
        
        $settings_data->user_id = $user_id;
        $settings_data->name = $request->field_name;
        $settings_data->label = $request->field_label;
        $settings_data->type = $request->field_type;
        $settings_data->placeholder = $request->field_placeholder;
        $settings_data->default_value = $request->field_default;
        if(isset($request->required_field)){
        	$settings_data->is_required = $request->required_field;
        }
        if(isset($request->maximum_number)){
        	$settings_data->maximum_number = $request->maximum_number;
        }
        if(isset($request->minimum_number)){
        	$settings_data->minimum_number = $request->minimum_number;
        }
        if(isset($request->add_options)){
        	$add_value = $request->add_options;
        	$settings_data->options = $add_value[0];
        }
        $settings_data->save();
       Session::flash('message', 'New Field Added Successfully!!');
       return redirect(route('business.settings'));
    }

    
}
