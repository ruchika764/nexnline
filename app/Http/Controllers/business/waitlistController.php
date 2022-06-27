<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;

class waitlistController extends Controller
{
    public function waitlist(){
    	return view('business.waitlist');
    }

    
}
