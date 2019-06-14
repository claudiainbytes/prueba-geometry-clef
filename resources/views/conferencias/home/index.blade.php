@extends('conferencias.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <p>{{ config('conferenciasapp.confs.todo')}}</p>
        </div>
        @foreach($data as $k => $v)
        @php 
            $urlConferencia="/conferencia/".$v->id."/ver";
            if(!$session){
                $urlConferencia = $urlRegistro;
            }
        @endphp
        <div class="col-sm-4 mb-3">
            <!--a class="thumb" href="/conferencia/{{ $v->id }}/ver"-->
            <a class="thumb" href="{{ $urlConferencia }}">
                <p class="title">{{ $v->titulo }}</p>
                <div class="img">
                    <i class="fas fa-play-circle fa-3x"></i>
                    <img src="/images/conferencias/{{ $v->imagen }}" class="img-fluid"/>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection