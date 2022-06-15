<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(request $request){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
       
        $usuarioCre = new User();
       /* $tabla->nombreVarBaseDatos = $request->nameDeForm; */
        $usuarioCre->name = $request->name;

        $usuarioCre->email = $request->email;
        $usuarioCre->password = $request->password;
        $usuarioCre->role = $request->Cargo;  
        $usuarioCre->apellido = $request->apellido;
        $usuarioCre->cedula = $request->cedula;
        $usuarioCre->photo = $request->foto;
/*      
        $path = $request->file('foto')->getRealPath();    
        $logo = file_get_contents($path);
        $base64 = base64_encode($logo);
        $usuarioCre->photo = $base64;
        */
        $usuarioCre->save();
        
    }
}

