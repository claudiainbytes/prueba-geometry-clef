@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <!--tabla-->
                    <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ver</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $k => $v)
                    <tr>
                        <th scope="row">{{ $v->id }}</th>
                        <td>{{ $v->nombres }}</td>
                        <td>{{ $v->apellidos }}</td>
                        <td>{{ $v->email }}</td>
                        <td><a href="/home/usuario/{{ $v->id }}/conferencias" class="btn btn-info btn-sm">Conferencias Vistas</a></td>
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
