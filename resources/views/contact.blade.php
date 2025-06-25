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
                    <a href="#" class="text-muted me-4" style="color: white !important;">DIRECCIÓN: Mz. E Lt.31 Urb. La Florida, Chiclayo, Lambayeque, Perú</a>
                    <a href="#" class="text-muted me-0" style="color: white !important;"><i class="fas fa-phone-alt text-secondary me-2" style="color: white !important;"></i>(074) 435229</a>
                </div>
            </div>
            <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary" style="color: white !important;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary" style="color: white !important;"></i></a>
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
                    <a href="/contact" class="nav-item nav-link active">Contáctanos</a>                    
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
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contáctanos</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item active text-secondary">Contáctanos</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary pe-3">Contacto rápido</h5>
                    </div>
                    <h1 class="display-5 mb-4">¿Tienes preguntas? Contáctanos</h1>
                    <div class="d-flex border-bottom mb-4 pb-4">
                        <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                        <div class="ps-3">
                            <h5>Ubicación</h5>
                            <p>{{$contactanos->direccion}}</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-xl-6">
                            <div class="d-flex">
                                <i class="fas fa-tty fa-3x text-primary"></i>
                                <div class="ps-3">
                                    <h5 class="mb-3">Contacto rápido</h5>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Phone:</h6>
                                        <a href="#" class="fs-5 text-primary">{{$contactanos->telefono}}</a>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Email:</h6>
                                        <a href="#" class="fs-5 text-primary">{{$contactanos->email}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex">
                                <i class="fas fa-clone fa-3x text-primary"></i>
                                <div class="ps-3">
                                    <h5 class="mb-3">Horario</h5>
                                    <div class="mb-3">
                                        <h6 class="mb-0">{!! Str::markdown($contactanos->horario) !!}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <div class="me-4">
                            <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 10px;"><i class="fas fa-share fa-3x text-primary"></i></div>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-secondary border-secondary me-2 p-0" href="{{$contactanos->facebook}}" target="_blank">facebook <i class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-secondary border-secondary mx-2 p-0" href="{{$contactanos->instagram}}" target="_blank">instagram <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary pe-3">Vamos a conectarnos</h5>
                    </div>
                    <h1 class="display-5 mb-4">Envía tu mensaje</h1>
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nombre">
                                    <label for="name">Nombre</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" placeholder="Teléfono">
                                    <label for="phone">Teléfono</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Asunto">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Esquibe tu mensaje aquí" id="message" style="height: 160px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="office pt-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" 
                            style="height: 500px;" src="{{$contactanos->maps}}" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('layouts.footer')
      
@endsection