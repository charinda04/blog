@extends('layouts/master')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>


@section('content')
	<div class="container">
	   <form method="post" action="posts">
	   		{{ csrf_field() }}
		  <div class="form-group">
		    <label for="formGroupExampleInput">Title:</label>
		    <input type="text" class="form-control" id="title" placeholder="input 1" name="title" >
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Body:</label>
		    <textarea name="body" id="body" class="form-control" cols="30" rows="10"  placeholder="input 1" ></textarea>
		    
		  </div>
		<div class="form-group">
		  <button type="submit" class="btn btn-primary">Publish</button>
		 </div>

		@include('includes/errors')
		</form>

		
		
		
	</div>
@endsection