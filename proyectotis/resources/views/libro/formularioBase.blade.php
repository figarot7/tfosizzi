<div class="panel-body">
	@if($errors->has('titulo'))
	<div class="alert alert-danger">
		{{ $errors->first('titulo') }}
	</div>
	@endif
	<div class="form-group">
		{!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
		{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
	</div>
	@if($errors->has('autor'))
	<div class="alert alert-danger">
		{{ $errors->first('autor') }}
	</div>
	@endif
	<div class="form-group">
		{!! Form::label('autor', 'Autor', ['class' => 'control-label']) !!}
		{!! Form::text('autor', null, ['class' => 'form-control']) !!}
	</div>
	@if($errors->has('precio'))
	<div class="alert alert-danger">
		{{ $errors->first('precio') }}
	</div>
	@endif
	<div class="form-group">
		{!! Form::label('precio', 'Precio', ['class' => 'control-label']) !!}
		{!! Form::text('precio', null, ['class' => 'form-control']) !!}
	</div>
	@if($errors->has('archivo'))
	<div class="alert alert-danger">
		{{ $errors->first('archivo') }}
	</div>
	@endif
	<div class="form-group">
		{!! Form::label('archivo', 'Archivo', ['class' => 'control-label']) !!}
		{!! Form::file('archivo') !!}
	</div>
</div>
<div class="panel-footer text-center">
	{!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>