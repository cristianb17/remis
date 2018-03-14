@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Reservas</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('ingresarReserva') }}" class="btn btn-primary">Ingresar una nueva Reserva</a>
  	</p>
	
     <table class="table table-striped">
        <tr>
			<th>Dia y Hora del viaje</th>
			<th>Aviso Depachador</th>
			<th>Desde</th>
			<th>Hasta</th>
			<th>Numero</th>
			<th>Ver</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
        @foreach ($reservas as $reserva)
        <tr>
			<td>{{ $reserva->diaHoraViaje }}</td>
			<td>{{ $reserva->avisoDespachador }}</td>
			<td>{{ $reserva->desde }}</td>
			<td>{{ $reserva->hasta }}</td>
			<td>{{ $reserva->numero }}</td>
			<td><a href="{{route('ver', ['id' => $reserva->id])}}" class="btn btn-primary">Ver</a></td>
			<td><a href="{{ route('editar', ['id' => $reserva->id]) }}" class="btn btn-primary">Editar</a></td>
			<td><a href="{{ route('eliminar', ['id' => $reserva->id]) }}" class="btn btn-primary">Eliminar</a></td>
		</tr>
		
        @endforeach
      </table>
  

</div>


<script>
window.onload = function() {
   document.getElementById("nombre").focus();
}
</script>
@endsection
