@extends('master')
@section('jumbotron')
    @include('partials.jumbotron')
@endsection

@section('content')
    <div class="blog-post">
      <h2 class="blog-post-title">Sample blog post</h2>
      <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
    </div>
    
    <div class="blog-post">
      <h2 class="blog-post-title">Another blog post</h2>
      <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
    </div>
    
    <div class="blog-post">
      <h2 class="blog-post-title">New feature</h2>
      <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
    </div>

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@endsection