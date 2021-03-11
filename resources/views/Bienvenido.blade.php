@extends('plantilla')
@section('content')

<div class="row">
    <div class=" col-md-7">
        <div class=" col-md-5">
            <h3 class="text-center md-4">Bienvenido a MTB Pelicano</h3>
                @csrf
                <br>
                <a class="navbar-brand" href={{route('RegistroPagos')}}>Registrar pagos</a>
                <a class="navbar-brand" href={{route('RegistroUsuario')}}>Lista de pagos</a>
        </div>
    </div>
</div>

@endsection