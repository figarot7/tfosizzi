@extends('template')
@section('contenido')
<div class="col-lg-8 col-lg-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Lista de libros</h4>
		</div>
		<div class="panel-body">
			@if(session('errormsg'))
		<div class="alert alert-info">
			{{ session('errormsg') }}
		</div>
		@endif		
			<div class="barra-lista">
			@if(!$suscritos)
			<form class="navbar navbar-form navbar-right" action="/suscripcion/listaNS">
			@else
			<form class="navbar navbar-form navbar-right" action="/suscripcion/listaS">
			@endif
				<div class="input-group">
					<input type="text" name="autorTitulo" class="form-control" placeholder="Autor o Titulo" />
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
						@if(!$suscritos)
						<th>Precio</th>
						@endif
						<th>Opciones</th>
					</tr>
				</thead>				
				<tbody>
				@foreach($libros as $libro)
				<tr>
					<td>{{ $libro->titulo }}</td>
					<td>{{ $libro->autor }}</td>
					@if(!$suscritos)
					<td>{{ $libro->precio }}</td>
					@endif
					<td>						
						@if(!$suscritos)
						<a href="/suscripcion/suscribir/{{$libro->id_libro}}" class="btn btn-xs btn-primary" title="Suscribirse">
							<b class="glyphicon glyphicon-registration-mark"></b>
						</a>
						@else
						<a href="/libro/ver/{{$libro->id_libro}}" class="btn btn-xs btn-info" title="Ver">
							<b class="glyphicon glyphicon-eye-open"></b>
						</a>
						@endif
					</td>
				</tr>
				@endforeach		
				</tbody>
			</table>			
			{!! $libros->appends(['autorTitulo' => Request::input('autorTitulo')])->render() !!}
		</div>
	</div>
</div>
@endsection