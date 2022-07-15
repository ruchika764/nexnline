<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Services;
use App\Models\Resources;
use DB;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function resources(){
    	$services = Services::select('*')->where('user_id',Auth::User()->id)->where('is_deleted','0')->where('status','1')->get();
    	return view('business.resources',compact('services'));
    }

    //post method function for adding new resource
    public function save_resource(Request $request){
        $user_id = Auth::user()->id;
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'resource_name' => ['required', 'string', 'max:255'],
          'resource_description' => ['required', 'string'],
          'phone_number' => ['required'],
          'resource_email' => ['required', 'string', 'email', 'max:255', 'unique:resources,email'],
          'service_provided' => ['required']
        ]);
         
        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('business.resources'))->withErrors($validator)->withInput();
          }
                
        $input = $request->all();
        $resources_data = new Resources();
        if($request->hasfile('profileimg')){
            $file = $request->file('profileimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/business/resources/',$filename);
            $resources_data->avatar = $filename;
        }
        $resources_data->user_id = $user_id;
        $resources_data->name = $request->resource_name;
        $resources_data->email = $request->resource_email;
        $resources_data->description = $request->resource_description;
        $resources_data->phone_number = $request->phone_number;
        $resources_data->services_provided = implode(',',$request->service_provided);
        $resources_data->save();
       Session::flash('message', 'New Resource Added Successfully!!');
       return redirect(route('business.resources'));
    }

    function get_resourceListing(Request $request)
    {
        $columns = array( 
                            0 =>'avatar', 
                            1 =>'name',
                            2=> 'phone_number',
                            3 => 'email',
                            4 => 'action'
                        );
  
        
       $data = Resources::select('*')->where('is_deleted','=','0')->where('status','=','1');

       if($request->has('name')){
            $data->where(function($query) use($request) {
                $query->Where ( 'name', 'LIKE', "%{$request->name}%" )
                	->orWhere ( 'email', 'LIKE', "%{$request->name}%" );
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
											<li><a class="dropdown-item edit_resource" href="javascript:void(0)" data-id="'.$post->id.'"><i class="fa fa-pencil"></i>Edit</a></li>
											<li><a class="dropdown-item delete_resource"  data-id="'.$post->id.'"href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
										</ul>
									</div>';

                $image1 =  asset('/assets/business/resources/'.$post->avatar);
                $imagedata = '<img class="userimg-wh rounded-circle mCS_img_loaded" src="'.$image1.'"/>';
                $nestedData['name'] = !empty(@$post->name) ? $post->name : "N/A";
                $nestedData['avatar'] = !empty(@$imagedata) ? $imagedata : "N/A";
                $nestedData['email'] = !empty(@$post->email) ? $post->email : "N/A";
                $nestedData['phone_number'] = !empty(@$post->phone_number) ? $post->phone_number : "N/A";
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

    public function delete_resource(Request $request){

        $deleted_id = $request->deleted_id;
        $service = Resources::select('*')->where('id',$deleted_id)->first();
        $service->is_deleted = '1';
        $service->save();
        Session::flash('message', 'Resource Deleted Successfully!');
        return response()->json(['success' => true]);
    }

    public function getresource(Request $request)
    {
        $id = $request->id;
        $resource_data = Resources::select('*')->where('id', $id)->get();
        return response()->json(['success' => true, 'resource_data' => $resource_data]);
    }

    //post method function for adding new resource
    public function update_resources(Request $request){
        $id = $request->resourceid;
        $resources = Resources::findOrFail($id);
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'edit_resource_name' => ['required', 'string', 'max:255'],
          'edit_description' => ['required', 'string'],
          'edit_phone_number' => ['required'],
          'edit_email' => ['required', 'string', 'email', 'max:255', 'unique:resources,email,'.$id]
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('business.resources'))->withErrors($validator)->withInput();
          } 

                
        $input = $request->all();
        $oldphoto = $resources['avatar'];
        if($request->hasfile('editprofileimg')){
            $file = $request->file('editprofileimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .  '.' . $extension;
            $file->move('assets/business/resources/',$filename);
            $resources->avatar = $filename;
            if($oldphoto != '' && $oldphoto != 'default.jpg')
            { 
                $image = 'assets/business/resources/'.$oldphoto;
                // $filename = str_replace('app\Http\Controllers\Admin', '', __DIR__).$image;
                // unlink($filename);
                 if(\File::exists($image)) {
                   \File::delete($image);
               }
            }
        }
        $resources->name = $request->edit_resource_name;
        $resources->email = $request->edit_email;
        $resources->description = $request->edit_description;
        $resources->phone_number = $request->edit_phone_number;
        // $resources->services_provided = implode(',',$request->service_provided);
        $resources->save();
       Session::flash('message', 'Resource Updated Successfully!!');
       return redirect(route('business.resources'));
    }

}
