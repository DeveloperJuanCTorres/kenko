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
                    <a href="/" class="nav-item nav-link active">Inicio</a>
                    <a href="/about" class="nav-item nav-link">¿Quienes somos?</a>
                    <a href="/contact" class="nav-item nav-link">Contáctanos</a>                    
                    <a href="/covid19" class="nav-item nav-link">Medidas COVID-19</a>
                    <a href="/portfolio" class="nav-item nav-link">Portafolio</a>
                </div>
 
                <a href="/work" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Trabaja con nosotros</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach($banners as $key => $item)
                @if($key==1)
                    <div class="carousel-item active">
                        <img src="storage/{{$item->imagen}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                @if($item->subtitulo)
                                    <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">{{$item->subtitulo}}</h4>
                                @endif
                                @if($item->titulo)
                                    <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">{{$item->titulo}}</h1>
                                @endif
                                @if($item->descripcion)
                                    <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">{{$item->descripcion}}</p> 
                                @endif                                
                            </div>
                        </div>
                    </div>
                @else
                <div class="carousel-item">
                    <img src="storage/{{$item->imagen}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="text-center p-4" style="max-width: 900px;">
                            @if($item->subtitulo)
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">{{$item->subtitulo}}</h4>
                            @endif
                            @if($item->titulo)
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">{{$item->titulo}}</h1>
                            @endif
                            @if($item->descripcion)
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">{{$item->descripcion}}</p> 
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                <span class="visually-hidden-focusable">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                <span class="visually-hidden-focusable">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->   

    <!-- Marcas -->
    @include('layouts.brand')
    <!-- fin Marcas -->
   
    <!-- Training Start -->
    <div class="container-fluid training overflow-hidden pt-5">
        <div class="container pt-5">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">NUESTROS PRODUCTOS</h5>
                </div>
                                
            </div>
            @foreach($categorias as $key => $item)
            <div class="row g-4 py-5">
                <h1 class="display-5 mb-4 text-center">{{$item->name}}</h1>
                @if($item->subtaxonomies->count()>0)
                    @foreach($item->subtaxonomies as $key => $item1)
                        <h2 class="mb-4" style="text-align: left;">{{$item1->name}}</h2>
                        @foreach($item1->products as $key => $item3)
                        <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="training-item">
                                <div class="training-inner">
                                    <img src="storage/{{$item3->image}}" style="height: 350px;" class="img-fluid w-100 rounded" alt="Image">
                                    
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <a href="#"><h4 class="text-white">{{$item3->name}}</h4></a>
                                    <p class="text-white-50">{{$item3->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                @else
                    @foreach($item->products as $key => $item4)
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="storage/{{$item4->image}}" style="height: 350px;" class="img-fluid w-100 rounded" alt="Image">
                                
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">{{$item4->name}}</h4></a>
                                <p class="text-white-50">{{$item4->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <!-- Training End -->
    
    @include('layouts.footer')
      
@endsection
