<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEECOntroller extends Controller
{
    public function eee(){
    	//return view('admin.eee');
    	$student_info=DB::table('students')
    	              ->where(['student_department'=> 4])
    	              ->get();

    	 $manage_student=view('admin.eee')
    	       ->with('all_student_info',$student_info) ;
    	       return view('layout') 
    	             ->with('eee', $manage_student); 
    	             return view('admin.eee'); 
    }
}
