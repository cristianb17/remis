@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Clientes</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('crearCliente') }}" class="btn btn-primary">Ingresar un nuevo Cliente</a>
  	</p>
		<p></p>
	<form method="get" action="{{ route('buscarCliente') }}">
        <div class="input-group">
          <input type="text" class="form-control col-2" name="dato">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Buscar</button>
          </span>
        </div>
    </form>
     <table class="table table-striped table-sm ">
        <tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Documento</th>
			<th>Domicilio</th>
			<th>Telefono 1</th>
			<th>Tipo de Cliente</th>
			<th>Ver</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
        @foreach ($clientes as $cliente)
        <tr>
			<td>{{ $cliente->nombre }}</td>
			<td>{{ $cliente->apellido }}</td>
			<td>{{ $cliente->documento }}</td>
			<td>{{ $cliente->domicilio }}</td>
			<td>{{ $cliente->telefono1 }}</td>
			@if($cliente->tipo_id == 1)
				<td>Cliente Normal</td>
			@endif
				@if($cliente->tipo_id == 2)
				<td>Pool</td>
			@endif
				@if($cliente->tipo_id == 3)
				<td>Empresa</td>
			@endif
			<td><a href="{{route('verCliente', ['id' => $cliente->id])}}" class="btn btn-primary">Ver</a></td>
			<td><a href="{{ route('editarCliente', ['id' => $cliente->id]) }}" class="btn btn-primary">Editar</a></td>
			<td><a href="{{ route('eliminarCliente', ['id' => $cliente->id]) }}" class="btn btn-primary">Eliminar</a></td>
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