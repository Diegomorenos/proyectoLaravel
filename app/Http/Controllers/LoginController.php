<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'documento'=>'required',
            'password'=>'required'  
        ]);

        if(!auth()->attempt($request->only('documento', 'password'))){

            return back()->with('mensaje', 'Credenciales incorrectas');
        }
        return view('auth.login');
    }
}
