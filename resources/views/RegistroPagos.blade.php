@extends('plantilla')
@section('content')

<div class="row">
    <div class=" col-md-7">
        <div class=" col-md-5">
            <h3 class="text-center md-4"> Registrar pago </h3>
                <form action="{{route('storepago')}}" class="text-center" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Id del usuario" required>
                </div>
                {{-- <div class="form-group">
                    <select class="form-control">
                      @foreach($usuarios as $usuario)
                      <option>{{$usuario->nombre}}</option>
                      @endforeach
                    </select>
                  </div> --}}  <br>
                <div class="form-group">
                    <select class="form-control" name="tipoDePago" id="tipoDePago">
                      <option>Seleccione tipo de pago</option>
                      <option>Efectivo</option>
                      <option>Credito</option>
                      <option>Transferencia</option>
                    </select>
                  </div><br>
                <div class="form-group">
                    <input type="date" name="fechaPago" id="fechaPago" class="form-control" required>
                </div><br>
                <div class="form-group">
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion" required>
                </div><br>
                <div class="form-group">
                    <input type="text" name="img" id="img" class="form-control" placeholder="Imagen" required>
                </div><br>
                <div class="col text-center">
                    <button type="submit" class="center btn btn-success btn-block">Guardar</button>
    			</div>
                <a class="navbar-brand" href={{route('inicio')}}>Cancelar</a>
                </form>
                @if (session('insertar'))
                <div class="alert alert-success mt-3">
                    {{session('insertar')}}
                </div>
                @endif
        </div>
    </div>
</div>

@endsection