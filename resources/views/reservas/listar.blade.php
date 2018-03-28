@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Reservas</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('ingresarReserva') }}" class="btn btn-primary">Ingresar una nueva Reserva</a>
  	</p>
  	
  		<p></p>
	<form method="get" action="{{ route('buscarReserva') }}">
        <div class="input-group">
          <input type="text" class="form-control col-2" name="dato">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Buscar</button>
          </span>
        </div>
    </form>
	
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
			<td><input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s', strtotime($reserva->diaHoraViaje))}}" disabled></td>
			<td><input  class="form-control" type="datetime-local" value="{{ $reserva->avisoDespachador }}" disabled></td>
			<td>{{ $reserva->desde }}</td>
			<td>{{ $reserva->hasta }}</td>
			<td>{{ $reserva->numero }}</td>
			<td><a href="{{route('verReserva', ['id' => $reserva->id])}}" class="btn btn-primary">Ver</a></td>
			<td><a href="{{ route('editarReserva', ['id' => $reserva->id]) }}" class="btn btn-primary">Editar</a></td>
			<td><a href="{{ route('eliminarReserva', ['id' => $reserva->id]) }}" class="btn btn-primary">Eliminar</a></td>
		</tr>
		
        @endforeach
      </table>
  

</div>
@endsection
