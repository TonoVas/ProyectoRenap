@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center"><h5>{{ __('Formulario para Tramite de DPI') }}</h5></div>

                <div class="card-body">

                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                      </div>
                    @endif

                    <br>
                    <div class="text text-center"><h2>Formulario</h2></div>
                    <br>
                    <hr>
                    <br>
                    <form method="POST" action="{{route('create.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="FechaDeNacimineto" class="col-md-4 col-form-label text-md-right">{{ __('Fecha De Nacimineto:') }}</label>
                            <div class="col-md-6">
                            <input type="date" name="FechaDeNacimineto" id="FechaDeNacimineto" required placeholder="Introduce una fecha" max="2003-01-01"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="Apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido:') }}</label>
                            <div class="col-md-6">
                                <input id="Apellido" type="Apellido" class="form-control" name="Apellido" required autocomplete="Apellido" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="Direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion:') }}</label>
                            <div class="col-md-6">
                                <input id="Direccion" type="Direccion" class="form-control" name="Direccion" required autocomplete="Direccion" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="Telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono:') }}</label>
                            <div class="col-md-6">
                                <input minlength="8" maxlength="9"  id="Telefono" type="text" class="form-control"  name="Telefono" required autocomplete="Telefono" pattern="[0-9]+" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="Departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento:') }}</label>
                            <div class="col-md-6" >
                                <select class="form-select col-md-10 col-form-label text-md-right" aria-label="Default select example" name="type" id="type">
                                    <option selected><h4>Seleccione su Departamento</h4></option>
                                    <option value="1">Alta Verapaz</option>
                                    <option value="2">Baja Verapaz</option>
                                    <option value="3">Chimaltenango</option>
                                    <option value="4">Chiquimula</option>
                                    <option value="5">Petén</option>
                                    <option value="6">Progreso</option>
                                    <option value="7">Quiché</option>
                                    <option value="8">Escuintla</option>
                                    <option value="9">Guatemala</option>
                                    <option value="10">Huehuetenango</option>
                                    <option value="11">Izabal</option>
                                    <option value="12">Jalapa</option>
                                    <option value="13">Jutiapa</option>
                                    <option value="14">Quetzaltenango</option>
                                    <option value="15">Retalhuleu</option>
                                    <option value="16">Sacatepéquez</option>
                                    <option value="17">San Marcos</option>
                                    <option value="18">Santa Rosa</option>
                                    <option value="19">Sololá</option>
                                    <option value="20">Suchitepéquez</option>
                                    <option value="21">Totonicapán</option>
                                    <option value="22">Zacapa</option>
                                  </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="Municipio" class="col-md-4 col-form-label text-md-right">{{ __('Municipio:') }}</label>
                            <div class="col-md-6">
                                <input id="Municipio" type="Municipio" class="form-control" name="Municipio" required autocomplete="Municipio" autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="Fotografia" class="col-md-4 col-form-label text-md-right">{{ __('Fotografia:') }}</label>
                            <div class="col-md-6">
                                <input id="Fotografia" type="file" class="form-control" accept=".jpg,.png" name="Fotografia"required onchange="return  validarExt()" autofocus>
                                <div id="visorFotografia" class="text-center">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Formulario') }}
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <br>
        <br>
        <br>
        <br>
        <p class="copyright">RENAP  ©  {{date  ('d/m/Y')}} </p>
    </div>
</div>
@endsection

<script type="text/javascript">
    function validarExt()
    {
        var  Fotografia = document.getElementById('Fotografia');
        var FotografiaRuta = Fotografia.value;
        var extPermitidas = /(.jpg|.png)$/i;

        if(!extPermitidas.exec(FotografiaRuta))
        {
            alert('Asegurese de haber seleccionado una Imagen');
            Fotografia.value='';
            return false;
        }
        else{
            if(Fotografia.files && Fotografia.files[0])
            {
                var visor= new  FileReader();
                visor.onload=function(e)
                {
                    document.getElementById('visorFotografia').innerHTML=
                    '<embed src="'+e.target.result+'"width ="100" height="100">';
                }
                visor.readAsDataURL(Fotografia.files[0]);
               }
        }
     }

</script>
