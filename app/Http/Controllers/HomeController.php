<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Conferencia;
use App\UsuarioConferencia;
use Illuminate\Http\Request;
use App\Exports\UsuarioConferenciaExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        $records = Usuario::orderBy('id')->get();
        $numRecords = Usuario::count();
        return view('home', [ 'data' => $records, 'numRecords' => $numRecords]);
    }

    public function generarUsuarioConferencias($idUsuario)
    {
        $usuario = Usuario::find($idUsuario);
        $conferenciasxusuario = UsuarioConferencia::where('usuario_id', $idUsuario)->get();
        foreach($conferenciasxusuario as $c){
            $c->conferencia = Conferencia::find($c->conferencia_id);
        }
        $records = []; 
        $numRecords = 0;
        $record = null;
        foreach($conferenciasxusuario as $k => $v){
            $record['nombres'] = $usuario->nombres;
            $record['apellidos'] = $usuario->apellidos;
            $record['email'] = $usuario->email;
            $record['conferencia'] = $v->conferencia->titulo;
            $record['total_rep'] = $v->total_rep;
            $records[] = $record; 
        }

        $numRecords = UsuarioConferencia::where('usuario_id', $idUsuario)->count();
        
        $arrDatos = [ 'data' => $records, 'numRecords' => $numRecords, 'usuario' => $usuario];
        return $arrDatos;
    }

    public function usuarioConferencias($idUsuario)
    {
        $arrDatos = $this->generarUsuarioConferencias($idUsuario);
        return view('vistas', $arrDatos);
    }

    public function generarExcel($idUsuario)
    {
        $arrDatos = $this->generarUsuarioConferencias($idUsuario);
        $export = new UsuarioConferenciaExport($arrDatos['data']);
        ob_end_clean(); 
        ob_start(); 
        return Excel::download($export, 'usuarioxconferencias.xlsx');
        
    }
}
