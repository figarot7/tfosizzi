@extends('template')
@section('contenido')
<div class="col-lg-6 col-lg-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4>Mi informacion personal</h4>
        </div>
        <div class="panel-body">
            <form role="form">
                <!--FECHA RESERVA-->
                <div class="form-group">
                    <label for="fecha">Nombre Completo</label>
                    <input class = "form-control"type="text" name="fecha" value="{{ $usuario->getNombreCompleto() }}" disabled="true">
                </div>
                <div class="form-group">
                    <label for="fecha">Rol</label>
                    <input class = "form-control"type="text" name="fecha" value="{{ $rolname }}" disabled="true">
                </div>
                @if($rolnivel == 1)
                 <div class="form-group">
                    <label for="fecha">Nivel de permiso</label>
                    <div class="alert alert-success">
                    <p><B>Nivel 1:</B> Este usuario puede crear otros usuarios, ambientes y reservas</p>
                </div>
                </div>
                @elseif($rolnivel == 2)
                 <div class="form-group">
                    <label for="fecha">Nivel de permiso</label>
                    <div class="alert alert-info">
                    <p><B>Nivel 2:</B> Este usuario puede crear ambientes y reservas</p>
                </div>
                </div>
                @elseif($rolnivel == 3)
                 <div class="form-group">
                    <label for="fecha">Nivel de permiso</label>
                    <div class="alert alert-warning">
                    <p><B>Nivel 3:</B> Este usuario se limita solo a hacer reservas</p>
                </div>
                </div>
                @endif
               
            </form>

        </div>
    </div>
</div>


@endsection
