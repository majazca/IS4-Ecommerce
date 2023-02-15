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
                        <a href="{{route('cargarProducto')}}" class="nav-item nav-link">Cargar Productos</a>
                        <a href="detail.html" class="nav-item nav-link">Detalles de ventas</a>
                        <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"></a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            -->
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

<div class="container-fluid pt-5"style=" margin-left: 510px; background-color: #eee;;width: 500px;"> 
    <h4 style=" margin-left: 25px;" >Cargar Productos</h4>
    <div class="row px-xl-5 pb-3">
        <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{route('vendedores.guardar')}}">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required="">
            </div>            
            <input type="hidden" id="id_vendedor" name="id_vendedor" class="form-control" required="" value="{{$vendedor[0]['id_vendedor']}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label for="id_categoria">Categoria:</label>
                <select id="id_categoria" name="id_categoria">
                    @if(count($categorias)>0)
                        @foreach($categorias as $cat)                            
                            <option value="{{ $cat->id_categoria}}">{{ $cat->descripcion}}</option>                            
                        @endforeach
                    @endif  
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="text" id="cantidad" name="cantidad" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" id="precio" name="precio" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="iva">IVA</label>
                <input type="text" id="iva" name="iva" class="form-control" required="">
            </div>
            <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

<!-- Featured Start -->
<!-- <div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Datos</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Reclamos</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Contactos</h5>
            </div>
        </div>
    </div>
</div> -->
<!-- Featured End -->
@endsection