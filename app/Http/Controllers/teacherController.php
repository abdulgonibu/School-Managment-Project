<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class teacherController extends Controller
{
    public function addteacher(){
    	return view('teacher.addteacher');
    }

    
    public function allteacher(){
        
        $teachers =Teacher::All();

        return view ('teacher.allteacher',['allteacher'=>$teachers]);


    	// return view('admin.allstudent');
    }

    public function saveteacher(Request $request){

          $teacherEntry = new Teacher();
          $teacherEntry->teacher_name = $request->teacher_name;
          $teacherEntry->teacher_email = $request->teacher_email;
          $teacherEntry->teacher_phone = $request->teacher_phone;
          $teacherEntry->teacher_department = $request->teacher_department;
          $teacherEntry->teacher_address = $request->teacher_address;
          $teacherEntry->teacher_image = $request->teacher_image;


           $teacherEntry->save();
       
       return redirect('/addteacher')->with('message','Teacher Added Successfully');
   }
}
