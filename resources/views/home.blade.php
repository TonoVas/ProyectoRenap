@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center">{{ __('RENAP') }}</div>

                <div class="card-body">
                    <h3 class="bg-white text-dark text-center">Tramitantes de DPI</h3>
                    <hr> 
                    <br>
                    <div class="form-group row text-center">
                        <div class="col-md-6 offset-md-3">
                            <a  href="admin"><img src="img/dpi.png" ></a>
                            <a type="submit" class="btn btn-primary " href="admin">{{ __('Ver Tramites de DPI') }}</a>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
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
