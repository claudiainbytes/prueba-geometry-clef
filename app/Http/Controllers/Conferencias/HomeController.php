<?php

namespace App\Http\Controllers\Conferencias;

use App\Conferencia;
use App\UsuarioConferencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $usuario = null;
        $session = false;
        $urlRegistro = "/usuarios";
        if (Auth::guard('usuario')->check()) {
            $session = true;
            $urlRegistro = "";
            $usuario = Auth::guard('usuario')->user();
        }
        $records = Conferencia::orderBy('id')->get();
        $numRecords = Conferencia::count();
        return view('conferencias.home.index', [ 'data' => $records, 'numRecords' => $numRecords, 'session' => $session, 'usuario' => $usuario, 'urlRegistro' => $urlRegistro ]);
    }

    public function showConferencia($id)
    {
        $usuario = null;
        $session = false;
        $urlRegistro = "/usuarios";
        $conferencia = Conferencia::find($id);
        if (Auth::guard('usuario')->check()) {
            $session = true;
            $urlRegistro = "";
            $usuario = Auth::guard('usuario')->user();
            $this->almacenarNumRep($usuario->id, $conferencia->id);
        }
        return view('conferencias.home.conferencia', [ 'entity' => $conferencia, 'session' => $session, 'usuario' => $usuario, 'urlRegistro' => $urlRegistro ]);
    }

    public function almacenarNumRep($idUsuario, $idConferencia)
    {
        $totalRep = 0;
        if(UsuarioConferencia::where('usuario_id', $idUsuario)->where('conferencia_id', $idConferencia)->exists()){
            $uc = UsuarioConferencia::where('usuario_id', $idUsuario)->where('conferencia_id', $idConferencia)->first();
            $totalRep = $uc->total_rep + 1;  
            UsuarioConferencia::where('usuario_id',$idUsuario)->where('conferencia_id',$idConferencia)->update(['total_rep' => $totalRep]);
        }else{
            $totalRep = $totalRep + 1;
            UsuarioConferencia::create(['usuario_id' => $idUsuario, 'conferencia_id' => $idConferencia, 'total_rep' => $totalRep]);
        }
    }


}
