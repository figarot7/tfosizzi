@extends('template')

@section('contenido')
<div class="col-lg-8 col-lg-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Lista de usuarios</h4>
		</div>
		<div class="panel-body">
			@if(Session::has('user_created'))
			<div class="alert alert-success">
				{{ Session::get('user_created') }}
			</div>
			@endif
			@if(Session::has('user_updated'))
			<div class="alert alert-info">
				{{ Session::get('user_updated') }}
			</div>
			@endif
			@if(Session::has('user_deleted'))
			<div class="alert alert-warning">
				{{ Session::get('user_deleted') }}
			</div>
			@endif
			<div class="barra-lista">
				<a href="/usuario/crear" class="btn btn-default">Crear usuario</a>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Nombre completo</th>
						<th>Nombre de usuario</th>
						<th>Cargo</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->getNombreCompleto() }}</td>
						<td>{{ $usuario->username }}</td>
						@if($usuario->tipo === 'adm')
						<td>Administrador</td>						
						@elseif($usuario->tipo === 'lec')
						<td>Lector</td>
						@endif
						<td>
							<a href="/usuario/editar/{{$usuario->id_usuario}}" class="btn btn-xs btn-success" title="Editar">
								<b class="glyphicon glyphicon-edit"></b>
							</a>
							<a href="/usuario/eliminar/{{$usuario->id_usuario}}" class="btn btn-xs btn-danger eliminar" title="Eliminar">
								<b class="glyphicon glyphicon-trash"></b>
							</a>							
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $usuarios->render() !!}
		</div>
	</div>
</div>
@endsection