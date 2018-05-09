@extends('layouts/master')



    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{ $blog->title }}</h1>
              <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
              <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </header>


@section('content')
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            {{ $blog->body }}
          </div>
        </div>

        <hr>

       
            <form action="posts/{{ $blog->id }}/comments" method="post" accept-charset="utf-8">

              {{ csrf_field() }}
              
              <div class="form-group">
                <textarea name="body" placeholder="Place your comment here" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
              </div>


            </form>
          
        <hr>

        <div class="comments">
          <ul class="list-group">
            <li class="list-group-item">
              @foreach ($blog->comments as $comment)
              <article>

                <strong>
                  {{ $comment->created_at->diffForHumans() }}: &nbsp;
                </strong>

                {{ $comment->body }}
              </article>
              @endforeach
            </li>
          </ul>
        </div>

      </div>
    </article>

    


    <hr>
@endsection
