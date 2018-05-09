<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clean Blog - Start Bootstrap Theme</title>

	<!-- Bootstrap core CSS -->
    <link  href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/clean-blog.css') }}" rel="stylesheet">


</head>
<body>
	@include('includes/nav')
	
	<!-- <div class="container"> -->
        <div class="row">
            <div class="col-sm-8 blog-main">
        	   @yield('content')
            </div>
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @include('includes/sidebar')
            </div>
        </div>
   <!--  </div> -->


	@include('includes/footer')

	<!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/js/jqBootstrapValidation.js') }}"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('/js/clean-blog.min.js') }}"></script>
</body>
</html>