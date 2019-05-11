@extends('layout')

@section('content')


              <h2 class="card-title">All Student Data</h2>
              
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student Name</th>
                          <th>Student Phone</th>
                          <th>Student Image</th>
                          <th>Student Department</th>
                          <th class="center">action</th>
                       </tr>
                    </thead>
                    <tbody>
                    	@foreach($allstudent as $singlestudent)
                      <tr>
                          <td>{{$singlestudent->student_roll}}</td>
                          <td>{{$singlestudent->student_name}}</td>
                          <td>{{$singlestudent->student_phone}}</td>
                          <td><img src="{{URL::to('$singlestudent->student_image')}}" height="80" width="100" style="border-radius: 50%"></td>
                          <td>   @if ($singlestudent->student_department== 1)
                                  <span class="lavel lavel-success">{{'CSE'}}</span>
                                @elseif($singlestudent->student_department== 2)
                                  <span class="lavel lavel-primary">{{'BBA'}}</span>
                                @elseif($singlestudent->student_department== 3)
                                  <span class="lavel lavel-primary">{{'MBA'}}</span>
                                @elseif($singlestudent->student_department== 4)
                                  <span class="lavel lavel-success">{{'EEE'}}</span>
                                @else
                                  <span class="lavel lavel-important">{{'Not Define'}}</span>
                            @endif

                          </td>
                          <td>
                             <a href="{{URL::to('/student_edit/'.$singlestudent->student_id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{URL::to('/student_view/'.$singlestudent->student_id)}}"><button class="btn btn-outline-warning">View</button></a>
                            <a href="{{URL::to('/student_delele/'.$singlestudent->student_id)}}" class="btn btn-outline-danger" id="delete">Delete</a>
                            

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                
              
            
         
       

@endsection