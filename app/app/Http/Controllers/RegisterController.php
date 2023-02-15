<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //

    public function create (){
        return view ('auth.register');
    }

    public function store(){

        $user= User::create(request(['rol','cedula','nombre','fechanacimiento','direccion','ciudad','telefono','email','password']));
        
        auth()->login($user);
        return redirect()->to('/');

    }

}
