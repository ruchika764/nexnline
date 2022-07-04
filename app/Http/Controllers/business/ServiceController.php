<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Services;
use DB;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function services(){
    	return view('business.services');
    }

    //post method function for adding new service
    public function save_service(Request $request){
        $user_id = Auth::user()->id;
        $Services = new Services();
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'service_name' => ['required', 'string', 'max:255'],
          'service_description' => ['required', 'string'],
          'service_duration' => ['required','min:1','max:60'],
          'service_price' => ['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('business.services'))->withErrors($validator)->withInput();
          } 

                
        $input = $request->all();
        $oldphoto = $Services['image'];
        if($request->hasfile('profileimg')){
            $file = $request->file('profileimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/business/services/',$filename);
            $Services->image = $filename;
            if($oldphoto != '' && $oldphoto != 'default.jpg')
            { 
                $image = 'assets/business/services/'.$oldphoto;
                // $filename = str_replace('app\Http\Controllers\Admin', '', __DIR__).$image;
                // unlink($filename);
                 if(\File::exists($image)) {
                   \File::delete($image);
               }
            }
        }
        $hour = '00';
        $min = $request->service_duration;
        $secs = '00';
        $duration = $hour.':'.$min.':'.$secs;
        $Services->user_id = $user_id;
        $Services->service_name = $request->service_name;
        $Services->description = $request->service_description;
        $Services->price = $request->service_price;
        $Services->duration = $duration;
        $Services->save();
       Session::flash('message', 'New Service Added Successfully!!');
       return redirect(route('business.services'));
    }

    function get_serviceListing(Request $request)
    {
        $columns = array( 
                            0 =>'image', 
                            1 =>'service_name',
                            2=> 'action'
                        );
  
        
       $data = services::select('*')->where('is_deleted','=','0')->where('status','=','1');

        if($request->has('name')){
            $data->where(function($query) use($request) {
                $query->Where ( 'service_name', 'LIKE', "%{$request->name}%" );
            });
        }

        // if ($request->get('status') != '') {
        //     $data = $data->where('status',$request->get('status'));
        // }

        $totalData = $data->count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        $posts = $data->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();

        $data = array();
        $status = '';
        if(!empty($posts))
        {
            foreach ($posts as $key => $post)
            {
                $action_html = '<div class="dropdown dropup d-inline-block">
										<a class="btn-action btn-view dropdown-toggle" href="javascript:void(0)" id="navbarDropdown'.$key.'" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
										<i class="fa fa-ellipsis-h"></i>
										</a>
										<ul class="dropdown-menu " aria-labelledby="navbarDropdown'.$key.'">
											<li><a class="dropdown-item edit_service" href="javascript:void(0)" data-id="'.$post->id.'"><i class="fa fa-pencil"></i>Edit</a></li>
											<li><a class="dropdown-item delete_service"  data-id="'.$post->id.'"href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
										</ul>
									</div>';

                $image1 =  asset('/assets/business/services/'.$post->image);
                $imagedata = '<img class="userimg-wh rounded-circle mCS_img_loaded" src="'.$image1.'"/>';
                $nestedData['service_name'] = !empty(@$post->service_name) ? $post->service_name : "N/A";
                $nestedData['image'] = !empty(@$imagedata) ? $imagedata : "N/A";
                $nestedData['action'] = $action_html;
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        return json_encode($json_data);
    }

    public function delete_service(Request $request){

        $deleted_id = $request->deleted_id;
        $service = Services::select('*')->where('id',$deleted_id)->first();
        $service->is_deleted = '1';
        $service->save();
        Session::flash('message', 'Service Deleted Successfully!');
        return response()->json(['success' => true]);
    }

    public function getservices(Request $request)
    {
        $id = $request->id;
        $services_data = Services::select('*')->where('id', $id)->get();
        return response()->json(['success' => true, 'services_data' => $services_data]);
    }

    //post method function for adding new service
    public function update_services(Request $request){
        dd($request->all());
        $id = $request->serviceid;
        $Services = Services::findOrFail($id);
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'edit_service_name' => ['required', 'string', 'max:255'],
          'edit_description' => ['required', 'string'],
          'edit_duration' => ['required','min:1','max:60'],
          'edit_price' => ['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('business.services'))->withErrors($validator)->withInput();
          } 

                
        $oldphoto = $Services['image'];
        if($request->hasfile('editprofileimg')){
            $file = $request->file('editprofileimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/business/services/',$filename);
            $Services->image = $filename;
            if($oldphoto != '' && $oldphoto != 'default.jpg')
            { 
                $image = 'assets/business/services/'.$oldphoto;
                // $filename = str_replace('app\Http\Controllers\Admin', '', __DIR__).$image;
                // unlink($filename);
                 if(\File::exists($image)) {
                   \File::delete($image);
               }
            }
        }
        $hour = '00';
        $min = $request->edit_duration;
        $secs = '00';
        $duration = $hour.':'.$min.':'.$secs;
        $Services->service_name = $request->edit_service_name;
        $Services->description = $request->edit_description;
        $Services->price = $request->edit_price;
        $Services->duration = $duration;
        $Services->save();
       Session::flash('message', 'Service Updated Successfully!!');
       return redirect(route('business.services'));
    }
}
