
@extends('layout.layout')

@section('title', 'Login')


@section('content')

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 </head>
 <body>
    <style>
 .card-body{
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
                    
                <div class="navbar-nav w-100 overflow-hidden" stylebuscar="height: 410px">
                    @if(count($categorias)>0)
                    @foreach($categorias as $cat)
                    <a href="/productos/categorias/{{ $cat->id_categoria}}" class="nav-item nav-link">{{ $cat->descripcion}}</a>
                    @endforeach
                    @endif
                </div>       
                @include('clima')
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
                    @auth
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
            </div>
    </div>
<!-- <pre> {{Auth::user()}}</pre> -->
   <!-- start formulario   -->
 <main class="login-form">
    <div class="cotainer" >
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" >   
                    <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <div style=" margin: 0 auto; ">
                                   <h2>BIENVENIDO</h2>
                                </div>
                               
                                <div class="col-md-12 offset-md-0" >
                                    <input type="email" id="email" class="form-control" name="email" required autofocus value="{{old('email')}}" placeholder="Correo electrónico"style="margin-top: 8px;">
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                             <div class="col-md-12 offset-md-0">
                                    <input type="password" id="password" class="form-control" name="password" required placeholder="Contraseña" style="margin-top: 8px; margin-bottom: 0px;" >
                                </div>
                            </div>
                        

                            <div>
                                @if($errors-> any())
                                    @foreach($errors->all() as $error)
                                    <li style = "color:#dd4e41;" >{{$error}}</li>
                                    @endforeach
                            </div>
                                @endif
                                
                            <div class="col-md-5 offset-md-2">
                            <!-- <label style= "margin-left: 30px;">
                            <input type="checkbox" name="remember">
                            Recordar mi sesión
                          </label> -->
                                <button type="submit" class="btn btn-primary" style = "width: 250px; height: 45px; background: #D19C97; color: #ffffff;margin-top: 10px;" >
                                    Iniciar sesión
                                </button>
                            </div>
                          
                            <!-- <div class="col-md-8 offset-md-2">   
                            <a href="{{route('recovery.index')}}" class="btn btn-link"  style = "color:#00000094; padding-bottom: 0px; ">
                                    ¿Perdiste tu contraseña?
                                </a>
                            </div> -->

                            <div class="col-md-10 offset-md-2"> 
                            <a href="{{route('register.index')}}" class="btn btn-link"style = "color:#00000094; padding-top: 0px;">
                                ¿No tienes cuenta? Regístrate
                                </a>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div> 

</main>

 </body>
 </html>   

   






@endsection