@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Administracion de Reservas</h1>
	</div>
	
	 <div class="form-group row">
		<div class="col-md-6">
			<div class="col-8">
				     <table class="table table-striped">
        <tr>
			<th>Coche</th>
			<th>Ult. Destino</th>
			<th>Hora</th>
			<th>Ida</th>
		</tr>
        @foreach ($autos as $auto)
        <tr>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->id }}</td>
		</tr>
		
        @endforeach
      </table>
			</div>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Aviso al Despachador</strong></label>
			<div class="col-6">
			</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-12">
			<div class="col-12">
				     <table class="table table-striped">
        <tr>
        	<th>Num</th>
			<th>Dia y Hora del viaje</th>
			<th>Desde</th>
			<th>Hasta</th>
			<th>Numero</th>
		</tr>

        @foreach ($reservas as $reserva)
        <tr>
    	    <td>{{$loop->iteration}}</td>
			<td><input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s', strtotime($reserva->diaHoraViaje))}}" disabled></td>
			<td>{{ $reserva->desde }}</td>
			<td>{{ $reserva->hasta }}</td>
			<td>{{ $reserva->numero }}</td>
		</tr>
		
        @endforeach
      </table>
			</div>
		</div>
	</div>
	
	

</div>
@endsection
