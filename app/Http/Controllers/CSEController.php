<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CSEController extends Controller
{
    public function cse(){
    	//return view('admin.cse');
    	$student_info=DB::table('students')
    	              ->where(['student_department'=> 1])
    	              ->get();

    	 $manage_student=view('admin.cse')
    	       ->with('all_student_info',$student_info) ;
    	       return view('layout') 
    	             ->with('cse', $manage_student); 
    	             return view('admin.cse');        
    }
}
