<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    {{ config ('app.name') }} | @yield('title')
  </title>
  <link href="/css/normalize.css" rel="stylesheet">
    <link href="/css/framework.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
 
  <link href="{{ asset('') }}" rel="icon" type="#">
 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <link href="{{ asset ('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset ('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  
  <link href="{{ asset ('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
   
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="{{ url ('/') }}">
        <img src="{{ asset ('')}}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="{{ url('/welcome') }}">
                 
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route ('register')}}">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Registrate</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route ('login')}}">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Inicia sesión </span>
              </a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>

    <div class="header bg-gradient-primary py-6 py-lg-7">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">@yield('title','Bienvenidos a mi Plataforma Favorita')</h1>
              <p class="text-lead text-light">Gracias por unirte a Mi Plataforma Favorita, la plataforma social alternativa de contenido mas completa!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
  
    @yield('content') 
 
   
    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2022 <a href="/" class="font-weight-bold ml-1" >{{ config ('app.name') }}</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            

              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">¿Quienes somos?</a>
              </li>
            
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
  <script src="{{ asset ('js/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset ('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  
  <script src="{{ asset ('js/argon-dashboard.min.js?v=1.1.2') }}"></script>
  
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html> -->

