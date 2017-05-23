@extends('template')
@section('contenido')
<div class="col-lg-6 col-lg-offset-3">

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4>Crear Reserva</h4>
    </div>
<div class="panel-body">
    <form role="form" action="/reserva/guardar" method="post">
      <!--FECHA RESERVA-->
      <div class="form-group">
        <label for="fecha">Fecha de reserva</label>
        <input class = "form-control"type="date" name="fecha">
      </div>
      <!--AMBIENTE-->
      <div class="form-group">
        <label for="ambiente">AMBIENTE</label>
        <select class="form-control selectpicker" name="ambiente"  data-style="btn-info">
          @forelse($ambientes as $ambiente)
          <option value="{{ $ambiente->id_ambiente }}">{{ $ambiente->nombre_ambiente }}</option>
          @empty

          @endforelse
        </select>
      </div>
      <!--HORA FIN-->
      <div class="form-group">
        <label for="hinicio">Hora Inicio</label>
        <select class="form-control selectpicker" name="hinicio">
          <option value="6:45:00">6:45</option>
          <option value="8:15:00">8:15</option>
          <option value="9:45:00">9:45</option>
          <option value="11:15:00">11:15</option>
          <option value="12:45:00">12:45</option>
          <option value="14:15:00">14:15</option>
          <option value="15:45:00">15:45</option>
          <option value="17:15:00">17:15</option>
          <option value="18:45:00">18:45</option>
          <option value="20:15:00">20:15</option>
        </select>
      </div>
      <!--HORA FIN-->
      <div class="form-group">
        <label for="hfin">Hora Fin</label>
        <select class="form-control selectpicker" name="hfin">
          <option value="8:15:00">8:15</option>
          <option value="9:45:00">9:45</option>
          <option value="11:15:00">11:15</option>
          <option value="12:45:00">12:45</option>
          <option value="14:15:00">14:15</option>
          <option value="15:45:00">15:45</option>
          <option value="17:15:00">17:15</option>
          <option value="18:45:00">18:45</option>
          <option value="20:15:00">20:15</option>
          <option value="21:45:00">21:45</option>
        </select>
      </div>
      <!--DESCRIPCION-->
      <div class="form-group">
        <label for="descripcion">Ingrese Descripciòn:</label>
        <!--<input class="form-control" type="text" name= "descripcion"  placeholder="Descripciòn">-->
        <textarea class = "form-control" name="descripcion" rows="4"></textarea>
      </div>
      <div class="container">
          <input type="submit" class="btn btn-primary" value="Realizar Reserva">
      </div>
      {{  csrf_field() }}


    </form>

</div>
  </div>
</div>


@endsection
