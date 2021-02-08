@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header bg-primary text-center">{{ __('RENAP') }}</div>

                <div class="card-body">
                <br>
                <table class="table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">FechaDeNacimineto</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Direccion</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Municipio</th>
                                            <th scope="col">Fotografia</th>
                                            <th scope="col">email</th>
                                            <th scope="col">password</th>
                    </thead>
                    <tbody>
                        @foreach ($dato as $dato)
                    <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->Cedula}}</td>
                    <td>{{$dato->FechaDeNacimineto}}</td>
                    <td>{{$dato->name}}</td>
                    <td>{{$dato->Apellido}}</td>
                    <td>{{$dato->Direccion}}</td>
                    <td>{{$dato->Telefono}}</td>
                    <td>{{$dato->Departamento}}</td>
                    <td>{{$dato->Municipio}}</td>
                    <td>
                        <img src="{{ asset('storage').'/'.$dato->Fotografia}}" alt="60" width="60">
                    </td>
                    <td>{{$dato->email}}</td>
                    <td>{{$dato->password}}</td>
                </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <table class="table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">email</th>
                                            <th scope="col">password</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Proceso</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $dato)
                    <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->name}}</td>
                    <td>{{$dato->email}}</td>
                    <td>{{$dato->password}}</td>
                    <td>{{$dato->estado}}</td>
                    <td>{{$dato->proceso}}
                        <a href="{{route('user.edit', $dato->id)}}" class="btn btn-success"> {{_('Estado')}}</a>
                    </td>
                </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

                <form method="GET" action="{{ route('home') }}" >
                    <div class="form-group row justify-content-center" >
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-dark btn-lg destroy"> {{ __('Regresar') }}</button>
                        </div>
                    </div>
                </form>
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

