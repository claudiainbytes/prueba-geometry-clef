<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use Route;

class UsuariosLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:usuario', ['except' => ['logout']]);
    }

    public function login(Request $request)
    {
        $pathname = '/usuarios';
        $email = $request->get("email");

        $usuario = Usuario::where('email', '=', $email)->first();

        //dd($usuario);
        if($usuario == null) {
            $isValid = false;
        } else{
            $isValid = true;
            if (Auth::guard('usuario')->attempt(['email' => $email, 'password' => 'Usuario.123456'])) {
                $pathname = '/conferencias';
            }
        }
        return response()->json(['success' => 'OK', 'isValid' => $isValid, 'pathname' => $pathname, 'usuario' => $usuario ], 200);
    }

    public function logout()
    {
        Auth::guard('usuario')->logout();
        return redirect()->route('conferencias.dashboard');
    }

    //Muestra el formulario de registro de Usuario
    public function showRegister()
    {
        return view('conferencias.usuarios.register');
    }

    //Almacena el registro en modelo Usuario
    public function store(Request $request)
    {
        $password = Hash::make('Usuario.123456');
        $request->request->add(['password' => $password]);
        Usuario::create($request->all());
        $message = "created";
        return response()->json(['success' => 'OK', 'message' => $message ], 200);
    }
    
}
