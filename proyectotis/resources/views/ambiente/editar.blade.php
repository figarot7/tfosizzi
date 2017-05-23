@extends('template')
@section('contenido')
<div class="col-lg-6 col-lg-offset-3">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4>Editar Ambiente</h4>
    </div>
<div class="panel-body">
    <form role="form" action="/ambiente/editar" method="post">
          <br>
          <div class="form-group">
              <label for="nombre">ingrese nombre:</label>
              <input class = "form-control" type="text" id="nombre" name="nombre" Size="50" value="{{ $ambiente->nombre_ambiente }}">
          </div>
          <div class="form-group">
              <label for="descripcion">Ingrese Descripciòn:</label>
              <input class="form-control" type="text" name= "descripcion" value="{{ $ambiente->descripcion_ambiente }}">
          </div>
         <div class="form-group">
              <label for="capacidad">Ingrese capacidad:</label>
              <input class ="form-control" type="number" name="capacidad" size="50" value="{{ $ambiente->capacidad }}">
         </div>
           <input type="hidden" name="id" value="{{ $ambiente->id_ambiente }}">
        <div class="container">
              <input type="submit" class="btn btn-primary" value="Guardar">
        </div>

        {{  csrf_field() }}
    </form>
</div>
  </div>
</div>


@endsection
