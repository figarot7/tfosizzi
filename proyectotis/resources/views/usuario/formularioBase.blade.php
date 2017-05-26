<div class="panel-body">
    @if($errors->has('nombre'))
    <div class="alert alert-danger">
        {{ $errors->first('nombre') }}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('nombre', 'Nombres', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
    @if($errors->has('ape_pat'))
    <div class="alert alert-danger">
        {{ $errors->first('ape_pat') }}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('ape_pat', 'Apellido paterno', ['class' => 'control-label']) !!}
        {!! Form::text('ape_pat', null, ['class' => 'form-control']) !!}
    </div>
    @if($errors->has('ape_mat'))
    <div class="alert alert-danger">
        {{ $errors->first('ape_mat') }}
    </div>
    @endif
    <div class="form-group">            
        {!! Form::label('ape_mat', 'Apellido materno', ['class' => 'control-label']) !!}
        {!! Form::text('ape_mat', null, ['class' => 'form-control']) !!}
    </div>	
    @if($errors->has('username'))
    <div class="alert alert-danger">
        {{ $errors->first('username') }}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('username', 'Nombre de usuario', ['class' => 'control-label']) !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>
    @if($errors->has('tipo'))
    <div class="alert alert-danger">
        {{ $errors->first('tipo') }}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('tipo', 'Tipo de usuario') !!}
        {!! Form::select('tipo', ['adm' => 'Administrador', 'lec' => 'Lector'], null, ['placeholder' => 'Seleccione un tipo de usuario', 'class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_rol', 'Rol de usuario') !!}
        {!! Form::select('id_rol', $tipos, null, ['placeholder' => 'Seleccione un tipo de usuario', 'class' => 'form-control']) !!}
    </div>
    @if($errors->has('repetir'))
    <div class="alert alert-danger">
        {{ $errors->first('repetir') }}
    </div>
    @endif
    @if($errors->has('password'))
    <div class="alert alert-danger">
        {{ $errors->first('password') }}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    @if($errors->has('rpassword'))
    <div class="alert alert-danger">
        {{ $errors->first('rpassword') }}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('rpasswrod', 'Repita su contraseña', ['class' => 'control-label']) !!}
        {!! Form::password('rpassword', ['class' => 'form-control']) !!}
    </div>	
</div>
<div class="panel-footer text-center">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>