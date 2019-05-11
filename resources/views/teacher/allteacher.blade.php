@extends('layout')

@section('content')


              <h2 class="card-title">All Teacher Data</h2>
              
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Teacher Name</th>
                          <th>Teacher Phone</th>
                          <th>Teacher Image</th>
                          <th>Teacher Department</th>
                          <th class="center">action</th>
                       </tr>
                    </thead>
                    <tbody>
                    	@foreach($allteacher as $singleteacher)
                      <tr>
                          <td>{{$singleteacher->teacher_name}}</td>
                          <td>{{$singleteacher->teacher_phone}}</td>
                          <td><img src="{{URL::to('$singlestudent->teacher_image')}}" height="80" width="100" style="border-radius: 50%"></td>
                          <td>   @if ($singleteacher->teacher_department== 1)
                                  <span class="lavel lavel-success">{{'CSE'}}</span>
                                @elseif($singleteacher->teacher_department== 2)
                                  <span class="lavel lavel-primary">{{'BBA'}}</span>
                                @elseif($singleteacher->teacher_department== 3)
                                  <span class="lavel lavel-primary">{{'MBA'}}</span>
                                @elseif($singleteacher->teacher_department== 4)
                                  <span class="lavel lavel-success">{{'EEE'}}</span>
                                @else
                                  <span class="lavel lavel-important">{{'Not Define'}}</span>
                            @endif

                          </td>
                          <td>
                             <a href="{{URL::to('/student_edit/'.$singleteacher->student_id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{URL::to('/student_view/'.$singleteacher->student_id)}}"><button class="btn btn-outline-warning">View</button></a>
                            <a href="{{URL::to('/student_delele/'.$singleteacher->student_id)}}" class="btn btn-outline-danger" id="delete">Delete</a>
                            

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                
              
            
         
       

@endsection