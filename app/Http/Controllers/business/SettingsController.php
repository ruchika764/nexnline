<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function settings(){
    	$userid = Auth::User()->id;
    	$settings = Settings::select('*')->where('user_id',$userid)->get();
    	return view('business.settings',compact('settings'));
    }

    //post method function for adding new fields
    public function save_field(Request $request){
        $user_id = Auth::User()->id;
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'field_name' => ['required', 'string', 'max:255']
        ]);
         
        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('business.settings'))->withErrors($validator)->withInput();
          }
                
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

    public function getfields(Request $request)
    {
        $id = $request->id;
        $settings_data = Settings::select('*')->where('id', $id)->get();
        return response()->json(['success' => true, 'settings_data' => $settings_data]);
    }

    public function update_fields(Request $request){
    	
        $user_id = Auth::User()->id;
        $field_id = $request->fieldid;
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'edit_field_name' => ['required', 'string', 'max:255']
        ]);
         
        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('business.settings'))->withErrors($validator)->withInput();
          }
                
        $input = $request->all();
        $settings_data = Settings::select('*')->where('id',$field_id)->first();
        
        $settings_data->name = $request->edit_field_name;
        $settings_data->label = $request->edit_field_label;
        $settings_data->type = $request->edit_field_type;
        $settings_data->placeholder = $request->edit_field_placeholder;
        $settings_data->default_value = $request->edit_field_default;
        if(isset($request->edit_required_field)){
        	$settings_data->is_required = $request->edit_required_field;
        }
        if(isset($request->edit_maximum_number)){
        	$settings_data->maximum_number = $request->edit_maximum_number;
        }
        if(isset($request->edit_minimum_number)){
        	$settings_data->minimum_number = $request->edit_minimum_number;
        }
        if(isset($request->edit_options)){
        	$edit_value = $request->edit_options;
        	$settings_data->options = $edit_value[0];
        }
        $settings_data->save();
       Session::flash('message', 'Fields Updated Successfully!!');
       return redirect(route('business.settings'));
    }

    public function updatetoggle(Request $request){
    	$updateId = $request->id;
    	$updateVal = $request->val;
    	$settings_data = Settings::select('*')->where('id',$updateId)->first();
    	
    	$settings_data->is_show = $updateVal;
    	$settings_data->save();
    	return response()->json(['success' => true]);
    }
}
