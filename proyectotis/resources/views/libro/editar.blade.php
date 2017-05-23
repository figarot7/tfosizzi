@extends('template')

@section('contenido')
<div class="col-lg-6 col-lg-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Editar libro</h4>
		</div>
		{!! Form::model($libro, ['url' => '/libro/actualizar/' . $libro->id_libro, 'files' => true]) !!}
		@include('libro.formularioBase')
		{!! Form::close() !!}
	</div>
</div>
@endsection