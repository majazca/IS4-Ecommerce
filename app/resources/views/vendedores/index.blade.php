
@extends('layout.layout')

@section('title', 'Ñemuha')
@section('content')

<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">{{$vendedor[0]['nombre']}}</h6> 
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
                        <a href="" class="nav-item nav-link active">Inicio</a>
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


@endsection