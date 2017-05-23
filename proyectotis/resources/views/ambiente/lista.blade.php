@extends('template')
@section('contenido')

<div class="panel panel-primary">
  <div class="panel-heading">
		<h3>Lista de Ambientes </h3>
    <a href="/ambiente/crear" class="btn btn-md btn-success" title="Editar">
      <b class="glyphicon glyphicon-home"> Crear nuevo ambiente</b>
    </a>
	</div>
  <div class="panel-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Ambiente</th>
          <th>Descripcion</th>
          <th>Capacidad</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse($ambientes as $amb)
        <tr>
        <td>{{ $amb->nombre_ambiente}}</td>
        <td>{{ $amb->descripcion_ambiente }}</td>
        <td>{{ $amb->capacidad}} Personas</td>
        <td>
          <a href="/ambiente/eliminar/{{$amb->id_ambiente}}" class="btn btn-xs btn-danger eliminar" title="Eliminar">
            <b class="glyphicon glyphicon-trash"></b>
          </a>
          <a href="/ambiente/editarForm/{{$amb->id_ambiente}}" class="btn btn-xs btn-success" title="Editar">
            <b class="glyphicon glyphicon-edit"></b>
          </a>
        </td>
        </tr>
        @empty
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
