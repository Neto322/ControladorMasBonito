<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Chismoso</title>

    <link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<link rel="stylesheet" href="/css/style.css">

    <script src="/js/modernizr-2.6.2.min.js"></script>


</head>
<body>



   
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>El chismoso</h1>
              <span class="subheading">Al chile no te incumbe</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
	@foreach($noticias as $noticia)
	<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            
              <h2 class="post-title">
			  <a href="{{route("noticias.detalles",$noticia->id)}}">{{ $noticia->titulo }}</a>
              </h2>
        
            <p class="post-meta">Publicado por
              <a href="#"> <a>{{$noticia->autor}}</a></a>
              {{$noticia->fecha}}</a></p>
		
        </div>
    </div>


    
       
  
    
    </div>
	@endforeach
 

    <!-- Footer -->
    <footer>
    
        <p class="copyright text-muted">Copyright &copy; El chismoso 2021</p>
       
    </footer>


    <script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="/js/main.js"></script>
</body>
</html>