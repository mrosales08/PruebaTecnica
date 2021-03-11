@extends('plantilla')
@section('content')
<div class="row">
    <div class=" col-md-7">
        <div class=" col-md-5">
            <h3 class="text-center md-4"> Registrarse </h3>
                <form action="{{route('store')}}" class="text-center" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                </div> <br>
                <div class="form-group">
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
                </div><br>
                <div class="form-group">
                    <input type="number" name="telefono" id="Telefono" class="form-control" placeholder="Telefono" required>
                </div><br>
                <div class="form-group">
                    <input type="number" name="identificacion" id="identificacion" class="form-control" placeholder="Identificacion" required>
                </div><br>
                <div class="form-group">
                    <input type="text" name="tipoUsuario" id="tipoUsuario" class="form-control" placeholder="tipoUsuario" required>
                </div><br>
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                </div><br>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <div class="col text-center">
                    <button type="submit" class="center btn btn-success btn-block">Guardar</button>
    			</div>
                <a class="navbar-brand" href={{route('inicio')}}>Cancelar</a>
                </form>
                @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}
                </div>
                    
                @endif
        </div>
    </div>
</div>

@endsection