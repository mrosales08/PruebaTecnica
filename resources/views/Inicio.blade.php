@extends('plantilla')
@section('content')

<div class="row">
    <div class=" col-md-7">
        <div class=" col-md-5">
            <h3 class="text-center md-4"> Iniciar Sesion</h3>
                <form  method="POST" class="text-center">
                @csrf
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                </div> <br>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <div class="col text-center">
                    <button type="submit" class="center btn btn-success btn-block"> Iniciar Sesion</button>
    			</div>
                <a class="navbar-brand" href={{route('RegistroUsuario')}}>Registrarse</a>
                </form>
        </div>
    </div>
</div>

@endsection