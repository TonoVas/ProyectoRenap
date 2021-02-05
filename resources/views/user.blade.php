@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center">{{ __('Estado de DPI') }}</div>
                <div class="card-body">
                    <br>
                    @if (Auth::user()->estado == 1)
                    <div class="alert alert-success text-center" role="alert">
                        <br>
                        <br>
                        <br>
                        El tramite de su DPI fue finalizado
                        <br>
                        <br>
                        <br>
                        Proceso Finalizado...
                        <br>
                        <br>
                        <br>
                    </div>
                    @elseif (Auth::user()->estado==2)
                    <div class="alert alert-warning text-center" role="alert">
                        <br>
                        <br>
                        <br>
                        El tramite de su DPI fue rechazada
                        <br>
                        <br>
                        <br>
                        Porfavor acercar a nuestras oficinas para que su proceso de DPI sea exitoso...
                        <br>
                        <br>
                        <br>
                    </div>
                    @elseif (Auth::user()->estado == 0)
                    <div class="alert alert-danger text-center" role="alert">
                        <br>
                        <br>
                        <br>
                        SU DPI esta siendo tramitado
                        <br>
                        <br>
                        <br>
                        Porfavor esperar...
                        <br>
                        <br>
                        <br>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <br>
        <br>
        <br>
        <br>
        <p class="copyright">RENAP ©  {{date ('d/m/Y')}} </p>
    </div>
</div>
@endsection
