<?php session_start();

if(isset($_SESSION['carrito']) || isset($_POST['titulo'])){

    if(isset($_SESSION['carrito'])){

        $carrito_mio=$_SESSION['carrito'];

        if(isset($_POST['titulo'])){

            $titulo=$_POST['titulo'];

            $precio=$_POST['precio'];

            $cantidad=$_POST['cantidad'];

            $ref=$_POST['ref'];


 

            $donde=-1;

            for($i=0;$i<=count($carrito_mio)-1;$i ++){

               if($ref==$carrito_mio[$i]['ref']){

                $donde=$i;

               }

            }

 

            if($donde != -1){

                $cuanto=$carrito_mio[$donde]['cantidad'] + $cantidad;

                $carrito_mio[$donde]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cuanto,"ref"=>$ref);

            }else{

                $carrito_mio[]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);

            }

        }

 

    }else{

        $titulo=$_POST['titulo'];

        $precio=$_POST['precio'];

        $cantidad=$_POST['cantidad'];

        $ref=$_POST['ref'];

        $carrito_mio[]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);    

    }

 

    if(isset($_POST['cantidad'])){

        $id_producto=$_POST['id_producto'];

        $cuantos=$_POST['cantidad'];

        if($cuantos<1){

            $carrito_mio[$id_producto]=NULL;

        }else{

            $carrito_mio[$id_producto]['cantidad']=$cuantos;

        }

    }


 

$_SESSION['carrito']=$carrito_mio;

 

//todo ok

 

}else{

 

//error

}
 

?>