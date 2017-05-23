@extends('template')

@section('contenido')
<div class="col-lg-6 col-lg-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Crear un nuevo libro</h4>
		</div>
		{!! Form::open(['url' => '/libro/almacenar', 'files' => true]) !!}		
		@include('libro.formularioBase')
		{!! Form::close() !!}
	</div>
</div>
@endsection