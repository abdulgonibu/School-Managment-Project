<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\redirect;
use Session;
Session_start();

class AdminController extends Controller

{
    public function longin_dashboard(Request $request){
    	//return view('admin.dashboard');

    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
    	$result = DB::table('admin_tbl')
    	->where('admin_email',$email)
    	->where('admin_password',$password)
    	->first();

    	// echo "</pre>";
    	// print_r($result);

    	if ($result) {

    		Session::put('admin_email',$request->admin_email);
    		Session::put('admin_id',$request->admin_id);
    		return redirect::to('admin.dashboard');
    		
    	}

    	else {
    		Session::put('exception', 'Email or Password Invalid');
    		return redirect::to('admin.dashboard');
    	}

    }

    public function admin_dashboard(){
    	return view('admin.dashboard');
    }

    public function logout(){
    	return redirect::to('/backend');
    }

    public function viewprofile (){
        return view('admin.viewprofile');
    }
    public function setting (){
        return view('admin.setting');
    }
}
