
@extends('layout.layout')

@section('title', 'Ñemuha')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"> </script>

<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Lista de productos</h6>
                
            </a>
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
                        <a href="/vendedores/{{$vendedor[0]['id']}}/CargarProducto" class="nav-item nav-link">Carga de Productos</a>
                        <a href="/vendedores/{{$vendedor[0]['id']}}/ListaProductos" class="nav-item nav-link">Lista de Productos</a>
                        <a href="detail.html" class="nav-item nav-link">Detalles de Ventas</a>                       
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="" class="nav-item nav-link">Salir</a>
                    </div>
                </div>
            </nav>            
        </div>
           
               
    </div>
</div>

<!-- Navbar End -->



<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">{{$vendedor[0]['nombre']}}</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @if(count($productos)>0)
                @foreach($productos as $prd)
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ $prd->imagen}}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{ $prd->nombre}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>Gs. {{ $prd->precio}}</h6><h6 class="text-muted ml-2"></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <label ><i class="fas fa-eye text-primary mr-1"></i>Detalle</label>
                                <h6>{{$prd->descripcion}}</h6><h6 class="text-muted ml-2"></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif   
        </div>
    </div>

    <div>
        <p><a href="route{{productos.user}}"> Exportar datos 
            FORMATO EXCEL
        </a>

        </p>

    </div>

@endsection