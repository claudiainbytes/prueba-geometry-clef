@extends('conferencias.layouts.app', ['entity' => $entity])
@section('content')
    <div class="row conferencia">
        <div class="col-sm-6  offset-sm-3 mb-3">
            <h2>{{ $entity->titulo }}</h2>
            <div class="embed-responsive embed-responsive-16by9 my-2">
                <iframe class="embed-responsive-item" src="{{$entity->video}}?autoplay=1&mute=1&enablejsapi=1" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-sm-4 mb-3">
            <a href="/" class="btn btn-general w-100">Regresar al menú</a>
        </div>
    </div>    
@endsection