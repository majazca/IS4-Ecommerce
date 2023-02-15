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
                        <a href="/" class="nav-item nav-link active">Inicio</a>
                        <a href="shop.html" class="nav-item nav-link">Cargar Productos</a>
                        <a href="detail.html" class="nav-item nav-link">Detalles de ventas</a>
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
    <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{route('vendedores.actualizarDatos')}}">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required="" value="{{$vendedor[0]['nombre']}}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" class="form-control" required="" value="{{$vendedor[0]['direccion']}}">
        </div>
        <div class="form-group">
            <label for="ruc">RUC</label>
            <input type="text" id="ruc" name="ruc" class="form-control" required="" value="{{$vendedor[0]['cedula']}}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" required="" value="{{$vendedor[0]['telefono']}}">
        </div>
        <div class="form-group">
            <label for="telefono">Fecha Ingreso</label>
            <input type="text" id="fecha_ingreso" name="fecha_ingreso" class="form-control" required="" value="{{$vendedor[0]['fecha_ingreso']}}">
        </div>
        <div class="form-group">
            <label for="telefono">PIN Acceso</label>
            <input type="text" id="pin_acceso" name="pin_acceso" class="form-control" required="" value="{{$vendedor[0]['pin_acceso']}}">
        </div>
        <input type="hidden" id="id_vendedor" name="id_vendedor" class="form-control" required="" value="{{$vendedor[0]['id_vendedor']}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />


        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</div>


@endsection