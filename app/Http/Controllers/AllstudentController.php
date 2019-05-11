<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\redirect;
use App\Student;
use DB;
use Session;
session_start();

class AllstudentController extends Controller
{
    public function allstudent(){
        
        $students =Student::All();

        return view ('admin.allstudent',['allstudent'=>$students]);


    	// return view('admin.allstudent');
    }

    public function deletestudent($student_id){
    	DB::table('students')
    	->where('student_id',$student_id)
    	->delete();
    	return redirect::to ('/allstudent');
    }

    public function studentview($student_id){

    	$student_descrition_view=DB::table('students')
    	->select('*')
    	->where('student_id',$student_id)
    	->first();

    	// echo "</pre>";
    	// print_r($student_descrition_view);
    	// echo "</pre>";
       $manage_descrition_student=view('admin.student_views')
                     ->with('student_descrition_profile',$student_descrition_view);
        return view('layout')
                   ->with('view',$manage_descrition_student);             
    }

    public function studentedit($student_id){

        $student_descrition_edit=DB::table('students')
        ->select('*')
        ->where('student_id',$student_id)
        ->first();

        // echo "</pre>";
        // print_r($student_descrition_view);
        // echo "</pre>";
       $manage_descrition_student=view('admin.student_edit')
                     ->with('student_descrition_profile',$student_descrition_edit);
        return view('layout')
                   ->with('view',$manage_descrition_student);             
    }
   public function studentupdate(request $request, $student_id){

    $data=array();
    $data['student_name']=$request->student_name;
    $data['student_roll']=$request->student_roll;
    $data['student_fathername']=$request->student_fathername;
    $data['student_mathername']=$request->student_mathername;
    $data['student_email']=$request->student_email;
    $data['student_phone']=$request->student_phone;
    $data['student_address']=$request->student_address;
    $data['student_year']=$request->student_year;
    $data['student_password']=$request->student_password;

    DB::table('students')
        ->select('*')
        ->where('student_id',$student_id)
        ->update($data);

     return redirect('/allstudent')->with('message','Student Update Successfully');
   }

}
