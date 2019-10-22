@extends('layouts.main')

@section('content')

@foreach ($posts as $post) 

<div id="white">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <p><img src="{{ $post->author->gravatar() }}" width="50px" height="50px">
          <ba>{{ $post->author->name }}</ba>
        </p>
        <p>
          <bd>{{ $post->date}}</bd>
        </p>
        <h4>{{ $post->title }}</h4>
        {!! $post->excerpt_html !!}
        <p><a href="{{ route('blog.detail', $post->slug) }}">Continue Reading...</a></p>
      </div>

    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>

@endforeach

@endsection
