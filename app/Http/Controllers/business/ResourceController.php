<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;


class ResourceController extends Controller
{
    public function resources(){
    	return view('business.resources');
    }

}
