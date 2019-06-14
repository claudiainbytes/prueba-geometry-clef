@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Usuarios por Conferencia <a href="/home" class="btn btn-info btn-sm">Usuarios</a> <a href="/home/usuario/{{$usuario->id}}/excel" class="btn btn-success btn-sm">Generar Excel</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Conferencias vistas: {{$numRecords}}</p>
                    <!--tabla-->
                    <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Email</th>
                        <th scope="col">Conferencia</th>
                        <th scope="col">Num. reproducciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $k => $v)
                    <tr>
                        <th scope="row">{{$k+1}}</th>
                        <td>{{$data[$k]['nombres']}}</td>
                        <td>{{$data[$k]['apellidos']}}</td>
                        <td>{{$data[$k]['email']}}</td>
                        <td>{{$data[$k]['conferencia']}}</td>
                        <td>{{$data[$k]['total_rep']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <!--tabla-->
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
