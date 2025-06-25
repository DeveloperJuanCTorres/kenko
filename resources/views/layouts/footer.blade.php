    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-secondary mb-4">Contactanos</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> Mz. E Lt.31 Urb. La Florida, Chiclayo, Lambayeque, Perú</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@kenkosac.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> (074) 435229</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-secondary me-2"></i>
                            <a class="btn mx-1" href="{{$contactanos->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn mx-1" href="{{$contactanos->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn mx-1" href="contact"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-secondary mb-4">Enlaces útiles</h4>
                        <a href="/" class=""><i class="fas fa-angle-right me-2"></i> Inicio</a>
                        <a href="/about" class=""><i class="fas fa-angle-right me-2"></i> Nosotros</a>
                        <a href="/contact" class=""><i class="fas fa-angle-right me-2"></i> Contáctanos</a>
                        <a href="/covid19" class=""><i class="fas fa-angle-right me-2"></i> Medidas COVID-19</a>
                        <a href="/portfolio" class=""><i class="fas fa-angle-right me-2"></i> Portafolio</a>
                        <a href="/work" class=""><i class="fas fa-angle-right me-2"></i> Trabaja con nosotros</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <h4 class="text-secondary mb-4 text-center">Libro de Reclamaciones</h4>
                        <a href="/libro-reclamaciones">
                            <img class="d-block m-auto" src="img/libro.png" alt="" style="width: 100px;">
                        </a>                        
                        <h5 class="text-secondary text-center">RUC: {{$contactanos->ruc}}</h5>
                        <h5 class="text-secondary text-center">{{$contactanos->razon_social}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#" class="border-bottom text-white">Copyright 2025 <i class="fas fa-copyright text-light me-2"></i>{{$contactanos->razon_social}}</a>, Todos los derechos reservados.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">
                    Diseñado por <a class="border-bottom text-white" href="https://kenkosac.com">{{$contactanos->razon_social}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>