
@extends('layout.layout')

@section('title', 'Ñemuha')
@section('content')
 
<style>
.btn-outline-secondary:hover  {
  color: #000000 ;
  background-color: #fefefe;
  border-color: #6073b7;
  margin-top: 2px;
}
 .btn-outline-secondary {
 color:#000000 ;
  border-color: #161719b3;
  margin-top: 2px;
}



    
</style>
<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Productos</h6>
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
                        <a href="/" class="nav-item nav-link active">Inicio</a>
                        @auth
                        <a href="shop.html" class="nav-item nav-link">Compras</a>
                        <a href="detail.html" class="nav-item nav-link">Detalles de compras</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"></a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;" onclick="consultar_carrito();"><i class="fas fa-shopping-cart"></i> <span id="count_carrito" style="color: red; font-weight:bold;"></span> Mi Carrito</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div> -->

                    </div>
                    <div class="navbar-nav ml-auto py-0">
                    <form action="/logout" method="POST">
                            @csrf
                            <a href="#" 
                            onclick="this.closest('form').submit()">
                        
                        Salir</a>
                        </form>   

                    @else
                        <a href="{{route('login.index')}}" class="nav-item nav-link" style="margin-left: 730px;">Iniciar sesion</a>
                        <a href="{{route('register.index')}}" class="nav-item nav-link">Registrarse</a>
                        @endauth
                       
                    </div>
                </div>
            </nav>
            <!-- <div id="demo"></div>
            <div id="header-carousel" class="carousel slide">
                <div class="carousel-inner">
                    @if(count($categorias)>0)
                        @foreach($categorias as $key => $cat)
                            @if ($loop->first)
                                <div class="carousel-item active" style="height: 410px;">
                            @else
                                <div class="carousel-item" style="height: 410px;">
                            @endif
                            <img class="img-fluid" src="img/carousel-{{ $cat->id_categoria}}.jpg" alt="Image"> TODO imagen categoria -->
                            <!-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{ $cat->descripcion}}</h3>
                                    <a href="/productos/categorias/{{ $cat->id_categoria}}" class="btn btn-light py-2 px-3">Comprar ahora</a> <!-- TODO link comprar -->
                                <!-- </div>
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
                    </a> -->
                <!-- </div>
            </div>
        </div>        -->
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Products Start -->
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">{{$nombreCategoria[0]['nombre']}}</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @if(count($productos)>0)
                @foreach($productos as $prd)
                <div id="mi_div" class="col-4">

<div class="card shadow-sm">

  <img src="img/<?php echo $prd->imagen; ?>.jpg" alt="">

  <div class="card-body">

    <h3 class="card-text"><?php echo $prd->nombre; ?></h3>
    <div class="descripcion" style= "background-color: #eecdca">
        <p style="margin-bottom: 0px;border-color:#6073b7;">Descripción</p>
    <p class="card-text"><?php echo $prd->descripcion; ?></p></div>
    
    <div class="d-flex justify-content-between align-items-center">

      <div class="btn-group">

        <!-- //<button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button> -->

        <button id="al_carro" type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref<?php echo $prd->id_producto; ?>').val(),$('#titulo<?php echo $prd->id_producto; ?>').val(),$('#precio<?php echo $prd->id_producto; ?>').val(),$('#cantidad<?php echo $prd->id_producto; ?>').val());

            setTimeout(function() {count_carrito();}, 500);

        ">Añadir al carrito</button>

        <input name="ref" type="hidden" id="ref<?php echo $prd->id_producto; ?>" value="<?php echo $prd->id_producto; ?>" />                          
        
        <input name="precio" type="hidden" id="precio<?php echo $prd->id_producto; ?>" value="<?php echo $prd->precio; ?>" />

        <input name="titulo" type="hidden" id="titulo<?php echo $prd->id_producto; ?>" value="<?php echo $prd->nombre; ?>" />

        <input name="cantidad" type="hidden" id="cantidad<?php echo $prd->id_producto; ?>" value="1" class="pl-2" />
        
       

    </div>

      <small class="text-muted"><?php echo $prd->precio; ?>Gs</small>

    </div>

  </div>

</div>

</div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src={{ $prd->imagen}} alt=">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{ $prd->nombre}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>Gs. {{ $prd->precio}}</h6><h6 class="text-muted ml-2"></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ver Detatlle</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                            </div>
                        </div>
                    </div> -->
                @endforeach
            @endif    
              
        </div>
    </div>
<!-- Products End -->

@endsection