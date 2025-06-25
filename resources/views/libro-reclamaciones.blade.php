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
                    <a href="/covid19" class="nav-item nav-link">Medidas COVID-19</a>
                    <a href="postfolio" class="nav-item nav-link">Portafolio</a>
                </div>
 
                <a href="/work" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Trabaja con nosotros</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Libro de reclamaciones</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item active text-secondary">Libro de reclamaciones</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content px-4">
                    <div class="header-text">
                        <h3 class="pt-4">1. DATOS DE LA PERSONA QUE PRESENTA LA QUEJA O RECLAMO</h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input required type="date" class="form-control" id="fecha_nac" placeholder="Fecha Nacimiento">
                                    <label for="name">Fecha Nacimiento</label>
                                </div>                      
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <select required class="form-control" name="tipo_doc" id="tipo_doc">
                                        <option value="0">-Seleccionar-</option>
                                        <option value="DNI">DNI</option>
                                        <option value="PASAPORTE">PASAPORTE</option>
                                    </select>
                                    <label for="name">Tipo documento</label>
                                </div>                       
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="numero_doc" placeholder="Número de documento">
                                    <label for="name">Número de documento</label>
                                </div>                       
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombres" placeholder="Nombre">
                                    <label for="name">Nombre</label>
                                </div>                        
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="apellido_pat" placeholder="Apellido paterno">
                                    <label for="name">Apellido paterno</label>
                                </div>                        
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="apellido_mat" placeholder="Apellido materno">
                                    <label for="name">Apellido materno</label>
                                </div>                        
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <label for="name">Email</label>
                                </div>                       
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    @include('layouts.phone')
                                </div>                       
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <select id="departamento" class="form-control departamento" name="mauticform[departamento]">    
                                        <option data-id="" value="">-Seleccionar-</option>
                                    </select>
                                    <label for="name">Departamento</label>
                                </div>                       
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <select id="provincia" class="form-control provincia" name="mauticform[provincia1]">
                                        <option data-id="" value="Chachapoyas">-Seleccionar-</option>                
                                    </select>
                                    <label for="name">Provincia</label>
                                </div>                         
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <select id="distrito" class="form-control distrito" name="mauticform[distrito1]">
                                        <option data-id="" value="">-Seleccionar-</option>
                                    </select>
                                    <label for="name">Distrito</label>
                                </div>                        
                            </div>

                            <div class="col-lg-9 col-md-12 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                                    <label for="name">Dirección fiscal</label>
                                </div>                       
                            </div>
                        </div>
                        <h3 class="pt-4">2. INFORMACIÓN GENERAL</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="orden_compra" placeholder="Orden de compra">
                                    <label for="name">Orden de compra</label>
                                </div>                      
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="producto" placeholder="Monto del producto/servicio">
                                    <label for="name">Monto del producto/servicio</label>
                                </div>                       
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <textarea class="form-control" id="reclamo" rows="10" placeholder="Escribe"></textarea>
                                    <label for="name">Detalla tu queja/reclamo</label>
                                </div>                        
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                                <div class="form-floating">
                                    <textarea class="form-control" id="pedido" rows="10" placeholder="Escribe"></textarea>
                                    <label for="name">Pedido</label>
                                </div>                         
                            </div>
                            <div class="col-lg-12 my-4 text-center">
                                <button class="btn btn-primary py-3 enviar">Enviar reclamo</button>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
      
@endsection