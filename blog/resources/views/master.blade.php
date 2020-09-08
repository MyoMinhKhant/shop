<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item @if(\Route::current()->uri=='/'){{'active'}}@endif">
            <a class="nav-link" href="{{route('mainpage')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item @if(\Route::current()->uri=='about'){{'active'}}@endif">
            <a class="nav-link" href="{{route('aboutpage')}}">About</a>
          </li>
          <li class="nav-item @if(\Route::current()->uri=='service'){{'active'}}@endif">
            <a class="nav-link" href="{{route('servicepage')}}">Services</a>
          </li>
          <li class="nav-item @if(\Route::current()->uri=='contact'){{'active'}}@endif">
            <a class="nav-link" href="{{route('contactpage')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  @yield('content')
 
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
