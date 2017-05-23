

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
                    <td>Sin descripcion...........</td>
                </tr>
               
                @empty
                @endforelse
            </tbody>
        </table>
        <form method="post" action="/rol/guardar" class="form-inline">
            <legend>Agregar nuevo Rol</legend>
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="form-group">
                    <label class="sr-only" for="nombreRol">Nombre Rol</label>
                    <input type="txt" class="form-control" name="nombrerol" id="nombreRol" placeholder="Nuevo Rols">
                </div>
            </div>        
            <button type="submit" class="btn btn-primary">Crear nuevo Rol</button>
            {{  csrf_field() }}
        </form>
    </div>
</div>
@endsection