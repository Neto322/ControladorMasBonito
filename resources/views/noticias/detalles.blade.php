<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@if ($noticia != NULL){{ $noticia->titulo }}@else NO se encontro noticia @endif</title>
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

<button type="button" class="btn btn-primary" href="{{route("noticias")}}">Volver a noticias</button>
<section class="slider_section">
@if($noticia != NULL)
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
      @if($noticia->foto != NULL)
            <img src="{{$noticia->foto}}" style="width:300px; height:auto;" />
        @endif
      </div>
      <div class="col-md-6">
        <div class="full-slider_cont">
            
          <h1>{{$noticia->titulo}}</h1>
          <p> {{$noticia->autor}}</p>
          <p> {{$noticia->fecha}}</p>
        </div>
      </div>
    </div>
  </div>
  @else
  <h1> lo sentimos noticia no encontrada </h1>
    @endif

<!-- footer -->
<footer>

  <div class="copyright">
    <div class="container">
      <p>Copyright 2021 - El Chismoso Todos los derechos reservados </p>
    </div>
  </div>
</footer>
<!-- end footer --> 
<!-- Javascript files--> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/jquery-3.0.0.min.js"></script> 
<script src="js/plugin.js"></script> 

<!-- sidebar --> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>

