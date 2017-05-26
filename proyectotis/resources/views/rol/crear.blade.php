

@extends('template')
@section('contenido')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3>Roles</h3> 
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Roles de usuarios</th> 
                    <th>Descripcion</th> 
                </tr>               
            </thead>
            <tbody>
                @forelse($roles as $rol)
                <tr>
                    <td>{{ $rol["nombre_rol"] }}</td>
                    @if($rol["nivel_permiso"] == 1)
                    <td>Usuario con todos los permisos</td>
                    @elseif($rol["nivel_permiso"] == 2)
                    <td>Usuario con permisos de crear nuevos ambientes y hacer reservas</td>
                    @elseif($rol["nivel_permiso"] == 3)
                    <td>Usuario con permisos par hacer reservas</td>
                    @endif
                </tr>

                @empty
                @endforelse
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="/rol/guardar">
                    <fieldset>
                        <legend>Crear nuevo Rol</legend>
                        <div class="form-group">
                            <label for="nombrerol">Nuevo Rol</label>
                            <input type="text" class="form-control" id="nombrerol" name="nombrerol" placeholder="Nuevo Rol">
                        </div>
                        <div class="form-group">
                            <label for="nivelpermiso">Nivel permisivo</label>
                            <select class="form-control selectpicker" name="nivelpermiso" id="nivelpermiso">
                                <option value="1">Nivel 1</option>
                                <option value="2">Nivel 2</option>
                                <option value="3">Nivel 3</option>                                
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Crear nuevo Rol</button>
                        {{  csrf_field() }}
                    </fieldset>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Descripcion de los niveles de permisos</h4>
                <div class="alert alert-success">
                    <p><B>Nivel 1:</B> Este usuario puede crear otros usuarios, ambientes y reservas</p>
                </div>
                <div class="alert alert-info">
                    <p><B>Nivel 2:</B> Este usuario puede crear ambientes y reservas</p>
                </div>
                <div class="alert alert-warning">
                    <p><B>Nivel 3:</B> Este usuario se limita solo a hacer reservas</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection