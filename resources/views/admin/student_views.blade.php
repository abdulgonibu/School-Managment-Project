@extends('layout')

@php
  function convert_department($value){
   $values=[
      1=>'CSE',
      2=>'MBA',
      3=>'EEE',
      4=>'BBA',
      ];
      return $values[$value];

}
@endphp

@section('content')
         
            <div class="row user-profile">
            <div class="col-lg-8 side-left">
              <div class="card mb-8">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_descrition_profile->student_image)}}" alt="">
                  <p class="name">{{$student_descrition_profile->student_name}}</p>
                  <p class="designation">{{$student_descrition_profile->student_roll}}</p>
                  <a class="email" href="#">{{$student_descrition_profile->student_email}}</a>
                  <a class="number" href="#">{{$student_descrition_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-8">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                  	<h2 class="" style="color: red" align="center">Bangladesh University</h2>
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Activities, situations that your child really enjoys and what
                     your child would rather avoid.</p>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon">Father Name :</i>
                      <span>{{$student_descrition_profile->student_fathername}}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-facebook icon">Mother Name :</i>
                      <span>{{$student_descrition_profile->student_mathername}}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-linkedin icon"> Department :</i>
                      <span>{{convert_department($student_descrition_profile->student_department)}}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-linkedin icon">Address :</i>
                      <span>{{$student_descrition_profile->student_address}}</span>
                    </a>
                    <a class="social-link" >
                      <i class="icon-social-linkedin icon">Addmision Year :</i>
                      <span>{{$student_descrition_profile->student_year}}</span>
                    </a>


                  </div>
                </div>
              </div>
            </div>
            </div>
     @endsection