<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
//controlador de login 

class SessionsController extends Controller
{
    //
    public function create (){
        return view ('auth.login');
    }

    public function store (){
       
        Log::info('Ingresamos a SessionsController.index.');
      
        $credentials= request()->only('email','password');
        //dump($credentials);
        //$remember=request()->filled('remember');
        
        if (Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect('/');
        }
        throw ValidationException::withMessages([ 
            'email' => __('auth.failed')
        
        ]);
        
    }

    public function destroy (){
        auth()->logout();
        return redirect()->to('/');
    }

    public function recovery (){
        return view('auth.recovery');
    }

    // public function ingresar (){

          
    //     $email = request('email');
    //     echo $email;
    //     $user = User::where('email', $email)->get();
    //         echo $user;
    //     // $rol =$user[0]['rol'];

    //     // if ($rol == 'vendedor') {
           
    //     //     //return view("/vendedores", ["categorias"=>$categorias], ["rol"=>$rol]);

    //     //     Log::info('Salimos de HomeController.index.');
    //     //     return view("vendedores.index", compact('rol', 'user','categorias'));
    //     // }
    //     // elseif ($rol == 'cliente') {
    //     //     Log::info('Salimos de HomeController.index.');
    //     //      return view("index", ["categorias"=>$categorias], ["rol"=>$rol]);
    //     // }

    // }
    
    public function recoverypost (){
       
        $email = request('email');
        $password = request('password');
        $password_repea = request('password_repeat');

        if ($password == $password_repea)  {
            
            update();
        }
       
    }
}
