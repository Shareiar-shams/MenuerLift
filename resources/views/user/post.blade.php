@extends('user/app')

@section('head')
  <link rel="stylesheet" type="text/css" href="{{ asset('user/css/prism.css') }}">
@endsection
@section('bg-img', Storage::disk('local')->url($post->image) )

@section('title', $post->title)
@section('sub-title', $post->subtitle)
 
@section('main-content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=1081804402198114&autoLogAppEvents=1"></script>
 <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created at {{ $post->created_at->diffForHumans() }}</small>
          @foreach($post->categories as $category)
            <small>
              <div class="alert alert-light float-right" role="alert" style="margin-right: 5px">
                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
              </div>
            </small>
          @endforeach
          {!! htmlspecialchars_decode($post->body) !!}

          <!-- Tag Clouds -->
          <h3>Tag Clouds</h3>
          @foreach($post->tags as $tag)
            <small>
              <div class="alert alert-dark float-left" role="alert" style="margin-right: 5px">
                <a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
              </div>
            </small>
          @endforeach

          <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="10"></div>
        </div>
      </div>
    </div>
  </article>


@endsection

@section('footer')
  <script src="{{ asset('user/js/prism.js') }}"></script>
@endsection