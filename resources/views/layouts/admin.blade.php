<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset ('img/IIDLIVE.png')}}">
  <title>
    LIDLIVE- Administrador
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset ('css/new/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="{{ asset('img/IIDLIVE.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">IIDLIVE</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" " id="sidenav-collapse-main">
      <!-- inicio del menu  -->
      <ul class="navbar-nav mb-md-2">
      <li class="nav-item">
          <a class="nav-link active" href="{{route('admin.principal.rels')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-film text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">rels</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.usuarios')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-plus text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.posts')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">post</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.imagenes')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-image text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Imagenes</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.documents')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-folder text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Documentos</span>
          </a>
        </li>
        </ul>
        </ul>
   
    </div>
    <!-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link active" href="{{route('admin.principal.rels')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-film text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">rels</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.usuarios')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-plus text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.posts')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">post</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.imagenes')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-image text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Imagenes</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.principal.documents')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-folder text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Documentos</span>
          </a>
        </li>
        </ul>
         
        <ul class="navbar-nav mb-md-3">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Herramientas</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cloud-upload-96 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cloud-upload-96 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-album-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-album-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-album-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-album-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
      </ul> 
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            </ol>
          <h6 class="font-weight-bolder text-white mb-0">Administrador</h6>
        </nav>
          
     <span class="d-sm-inline d-none text-white" >{{auth()->user()->nombreusuario}}</span>
      
    </div> -->
    
  </aside>
  <main class="main-content position-relative border-radius-lg ">
  
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">{{auth()->user()->nombreusuario}}</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{isset($title)?$title:'error'}}</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">{{isset($title)?$title:'error'}}</h6>
        </nav>
        
     
          
          <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
                
                
                  <div class="media align-items-center">
                  
                    <span class="avatar avatar-lg rounded-circle">
                    <img src="{{ asset ('img/theme/team-4-800x800.jpg') }}" class="img-fluid avatar-lg rounded-circle"></span>
                    <div class="media-body ml-2 d-none d-lg-block">
                     
                    </div>
                  </div>
    
                  
                </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')

    


      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">IIDLIVE</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">IIDLIVE</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

  </main>


  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i >
      <img src="{{ asset('img/IIDLIVE.png')}}" width="50" height="50">
      </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuración de Pantalla</h5>
          <p>Personaliza tu Dashboard</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Barra Lateral</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Barra de tareas</h6>
          <p class="text-sm">Elige el modo de tu preferencia</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Claro</button>
          <button class="btn bg-gradient-dark w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Oscuro</button>
        </div>
        <!-- <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p> -->
        <!-- Navbar Fixed -->
        <!-- <div class="d-flex my-3">
          <h6 class="mb-0">Barra de Navegación Fija</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div> -->
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Modo Nocturno</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        @can('ajustes')
        <a a class="btn bg-gradient-dark w-100" href="/ajustes">configuracion</a>
        @endcan
       
       

        <a class="dtn bg-gradient-drak w-100" href="{{ route('logout') }}">
                
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> 
              
            
        <a class="btn bg-gradient-dark w-100" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir
        <form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
                    @csrf
                </form>
    </a>
        @can('/')
          
        
        <!-- <a class="btn btn-outline-dark w-100" href="{{route ('home')}}">Cambio de Perfil</a> -->
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
        @endcan
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset ('js/core/popper.min.js')}}"></script>
  <script src="{{ asset ('js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset ('js/new/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>