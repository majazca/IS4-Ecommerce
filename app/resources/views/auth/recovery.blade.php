@extends('layout.layout')

@section('title', 'Registrarse')


@section('content')
<html>
<style>
    .card-body{
        background-color: #F2F2F2;
    }
    .card{
        background-color: #F2F2F2;
    }
 </style>  

 <!-- Navbar Start -->

 <div class="container-fluid mb-5">
    <div class="row border-top px-xl-4" style= "height:100px">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categorias</h6>
                <i class="fa fa-angle-down text-dark"></i>
           
                       
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                          
                                <a href="" class="dropdown-item">Artesanias</a>
                                <a href="" class="dropdown-item">Ropa</a>
                                <a href="" class="dropdown-item">Juguetes</a>
                            
                    </div> 
                </div>
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
                        <a href="shop.html" class="nav-item nav-link">Compras</a>
                        <a href="detail.html" class="nav-item nav-link">Detalles de compras</a>
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
                    <a href="{{route('login.index')}}"class="nav-item nav-link">Iniciar sesion</a>
                        <a href="{{route('register.index')}}" class="nav-item nav-link">Registrarse</a>
                    </div>
                </div>
            </nav>
            </div>
    </div>
<!-- end navbar -->

 <!-- form register start -->
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-7">
                    <div class="card"style=" width: 700px; margin: 0 auto;">
                    <div style=" margin: 0 auto; margin-top: 10px;">
                                   <h4> Recuperar contraseña</h4>
                                </div>
                        <div class="card-body">
                            <form name="my-form" action="" method="POST">
                            @csrf
                                <div class="form-group ">
                                    <label for="userEmail" class="col-md-4 col-form-label ">Correo eléctronico</label>
                                    <div class="col-md-12">
                                    <input type="text" class="form-control" name="email"  value="">
                                    </div>
                                </div>

                                <!-- <div class="form-group ">
                                    <label for="password" class="col-md-4 col-form-label ">Contraseña</label>
                                    <div class="col-md-12">
                                    <input type="password" class="form-control"  name="password" value="">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="password" class="col-md-4 col-form-label ">Repetir Contraseña</label>
                                    <div class="col-md-12">
                                    <input type="password" class="form-control"  name="password_repeat" value="">
                                    </div>
                                </div> -->
                            
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="color:#ffffff;margin-left: 100px;margin-right:0px;width: 175.6px;height: 40px;" >
                                        Recuperar
                                        </button>
                                        </div> 
                                    </div>
                                    <div class="col-md-6 ">
                                    <div class="form-group">
                                        <a href="{{route('login.index')}}" class="btn btn-primary" style="color:#ffffff;margin-left:5px;width: 175.6px;height: 40px;">
                                        Volver al login
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
<!-- end form register -->
</html>

@endsection
