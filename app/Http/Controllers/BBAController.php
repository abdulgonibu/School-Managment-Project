<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{
    public function bba(){
    	//return view('admin.bba');
    	$student_info=DB::table('students')
    	              ->where(['student_department'=> 2])
    	              ->get();

    	 $manage_student=view('admin.bba')
    	       ->with('all_student_info',$student_info) ;
    	       return view('layout') 
    	             ->with('bba', $manage_student); 
    	             return view('admin.bba');
    }
}
