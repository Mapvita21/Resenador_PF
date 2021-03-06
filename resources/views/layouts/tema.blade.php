<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cine</title>


  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">


  <div id="wrapper">


    <ul class="navbar-nav bg-gradient-primary sidebar " id="accordionSidebar">


      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('pelicula.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">►꧁Mr.Reseñador꧂►</sup></div>
      </a>


      <hr class="sidebar-divider my-0">


      <li class="nav-item">
        <a class="nav-link" href="{{ route('pelicula.index') }}">
          <i class="fas fa-play"></i>
          <span>Peliculas</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{ route('favorita.index') }}">
          <i class="fas fa-heart"></i>
          <span>Mis Favoritas</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{ route('proxima.index') }}">
          <i class="fas fa-clock"></i>
          <span>Proximas a ver</span></a>
      </li>


      <hr class="sidebar-divider">

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">


      <div id="content">


        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <ul class="navbar-nav ml-auto">


            @guest
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown no-arrow">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}  <span class="caret"></span>
                    </a>


                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                </li>


            @endguest
          </ul>

        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>


      </div>



      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>SA.deC.V &copy; Derechos Reservados</span>
          </div>
        </div>
      </footer>


    </div>


  </div>



  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>


  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
  <script src="{{ asset('js/star-rating.js') }}"></script>


</body>

</html>
