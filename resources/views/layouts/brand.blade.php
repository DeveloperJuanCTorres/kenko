<div class="container-fluid training overflow-hidden pt-5">
    <div class="container pt-5">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">NUESTROS PROVEEDORES</h5>
                </div>                                
            </div>
    </div>
</div>
<div class="container pt-5">
   <section class="customer-logos slider">
        @foreach($marcas as $item)
      <div class="slide"><img src="storage/{{$item->image}}"></div>     
      @endforeach
   </section>
</div>