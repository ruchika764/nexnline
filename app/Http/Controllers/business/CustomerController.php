<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Customers;
use App\Models\customer_notes;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function customers(){
    	return view('business.customers');
    }

    //post method function for adding new resource
    public function save_customer(Request $request){
        $user_id = Auth::user()->id;
        
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'client_name' => ['required', 'string', 'max:255'],
          'client_number' => ['required']
        ]);
         
        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('business.customers'))->withErrors($validator)->withInput();
          }
                
        $input = $request->all();
        $customer_data = new Customers();
       
        $customer_data->user_id = $user_id;
        $customer_data->name = $request->client_name;
        $customer_data->phone_number = $request->client_number;
        $customer_data->save();

        //add data for notes if added code starts
        if(isset($request->client_notes) && $request->client_notes != ''){
        	$add_notes = new customer_notes();
        	$add_notes->user_id = $user_id;
        	$add_notes->customer_id = $customer_data->id;
        	$add_notes->notes_data = $request->client_notes;
        	$add_notes->save();
        
        }
        //add data for notes if added code ends
       Session::flash('message', 'New Customer Added Successfully!!');
       return redirect(route('business.customers'));
    }

    function get_customerListing(Request $request)
    {
        $columns = array( 
                            0 =>'name', 
                            1 =>'phone_number',
                            2=> 'visit_count',
                            3 => 'updated_at',
                            4 => 'action'
                        );
  
        
       $data = Customers::select('*')->where('is_deleted','=','0')->where('status','=','1');

       if($request->has('name')){
            $data->where(function($query) use($request) {
                $query->Where ( 'name', 'LIKE', "%{$request->name}%" )
                	->orWhere ( 'phone_number', 'LIKE', "%{$request->name}%" );
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
									<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa fa-comment-o"></i>Chat</a></li>	
										<li><a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-clock-o"></i>Add To Waitlist</a></li>
										<li><a class="dropdown-item edit_customer" href="javascript:void(0)" data-id="'.$post->id.'"><i class="fa fa-pencil"></i>Edit</a></li>
											<li><a class="dropdown-item delete_customer"  data-id="'.$post->id.'"href="javascript:void(0)"><i class="fa fa-trash"></i>Remove</a></li>
									</ul>
							</div>';
				// Tue, May 24 2022, 2:31pm
                $last_modified = Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('D, M d Y, h:i:A');
                if(!empty($post->name)){
                	$set_name = '<a class ="get_details" style = "cursor: pointer;" href="javascript:void(0)"  data-id="'.$post->id.'"><b>'.$post->name.'</b></a>';
                }else{
                	$set_name = "N/A";
                }

                if(!empty($post->phone_number)){
                	$set_number = '<a class ="get_details" style = "cursor: pointer;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"  data-id="'.$post->id.'">'.$post->phone_number.'</a>';
                }else{
                	$set_number = "N/A";
                }

                if(!empty($post->visit_count)){
                	$set_count = '<a class ="get_details" style = "cursor: pointer;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"  data-id="'.$post->id.'">'.$post->visit_count.'</a>';
                }else{
                	$set_count = "N/A";
                }

                if(!empty($post->updated_at)){
                	$set_date = '<a class ="get_details" style = "cursor: pointer;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailModal"  data-id="'.$post->id.'">'.$last_modified.'</a>';
                }else{
                	$set_date = "N/A";
                }

                $nestedData['name'] = $set_name;
                $nestedData['phone_number'] = $set_number;
                $nestedData['visit_count'] = $set_count;
                $nestedData['updated_at'] = $set_date;
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

    public function delete_customer(Request $request){

        $deleted_id = $request->deleted_id;
        $customer = Customers::select('*')->where('id',$deleted_id)->first();
        $customer->is_deleted = '1';
        $customer->save();
        Session::flash('message', 'Customer Deleted Successfully!');
        return response()->json(['success' => true]);
    }

    public function getcustomer(Request $request)
    {
        $id = $request->id;
        $customer_data = Customers::select('*')->where('id', $id)->get();
        return response()->json(['success' => true, 'customer_data' => $customer_data]);
    }

    //post method function for updating customer
    public function update_customer(Request $request){
        $id = $request->customer_id;
        $customer = Customers::findOrFail($id);
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'edit_name' => ['required', 'string', 'max:255'],
          'edit_phone' => ['required']
        ]);

        //check if the field validations are failed
         if ($validator->fails())
          {
            // dd($validator);
            return redirect(route('business.customers'))->withErrors($validator)->withInput();
          } 

                
        $input = $request->all();
        $customer->name = $request->edit_name;
        $customer->phone_number = $request->edit_phone;
        // $resources->services_provided = implode(',',$request->service_provided);
        $customer->save();
       Session::flash('message', 'Customer Updated Successfully!!');
       return redirect(route('business.customers'));
    }

    public function getnotes(Request $request)
    {
        $customer_id = $request->id;
        $user_id =  Auth::User()->id;
        $notes_data = customer_notes::select('*')->where('customer_id', $customer_id)->where('user_id',$user_id)->where('status','=','1')->where('is_deleted','=','0')->orderBy('created_at','desc')->get();
        return response()->json(['success' => true, 'notes_data' => $notes_data]);
    }

    //post method function for adding new resource
    public function save_notes(Request $request){
        $user_id = Auth::user()->id;
        $customer_id = $request->customerId;
        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'addnotes' => ['required']
        ]);
         
        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('business.customers'))->withErrors($validator)->withInput();
          }
                
        $input = $request->all();

        //add data for notes if added code starts
        if(isset($request->addnotes) && $request->addnotes != ''){
        	$add_notes = new customer_notes();
        	$add_notes->user_id = $user_id;
        	$add_notes->customer_id = $customer_id;
        	$add_notes->notes_data = $request->addnotes;
        	$add_notes->save();
        
        }
        $get_data = customer_notes::select('*')->where('customer_id', $customer_id)->where('user_id',$user_id)->where('status','=','1')->where('is_deleted','=','0')->orderBy('created_at','desc')->get();
        //add data for notes if added code ends
       	return response()->json(['success' => true, 'notes_data' => $get_data]);
    }

    public function geteditnotes(Request $request)
    {
        $id = $request->id;
        $notes_data = customer_notes::select('*')->where('id', $id)->where('status','=','1')->where('is_deleted','=','0')->orderBy('created_at','desc')->get();
        return response()->json(['success' => true, 'notes_data' => $notes_data]);
    }


    //post method function for adding new resource
    public function update_notes(Request $request){
        $notes_id = $request->Id;

        //laravel validations to check the valid fields
        $validator = Validator::make($request->all(),
        [
          'editnotes' => ['required']
        ]);
         
        //check if the field validations are failed
         if ($validator->fails())
          {
            return redirect(route('business.customers'))->withErrors($validator)->withInput();
          }
                
        $input = $request->all();

        $Editnotes = customer_notes::select('*')->where('id',$notes_id)->first();
        //add data for notes if added code starts
        if(isset($request->editnotes) && $request->editnotes != ''){
        	$Editnotes->notes_data = $request->editnotes;
        	$Editnotes->save();
        
        }
        $get_data = customer_notes::select('*')->where('customer_id', $Editnotes->customer_id)->where('user_id',$Editnotes->user_id)->where('status','=','1')->where('is_deleted','=','0')->orderBy('created_at','desc')->get();
        //add data for notes if added code ends
       	return response()->json(['success' => true, 'notes_data' => $get_data]);
    }

}
