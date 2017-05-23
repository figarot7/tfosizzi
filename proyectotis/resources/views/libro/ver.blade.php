@extends('template')

@section('contenido')

<div class="col-lg-12">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Ver Libro</h4>
		</div>
		<div class="panel-body text-center">
			<div>
				<embed src="/libro/archivoPdf/{{$libro->id_libro}}#toolbar=0" width="1000" height="500">
			</div>			
		</div>
	</div>
</div>
@endsection