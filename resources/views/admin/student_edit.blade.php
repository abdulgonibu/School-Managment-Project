@extends('layout')

@section('content')

            <div>
                  
                      <div class="card-body">
                          <h2 class="card-title">Update Student Data</h2>
                          <br>

                        <h2 style="color: green">{{Session::get('message')}}</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('/update_student/'.$student_descrition_profile->student_id)}}" >
                          	    @csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_name}}" name="student_name" >
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Roll</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_roll}}" name="student_roll">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Father Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_fathername}}" name="student_fathername">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Mother Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_mathername}}" name="student_mathername">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Email</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_email}}" name="student_email">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Phone</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_phone}}" name="student_phone">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Studnent Department</label>
                                  <select class="form-control p-input"name="student_department">
                                  	<option value="1">CSE</option>
                                  	<option value="2">BBA</option>
                                  	<option value="3">MBA</option>
                                  	<option value="4">EEE</option>
                                  </select>
                                  </div>
                                   <div class="form-group">
                                  <label for="exampleTextarea">Studnent Address</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" rows="3" name="student_address" value="{{$student_descrition_profile->student_address}}"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admission Year</label>
                                  <input type="date" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student_descrition_profile->student_year}}" name="student_year">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" id="exampleInputPassword1" value="{{$student_descrition_profile->student_password}}" name="student_password">
                              </div>
                             </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                          </div>
                        </div>
                       
                     
                 

@endsection