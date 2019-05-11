<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MBAController extends Controller
{
   public function mba(){
    	//return view('admin.mba');
   	$student_info=DB::table('students')
    	              ->where(['student_department'=> 3])
    	              ->get();

    	 $manage_student=view('admin.mba')
    	       ->with('all_student_info',$student_info) ;
    	       return view('layout') 
    	             ->with('mba', $manage_student); 
    	             return view('admin.mba');
    }
}
