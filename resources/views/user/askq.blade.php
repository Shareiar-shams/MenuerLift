@extends('user/app')
@section('bg-img', asset('user/img/qns.jpg'))
@section('title', 'ManurerLift')
@section('sub-title', 'Question and Answers')
@section('main-content')
<!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Post your question</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ route('question.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <textarea class="form-control" name="question" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <input type="text" name="qs_id" class="form-control" value="{{ Auth::user()->id }}" hidden>
              </div>
              <div class="form-group">
                <input class="btn btn-success" type="submit" value="Post">
              </div>
            </form>
          </div>
        </div>
        <br>

          @foreach($question as $q)
          <div class="alert alert-success" role="alert">
            <p>{{$q->question}}</p>
            <hr>
            <div class="media">
            <div class="media-body">
              @comments(['model' => $q])
            </div>
          </div>
          </div>
          @endforeach   
          <br>  
        
        
      </div>
    </div>
  </div>

  <hr>
@endsection

@section('footer')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=1081804402198114&autoLogAppEvents=1" nonce="TvUsvYdk"></script>
@endsection