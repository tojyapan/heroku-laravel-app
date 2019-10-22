@extends('layouts.main')

@section('content')

<?php $author = $post->author; ?>
<div id="white">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <p><img src="{{ $author->gravatar() }}" width="50px" height="50px">
          <ba>{{ $author->name }}</ba>
        </p>
        <p>
          <bd>{{ $post->date }}</bd>
        </p>
        <h4>{{ $post->title }}</h4>
        <p><img class="img-responsive" src="img/blog01.jpg" alt=""></p>
        {!! $post->body_html !!}
        <br>
        <p>
          <bt>Category: <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->title}}</a></bt>
        </p>
        <hr>
        <p><a href="{{ route('blog') }}"># Back</a></p>
      </div>

    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /white -->

@endsection
