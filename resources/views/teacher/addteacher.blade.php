@extends('layout')

@section('content')

            <div>
                  
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>
                          <br>

                        <h2 style="color: green">    {{Session::get('message')}}</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                          	    @csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="teacher Name" name="teacher_name">
                                  </div>
                                
                                 
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Email</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="teacher Email" name="teacher_email">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="teacher Phone" name="teacher_phone">
                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Department</label>
                                  <select class="form-control p-input"name="teacher_department">
                                  	<option value="1">CSE</option>
                                  	<option value="2">BBA</option>
                                  	<option value="3">MBA</option>
                                  	<option value="4">EEE</option>
                                  </select>
                                  </div>
                                   <div class="form-group">
                                  <label for="exampleTextarea">Teacher Address</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" rows="3" name="teacher_address" placeholder="teacher Address"></textarea>
                              </div>
                            
                             
                              <div class="form-group">
                                  
                                  <input type="file"  id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_image">
                                  </div>                              </div>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                          </div>
                        </div>
                       
                     
                 

@endsection