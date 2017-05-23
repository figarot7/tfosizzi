@extends('template')
@section('contenido')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h4>Lista de Libros</h4>
	</div>
	<div class="panel-body">
		@if(session('book_created'))
		<div class="alert alert-success">
			{{ session('book_created') }}
		</div>
		@endif
		@if(session('book_updated'))
		<div class="alert alert-info">
			{{ session('book_updated') }}
		</div>
		@endif
		@if(session('book_deleted'))
		<div class="alert alert-warning">
			{{ session('book_deleted') }}
		</div>
		@endif
		
		<div class="barra-lista">
		@if(Auth::user()->tipo === 'adm')
			<a href="/libro/crear" class="btn btn-default">Crear Libro</a>
		@endif
			<form class="navbar navbar-form navbar-right" action="/libro/lista">
				<div class="input-group">
					<input type="text" name="nombreTitulo" class="form-control" placeholder="Nombre o Titulo" />
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default">Buscar</button>
					</span>
				</div>
			</form>
		</div>		
		<table class="table">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Autor</th>
					<th>Opciones</th>
				</tr>
			</thead>		
			<tbody>
				@forelse($libros as $libro)
				<tr>
					<td>{{$libro->titulo}}</td>
					<td>{{$libro->autor}}</td>					
					<td>
						<a href="/libro/ver/{{$libro->id_libro}}" class="btn btn-xs btn-info" title="Ver">
							<b class="glyphicon glyphicon-eye-open"></b>
						</a>						
						<a href="/libro/editar/{{$libro->id_libro}}" class="btn btn-xs btn-success" title="Editar">
							<b class="glyphicon glyphicon-edit"></b>
						</a>
						<a href="/libro/eliminar/{{$libro->id_libro}}" class="btn btn-xs btn-danger eliminar" title="Eliminar">
							<b class="glyphicon glyphicon-trash"></b>
						</a>						
					</td>
				</tr>
				@empty
				<tr class="text-center">
					<td colspan="4">No exiten libros</td>
				</tr>
				@endforelse
			</tbody>	
		</table>
		{!! $libros->appends(['nombreTitulo' => Request::input('nombreTitulo')])->render() !!}
	</div>
</div>
@endsection