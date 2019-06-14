<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link href="{{ '/css/bootstrap/app.css' }}" rel="stylesheet">
    
</head>
<body>
    <div id="conferencias-app" class="conferenciasapp" v-cloak>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>{{ config('conferenciasapp.app.brand')}}</h1>
                        <h2>{{ config('conferenciasapp.app.title')}}</h2>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        @if (isset( $entity ) && ( $entity->id != null ))    
                            <span class="conftitle">{{ $entity->titulo }}</span>
                        @else
                            <span class="welcome">{{ config('conferenciasapp.app.welcome')}}</span>
                        @endif    
                    </div>
                </div>
            </div>
        </header>    
        <main role="main" class="main my-3">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                    @if (isset( $session ) && ($session !== false ))    
                        {{$usuario->nombres}} {{$usuario->apellidos}} <a href="/usuarios/logout" class="btn btn-danger btn-sm">Cerrar sesión</a>
                    @else
                        <a href="/usuarios" class="btn btn-danger btn-sm">Ingrese o regístrese aquí</a>
                    @endif 
                    </div>
                    <div class="col-sm-4 text-right">
                    {{ config('conferenciasapp.app.footer_text')}}
                    </div>    
                </div>    
            </div>
        </footer>
    </div>
    
    <!-- JavaScript -->
    <script>
       window.Laravel = {!! json_encode([
           'csrfToken' => csrf_token()
       ]) !!}; 
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
