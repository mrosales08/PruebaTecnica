@extends('plantilla')
@section('content')

 
<main class="container p-4">
    <div class="row">
        <!-- MESSAGES -->
        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php session_unset(); } ?>
  
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id Usuario</th>
              <th>Tipo de pago</th>
              <th>Fecha De Pago</th>
              <th>Descripcion</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                @foreach ($pagos as $pago)
                <td>{{$pago->idUsuario}}</td>
                <td>{{$pago->tipoDePago}}</td>
                <td>{{$pago->fechaDePago}}</td>
                <td>{{$pago->Descripcion}}</td>
                <td>Accion</td>
                @endforeach

              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
              

@endsection