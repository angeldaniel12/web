<!-- vista para las salas de Streaming -->
@extends('layouts.liveview')
@section('content')
<div class="card-body">
                      <h5 class="card-title">Salas Streaming Academico</h5>
                      <h6 class="card-subtitle text-muted">General</h6>
                    </div>  
<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Examples -->
    <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/f1.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 1</h5>
                      <p class="card-text">Empezaras a transmitir</p>
                      <a href="{{route ('sala7')}}" class="btn btn-outline-primary">Transmitir</a>
                    </div>
                  </div>
                </div>
              
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/cine.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 2</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Empezaras a transmitir</p>
                      <a href="{{ route ('sala8')}}" class="btn btn-outline-success">Transmitir</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/turismo .jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 3</h5>
                      <p class="card-text">
                      Empezaras a transmitir</p>
                      <a href="{{ route ('sala9')}}" class="btn btn-outline-warning">Transmitir</a>
                    </div>
                  </div>
                </div>
              

                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/sociedad1.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 4</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Empezaras a transmitir</p>
                      <a href="{{ route ('sala10')}}" class="btn btn-outline-dark">Transmitir</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/onu.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 5</h5>
                      <p class="card-text">
                      Empezaras a transmitir</p>
                      <a href="{{ route ('sala11')}}" class="btn btn-outline-warning">Transmitir</a>
                    </div>
                  </div>
                </div>

                
                </div>

</div>
                
</div>
                
@endsection