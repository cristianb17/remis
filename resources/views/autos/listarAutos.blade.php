@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Autos</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('crearAuto') }}" class="btn btn-primary">Ingresar un nuevo Auto</a>
  	</p>
  	
  			<p></p>
	<form method="get" action="{{ route('buscarAuto') }}">
        <div class="input-group">
          <input type="text" class="form-control col-2" name="dato">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Buscar</button>
          </span>
        </div>
    </form>
	
     <table class="table table-striped">
        <tr>
        	<th>Numero</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Patente</th>
			<th>Propietario</th>
			<th>Ver</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
        @foreach ($autos as $auto)
        <tr>
        	<td>{{ $auto->id }}</td>
			<td>{{ $auto->marca }}</td>
			<td>{{ $auto->modelo }}</td>
			<td>{{ $auto->patente }}</td>
			<td>{{ $auto->propietario }}</td>
			<td><a href="{{route('verAuto', ['id' => $auto->id])}}" class="btn btn-primary">Ver</a></td>
			<td><a href="{{ route('editarAuto', ['id' => $auto->id]) }}" class="btn btn-primary">Editar</a></td>
			<td><a href="{{ route('eliminarAuto', ['id' => $auto->id]) }}" class="btn btn-primary">Eliminar</a></td>
		</tr>
		
        @endforeach
      </table>
  

</div>
@endsection
