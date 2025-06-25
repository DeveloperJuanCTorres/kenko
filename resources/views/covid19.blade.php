@extends('layouts.app')

@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-9 text-center text-lg-start mb-lg-0">
                <div class="d-flex">
                    <a href="#" class="text-muted me-4" style="color: white !important;">DIRECCIÓN: {{$contactanos->direccion}}</a>
                    <a href="#" class="text-muted me-0" style="color: white !important;"><i class="fas fa-phone-alt text-secondary me-2" style="color: white !important;"></i>{{$contactanos->telefono}}</a>
                </div>
            </div>
            <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="{{$contactanos->facebook}}" target="_blank"><i class="fab fa-facebook-f fw-normal text-secondary" style="color: white !important;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="{{$contactanos->instagram}}" target="_blank"><i class="fab fa-instagram fw-normal text-secondary" style="color: white !important;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fa fa-envelope text-secondary" style="color: white !important;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="img/logo.png" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Inicio</a>
                    <a href="/about" class="nav-item nav-link">¿Quienes somos?</a>
                    <a href="/contact" class="nav-item nav-link">Contáctanos</a>                    
                    <a href="/covid19" class="nav-item nav-link active">Medidas COVID-19</a>
                    <a href="/portfolio" class="nav-item nav-link">Portafolio</a>
                </div>
 
                <a href="/work" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Trabaja con nosotros</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Medidas COVID-19</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item active text-secondary">COVID-19</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="storage/{{$seguridad->image_medida}}" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.3s">
                    <h3 class="sub-title pe-3">{{$seguridad->titulo_medidas}}</h3>
                    <p class="mb-4">{!! Str::markdown($seguridad->description_medidas) !!}</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.3s">
                    <h3 class="sub-title pe-3">{{$seguridad->titulo_pregunta}}</h3>
                    <p class="mb-4">{!! Str::markdown($seguridad->description_pregunta) !!}</p>
                </div>
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="storage/{{$seguridad->image_pregunta}}" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                    </div>
                </div>                
            </div>
        </div>

        <div class="container-fluid training overflow-hidden pt-5">
            <div class="container pt-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">{{$seguridad->titulo_seguridad}}</h5>
                    </div>                                
                </div>
            </div>

            <!-- Counter Facts Start -->
            <div class="container-fluid counter-facts py-5">
                <div class="container py-5">
                    <div class="row g-4">
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="counter">
                                <div class="counter-icon">
                                    <img src="storage/{{$seguridad->image_seguridad1}}" width="80" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3>{{$seguridad->description_seguridad1}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="counter">
                                <div class="counter-icon">
                                    <img src="storage/{{$seguridad->image_seguridad2}}" width="80" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3>{{$seguridad->description_seguridad2}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="counter">
                                <div class="counter-icon">
                                    <img src="storage/{{$seguridad->image_seguridad3}}" width="80" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3>{{$seguridad->description_seguridad3}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="counter">
                                <div class="counter-icon">
                                    <img src="storage/{{$seguridad->image_seguridad4}}" width="80" alt="">
                                </div>
                                <div class="counter-content">
                                    <h3>{{$seguridad->description_seguridad4}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Facts End -->
        </div>
    </div>

    <h3 class="py-5 text-center">{{$seguridad->texto_footer}}</h3>
    <!-- About End -->
      
    @include('layouts.footer')
@endsection