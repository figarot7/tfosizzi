@extends('template')

@section('contenido')
<div class="col-lg-6 col-lg-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Crear Usuario</h4>
		</div>
		{!! Form::open(['url' => '/usuario/almacenar']) !!}		
		@include('usuario.formularioBase')
		{!! Form::close() !!}
	</div>
</div>
@endsection