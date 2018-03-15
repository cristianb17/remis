@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Choferes</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('crearChofer') }}" class="btn btn-primary">Ingresar un nuevo Chofer</a>
  	</p>
	
     <table class="table table-striped">
        <tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Documento</th>
			<th>Domicilio</th>
			<th>Celular</th>
			<th>Ver</th>
			<th>Editar</th>
			<th>Eliminar</th>
			<th>Estado</th>
			<th>Activar/Desactivar</th>
			<th>Liquidacion</th>	
		</tr>
        @foreach ($choferes as $chofer)
        <tr>
			<td>{{ $chofer->nombre }}</td>
			<td>{{ $chofer->apellido }}</td>
			<td>{{ $chofer->documento }}</td>
			<td>{{ $chofer->domicilio }}</td>
			<td>{{ $chofer->celular }}</td>
			<td><a href="{{route('verChofer', ['id' => $chofer->id])}}" class="btn btn-primary">Ver</a></td>
			<td><a href="{{ route('editarChofer', ['id' => $chofer->id]) }}" class="btn btn-primary">Editar</a></td>
			<td><a href="{{ route('eliminarChofer', ['id' => $chofer->id]) }}" class="btn btn-primary">Eliminar</a></td>
				@if($chofer->estado == 0)
					<td>Inactivo</td>
					<td><a href="{{ route('activarChofer', ['id' => $chofer->id]) }}" class="btn btn-primary">Activar</a></td>	
    			@endif
    				@if($chofer->estado == 1)
    				<td>Trabajando</td>
					<td><a href="{{ route('activarChofer', ['id' => $chofer->id]) }}" class="btn btn-primary">Desactivar</a></td>	
    				<td><a href="{{ route('eliminarChofer', ['id' => $chofer->id]) }}" class="btn btn-danger">Liquidar</a></td>
    			@endif
    			@if($chofer->estado == 1)
    			@endif
			
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
