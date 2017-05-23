@extends('template')
@section('contenido')
<div class="col-lg-6 col-md-8 col-sm-10 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Iniciar sesión</h4>
		</div>
		<form role="form" action="/usuario/autenticar" method="post">
			<div class="panel-body">
				@if($errors->has('error'))
				<div class="alert alert-danger">
					{{ $errors->first('error') }}
				</div>
				@endif
				<div class="form-group">
					<label for="usuario">Nombre de usuario</label>
					<!--<input type="text" class="form-control" name="usuario" value="{{Request::old('usuario')}}" />-->
					<input type="text" class="form-control" name="username" value="{{Request::old('username')}}"/>
				</div>
				<div class="form-group">
					<label for="contrasenia">Contraseña</label>
					<input type="password" class="form-control" name="password" />
				</div>
			</div>
			{!! csrf_field() !!}
			<div class="text-right panel-footer">
				<button type="submit" class="btn btn-default">Ingresar</button>
			</div>
		</form>
	</div>
</div>
@endsection