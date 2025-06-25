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
                    <a href="/about" class="nav-item nav-link active">¿Quienes somos?</a>
                    <a href="/contact" class="nav-item nav-link">Contáctanos</a>                    
                    <a href="/covid19" class="nav-item nav-link">Medidas COVID-19</a>
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
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">¿Quiénes Somos?</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item active text-secondary">Nosotros</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="storage/{{$nosotros->image}}" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                        <!-- <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> -->
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">{{$nosotros->subtitulo}}</h5>
                    <h1 class="display-5 mb-4">{{$nosotros->titulo}}</h1>
                    <p class="mb-4">{!! Str::markdown($nosotros->description) !!}</p>
                    <div class="row gy-4 align-items-center">
                        <div class="col-4 col-md-3">
                            <div class="bg-light text-center rounded p-3">
                                <div class="mb-2">
                                    <i class="fas fa-award fa-4x text-primary"></i>
                                </div>
                                <h1 class="display-5 fw-bold mb-2">{{$nosotros->experiencia}}</h1>
                                <p class="text-muted mb-0">Años de Experiencia</p>
                            </div>
                        </div>
                        <div class="col-8 col-md-9">
                            <div class="d-flex flex-wrap">
                                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                    <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                        <div class="position-absolute" style="top: 0; left: 25px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="text-primary">¿Tienes alguna pregunta?</span>
                                    <span class="fw-bold fs-5" style="letter-spacing: 2px;color: #003A66;">{{$nosotros->telefono}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid features overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-users fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Misión</h5>
                            <p class="mb-3">{!! Str::markdown($nosotros->mision) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-low-vision fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Visión</h5>
                            <p class="mb-3">{!! Str::markdown($nosotros->vision) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-user-graduate fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Valores</h5>
                            <p class="mb-3">{!! Str::markdown($nosotros->valores) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    
    @include('layouts.footer')
@endsection