@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Autos</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('crearAuto') }}" class="btn btn-primary">Ingresar un nuevo Auto</a>
  	</p>
	
     <table class="table table-striped">
        <tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Patente</th>
			<th>Chofer</th>
			<th>Propietario</th>
			<th>Ver</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
        @foreach ($autos as $auto)
        <tr>
			<td>{{ $auto->marca }}</td>
			<td>{{ $auto->modelo }}</td>
			<td>{{ $auto->patente }}</td>
			<td>{{ $auto->chofer }}</td>
			<td>{{ $auto->propietario }}</td>
			<td><a href="{{route('verAuto', ['id' => $auto->id])}}" class="btn btn-primary">Ver</a></td>
			<td><a href="{{ route('editarAuto', ['id' => $auto->id]) }}" class="btn btn-primary">Editar</a></td>
			<td><a href="{{ route('eliminarAuto', ['id' => $auto->id]) }}" class="btn btn-primary">Eliminar</a></td>
		</tr>
		
        @endforeach
      </table>
  

</div>
@endsection
