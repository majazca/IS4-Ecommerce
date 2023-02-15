<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
    * Retorna la vista Home de Ñemuha.
     */
    public function index()
    {
        Log::info('Ingresamos a HomeController.index.');

        $rol = config('global.roles.admin');
        $categorias = $this->obtenerCategorias();

        Log::info('Salimos de HomeController.index.');
        return view("index", ["categorias"=>$categorias], ["rol"=>$rol]);
    }
    #endregion

    // public function index($id)
    // {
    //     Log::info('Ingresamos a HomeController.index.');
    //     $user = User::where('id', $rol)->get();

    //     //$rol = config('global.roles.admin');

    //     $rol =$user[0]['rol'];
    //     $categorias = $this->obtenerCategorias();

    //     if ($rol == 'vendedor') {
    //         //return view("/vendedores", ["categorias"=>$categorias], ["rol"=>$rol]);
    //         Log::info('Salimos de HomeController.index.');
    //         return view("vendedores.index", compact('rol', 'user','categorias'));
    //     }
    //     elseif ($rol == 'cliente') {
    //         Log::info('Salimos de HomeController.index.');
    //          return view("index", ["categorias"=>$categorias], ["rol"=>$rol]);
    //     }
        
       

    // }

    #region Categorias
    public function obtenerCategorias()
    {
        Log::info('Ingresamos a HomeController.obtenerCategorias.');
        Log::debug('Vamos a obtener las categorias.');

        $categorias = Categoria::get();

        Log::info('Salimos de HomeController.obtenerCategorias.');
     return $categorias;
    }

    public function obtenerNombreCategoria($id_categoria)
    {
        Log::info('Ingresamos a HomeController.obtenerNombreCategoria.');
        Log::debug('Vamos a obtener el nombre de la categoria: ' .$id_categoria);

        $nombreCategoria = Categoria::where('id_categoria', $id_categoria)->orderBy('nombre')->get('nombre');


        Log::info('Salimos de HomeController.obtenerNombreCategoria.');
        return $nombreCategoria;
    }

    


    #endregion
}
