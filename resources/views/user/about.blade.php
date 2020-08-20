@extends('user/app')
@section('bg-img', asset('user/img/qns.jpg'))
@section('title', 'ManurerLift')
@section('sub-title', 'About Us')
@section('main-content')
<!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>{{$about->text}}</p>
      </div>
    </div>
    <h3 class="text-center">Our Team</h3>
    <br>
    <br>
<hr>    <div class="row text-center">

      <div class="col-lg-4 col-md-10 mx-auto">
      	<img style="height: 250px; width: 250px; border-radius: 50%;" src="{{Storage::disk('local')->url($about->first_img)}}">
      	<h4>{{$about->fp_name}}</h4>
      </div>
      <div class="col-lg-4 col-md-10 mx-auto">
      	<img style="height: 250px; width: 250px; border-radius: 50%;" src="{{Storage::disk('local')->url($about->sec_img)}}">
      	      	<h4>{{$about->sp_name}}</h4>

      </div>
      <div class="col-lg-4 col-md-10 mx-auto">
      	<img style="height: 250px; width: 250px; border-radius: 50%;" src="{{Storage::disk('local')->url($about->third_img)}}">
      	      	<h4>{{$about->tp_name}}</h4>

      </div>
      
    </div>
  </div>


  <hr>
@endsection