 <!-- Topbar Start -->
 <div class="container-fluid">
     <div class="row align-items-center py-3 px-xl-5">
         <div class="col-lg-3 d-none d-lg-block">
             <a href="/" class="text-decoration-none">
                 <h1 class="m-0 display-5 font-weight-semi-bold">Ñemuha</h1>
             </a>
         </div>

         <div class="col-lg-6 col-6 text-left">
             <form action="" id="searchForm">
                 <div class="input-group">
                     <input type="text" class="form-control" placeholder="Buscar Productos" id="nombreProducto">
                     <div class="input-group-append">
                         <span class="input-group-text bg-transparent text-primary">
                             <!-- <a href="javascript:void(0)" 
                                id="show-user" 
                                data-url="" 
                                class="btn btn-info"
                                >Show</a> -->
                             <i class="fa fa-search" id="buscar"></i>
                             <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                         </span>
                     </div>
                 </div>
             </form>
         </div>
         <div class="col-lg-3 col-6 text-right">
             <!-- <a href="" class="btn border">
                        <i class="fas fa-heart text-primary"></i>
                        <span class="badge">0</span>
                    </a> -->
             <a href="" class="btn border">
                 <i class="fas fa-shopping-cart text-primary"></i>
                 <span class="badge">0</span>
             </a>
         </div>

     </div>
 </div>
 <!-- Topbar End -->


 <script type="text/javascript">
     $(document).ready(function() {

         $('#buscar').on('click', function(e) {
             // $('#searchForm').on('submit',function(e){
             e.preventDefault();

             let nombre = $('#nombreProducto').val();

             let userURL = '/productos/' + nombre;

             console.log('/productos/' + nombre);
             $.ajax({
                 url: userURL,
                 type: 'GET',
                 dataType: 'json',
                 success: function(data) 
                 {                    
                    //  $('#productosModal').modal('show');
                     console.log(data[0].id_producto);
                     $.each(data , function(index, val) { 
                        console.log('idx val',index, val);
                        // {id_producto: 9, id_categoria: 1, nombre: 'mantel', precio: '30000.00', descripcion: 'Mantel mesa larga', …}
                        console.log("c",data);
                        let div = document.createElement("div")
                        // let p = document.createElement("p")
                        // div.append("Some text", p)

                        document.getElementById("demo").innerHTML = `<div class='col-lg-3 col-md-6 col-sm-12 pb-1'><div class='card product-item border-0 mb-4'> <img class='img-fluid w-100' src='/img/${val['imagen']}' alt=''></div><div class='card-body border-left border-right text-center p-0 pt-4 pb-3'><h6 class='text-truncate mb-3'>${val['nombre']}</h6><div class='d-flex justify-content-center'><h6>${val['precio']} Gs</h6><h6 class='text-muted ml-2'>
                        </h6></div>
                        <div>${val['descripcion']}</div>
                        </div><div class='card-footer d-flex justify-content-between bg-light border'><a href='' class='btn btn-sm text-dark p-0'></div></div></div>`
                        
                    });
                    
                 },
                 error: function() {
                     alert('There was some error performing the AJAX call!');
                 }
             });
         });

         $('#closemodal').click(function() {
            $('#productosModal').modal('hide');
        });
     });
 </script>