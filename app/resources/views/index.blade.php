@extends('layout.layout')

@section('title', 'Ñemuha')
@section('content')

<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categorias</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" stylebuscar="height: 410px">
                    @if(count($categorias)>0)
                    @foreach($categorias as $cat)
                    <a href="/productos/categorias/{{ $cat->id_categoria}}" class="nav-item nav-link">{{ $cat->descripcion}}</a>
                    @endforeach
                    @endif
                </div>
                    <br>
                    <br>
                @include('clima')

            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="" class="nav-item nav-link active">Inicio</a>
                        @auth
                        <a href="shop.html" class="nav-item nav-link">Compras</a>
                        <a href="detail.html" class="nav-item nav-link">Detalles de compras</a>
                       
                        <form action="/logout" method="POST"style="
    margin-top: 20px;
    margin-left: 650px;
">
                            @csrf
                            <a href="#" 
                            onclick="this.closest('form').submit()">
                        
                        Salir</a>
                        </form> 
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"></a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item">Carrito</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div> -->

                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        @else
                        <a href="{{route('login.index')}}" class="nav-item nav-link" style="margin-left: 730px;">Iniciar sesion</a>
                        <a href="{{route('register.index')}}" class="nav-item nav-link">Registrarse</a>
                    
                        @endauth
                        
                    </div>
                </div>
            </nav>
            <div id="demo"></div>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @if(count($categorias)>0)
                        @foreach($categorias as $key => $cat)
                            @if ($loop->first)
                                <div class="carousel-item active" style="height: 410px;">
                            @else
                                <div class="carousel-item" style="height: 410px;">
                            @endif
                            <img class="img-fluid" src="img/carousel-{{ $cat->id_categoria}}.jpg" alt="Image"> <!-- TODO imagen categoria -->
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{ $cat->descripcion}}</h3>
                                    <a href="/productos/categorias/{{ $cat->id_categoria}}" class="btn btn-light py-2 px-3">Comprar ahora!</a> <!-- TODO link comprar -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    </div>

                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Productos de calidad</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Envios gratis</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14 dias de garantia</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Precios accesibles</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Categories Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            @if(count($categorias)>0)
            @foreach($categorias as $cat)
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  
                    <a href="/productos/{{ $cat->id_categoria}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-{{ $cat->id_categoria}}.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">{{ $cat->descripcion}}</h5>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div> -->
    <!-- Categories End -->

    <!-- Modal -->
 
<!-- <div class="modal fade" id="productosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 
      </div>
 
      <div class="modal-body">
      <div class="row px-xl-5 pb-3">
        <div id="demo1"></div>
            
        </div>
      </div>
 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closemodal">Cerrar</button>
      </div>
    </div>
  </div>
</div> -->

    <!-- Offer Start -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="img/offer-1.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Ropa</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Nueva Colección</h1>
                        <a href="/productos/categorias/2" class="btn btn-outline-primary py-md-2 px-md-3">Comprar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="img/offer-2.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Juguetes</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Para los mas chicos</h1>
                        <a href="/productos/categorias/3" class="btn btn-outline-primary py-md-2 px-md-3">Comprar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="/img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
   
    @endsection