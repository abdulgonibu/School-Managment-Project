<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class AddStudentController extends Controller
{
    public function addstudent(){
    	return view('admin.addstudent');
    }

    public function savestuedent(Request $request){

          $studentEntry = new Student();
          $studentEntry->student_name = $request->student_name;
          $studentEntry->student_roll = $request->student_roll;
          $studentEntry->student_fathername = $request->student_fathername;
          $studentEntry->student_mathername = $request->student_mathername;
          $studentEntry->student_email = $request->student_email;
          $studentEntry->student_phone = $request->student_phone;
          $studentEntry->student_department = $request->student_department;
          $studentEntry->student_address = $request->student_address;
          $studentEntry->student_year = $request->student_year;
          $studentEntry->student_password = $request->student_password;
          $studentEntry->student_image = $request->student_image;


           $studentEntry->save();
       
       return redirect('/addstudent')->with('message','Student Added Successfully');

    	// $data=array();
    	//   $data['student_name']=$request->student_name;
    	//   $data['student_roll']=$request->student_roll;
    	//   $data['student_fathername']=$request->student_fathername;
    	//   $data['student_mathername']=$request->student_mathername;
    	//   $data['student_email']=$request->student_email;
    	//   $data['student_phone']=$request->student_phone;
    	//   $data['student_department']=$request->student_department;
    	//   $data['student_address']=$request->student_address;
    	//   $data['student_year']=$request->student_year;
    	//   $data['student_password']=md5($request->student_password);
    	//   $image=$request->file('student_image');


    	  // if($image){
    	 	// $image_name=str_random(20);
    	 	// $ext=strtolower($image->getclientoriginalExtension());
    	 	// $image_full_name=$image_name.'.'.$ext;
    	 	// $upload_path='image/';
    	 	// $image_url=$upload_path.$image_full_name;
    	 	// $success=$image->move($upload_path,$image_full_name);

    	 	// if($success)
    	 	// {
    	 	// 	$data['student_image']=$image_url;

    	 	// 	DB::table('student_tbl')->insert($data);
    	 	// 	Session::put('exception','student added Succesfully');
    	 	// 	return redirect::to('/addstudent');

    	 	// }
    	// } 

    	//  $data['image']	=$image_url;
    	//  DB::table('student_tbl')->insert($data);
    	//  		Session::put('exception','student added Succesfully');
    	//  		return redirect::to('/addstudent');

    	// DB::table('student_tbl')->insert($data);
    	//  		Session::put('exception','student added Succesfully');
    	//  		return redirect::to('/addstudent'); 		
    	
    }
}
