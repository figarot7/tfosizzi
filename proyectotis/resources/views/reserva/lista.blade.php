@extends('template')
@section('contenido')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3>Calendario de reservas</h3> 
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Ambiente</th>                    
                    <th>Hora inicio</th>
                    <th>Hora fin</th>
                    <th>Descripcion</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
               @forelse($reservas as $reserva)
                <tr>
                    <td>{{ $reserva["fecha_reserva"] }}</td>
                    <td>{{ $reserva["nombre_ambiente"] }}</td>                    
                    <td>{{ $reserva["hora_inicio"] }}</td>
                    <td>{{ $reserva["hora_fin"] }}</td>
                    <td>{{ $reserva["descripcion_reserva"] }}</td>
                    <td>{{ $reserva["ape_pat"].' '.$reserva["nombre"] }}</td>                    
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
