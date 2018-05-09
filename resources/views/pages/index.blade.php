@extends('layouts/master')
 
@include('includes/header')   

@section('content')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">

            @foreach($blogs as $blog )
              <a href="post.php?id={{ $blog->id }}">
                <h2 class="post-title">
                  {{ $blog->title }}
                </h2>
                <h3 class="post-subtitle">
                  {{ $blog->body }}
                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#">{{ $blog->user->name }}</a>
                on {{ $blog->created_at->toFormattedDateString()  }}</p>
            @endforeach

          </div>
          <hr>
        
          
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
@endsection
    

    

    

  