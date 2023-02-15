<?php session_start();
include ("auxiliar/conexion.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrito</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


 <!-- importante -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



<!-- check -->
<script src="package/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="package/dist/sweetalert2.min.css">



<!-- cargamos nuestros scripts y estilos-->
<script src="js/script.js"></script>

<link rel="stylesheet" href="css/style.css">


</head>
<body>
       





<!-- nabvar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Página</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;" onclick="consultar_carrito();"><i class="fas fa-shopping-cart"></i> <span id="count_carrito" style="color: red; font-weight:bold;"></span> Mi Carrito</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="buscar" name="buscar" onkeyup="buscar_ahora($('#buscar').val());" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>












<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<div class="modal-body">
				<div>
					<div class="p-2">
					

              <div id="mi_carrito"></div>


					</div>
				</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" onclick="borrar_carrito(); count_carrito();">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->











<!-- carrousel -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
     <img src="img/bg1.jpg" class="img-fluid" style="width: 100%;" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Mi tienda</h1>
            <p>Descubre todo sobre nuestra tienda</p>
            <p><a class="btn btn-lg btn-primary" href="#">Accede</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/bg2.jpg" class="img-fluid" style="width: 100%;" alt="">

        <div class="container">
          <div class="carousel-caption">
          <h1>Mi tienda</h1>
          <p>Descubre todo sobre nuestra tienda</p>
            <p><a class="btn btn-lg btn-primary" href="#">Accede</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/bg3.jpg" class="img-fluid" style="width: 100%;" alt="">

        <div class="container">
          <div class="carousel-caption text-end">
          <h1>Mi tienda</h1>
          <p>Descubre todo sobre nuestra tienda</p>
          <p><a class="btn btn-lg btn-primary" href="#">Accede</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>











<!-- articulos -->
<div class="album py-5 bg-light">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php 
    $buscardor=mysqli_query($conexion,"SELECT * FROM articulos"); 
    while($resultado = mysqli_fetch_assoc($buscardor)){ 
    ?>
     
     <div id="mi_div" class="col-4">
        <div class="card shadow-sm">
          <img src="img/<?php echo $resultado["img"]; ?>.jpg" alt="">
          <div class="card-body">
            <p class="card-text"><?php echo $resultado["nombre"]; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                <button id="al_carro" type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref<?php echo $resultado['id']; ?>').val(),$('#titulo<?php echo $resultado['id']; ?>').val(),$('#precio<?php echo $resultado['id']; ?>').val(),$('#cantidad<?php echo $resultado['id']; ?>').val());
                    setTimeout(function() {count_carrito();}, 500);
                ">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["id"]; ?>" />                           
                <input name="precio" type="hidden" id="precio<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["precio"]; ?>" />
                <input name="titulo" type="hidden" id="titulo<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["nombre"]; ?>" />
                <input name="cantidad" type="hidden" id="cantidad<?php echo $resultado["id"]; ?>" value="1" class="pl-2" />
              </div>
              <small class="text-muted"><?php echo $resultado["precio"]; ?>€</small>
            </div>
          </div>
        </div>
      </div>
  
    <?php } ?>
  </div>
</div>
</div>










<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    </ul>
    <p class="text-center text-muted">programaciononline.es</p>
  </footer>











<script>
  $(document).on("click", "#al_carro", function(){
  $(this).closest("#mi_div")
    .find("img")
    .clone()
    .addClass("zoom")
    .appendTo(this);
  setTimeout(function() {
    $(".zoom").remove();
  }, 1000);
});
</script>









        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>


</body>
</html>