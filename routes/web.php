<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.teacher_login');
});

//teacher information

Route::get('/teacher', 'teacherController@teacher');
Route::get('/addteacher', 'teacherController@addteacher');
Route::get('/allteacher', 'teacherController@allteacher');
Route::post('/save_teacher','teacherController@saveteacher');

//admin
Route::post('/adminlogin', 'AdminController@longin_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::post('/admin_dashboard', 'AdminController@admin_dashboard');

Route::get('/viewprofile', 'AdminController@viewprofile');
Route::get('/setting', 'AdminController@setting');
Route::get('/logout', 'AdminController@logout');
//addstudent
Route::get('/addstudent', 'AddStudentController@addstudent');
Route::post('/save_student','AddStudentController@savestuedent');
Route::get('/student_delele/{student_id}','AllstudentController@deletestudent');
Route::get('/student_view/{student_id}', 'AllstudentController@studentview');
Route::get('/student_edit/{student_id}', 'AllstudentController@studentedit');
Route::post('/update_student/{student_id}', 'AllstudentController@studentupdate');




Route::get('/allstudent', 'AllstudentController@allstudent');
Route::get('/tutionfee', 'TutionfeeController@tutionfee');
Route::get('/mba', 'MBAController@mba');
Route::get('/cse', 'CSEController@cse');
Route::get('/eee', 'EEEController@eee');
Route::get('/bba', 'BBAController@bba');
Route::get('/teacher', 'tecaherController@techer');
Route::get('/result', 'ResultController@result');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
