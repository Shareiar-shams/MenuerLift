@extends('user/app')
@section('title', 'ManurerLift')
@section('sub-title', 'My Dashboard')
@section('main-content')
<!-- Main Content -->
  <div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>{{Auth::user()->name}}</h3>
        <em>{{Auth::user()->email}}</em>
    </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title text-center" id="myModalLabel">More About {{Auth::user()->name}}</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">{{Auth::user()->name}} <small></small></h3>
                    <span><strong>Your questions: </strong></span>
                        <span class="label label-warning">
                            {{$question}}
                        </span>
                        <br>
                    <span><strong>Your answered questions: </strong></span>
                        <span class="label label-warning">
                          {{$comment}}
                        </span>
                    </center>
                    
                    <hr>
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Click here to get your certificate</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


  <hr>
@endsection