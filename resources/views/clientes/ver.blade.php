@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>DATOS DEL CLIENTE</h1>
	</div>
       <form method="get" action="{{ route('listarClientes') }}">
                        @csrf

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Nombre</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="nombre" disabled value="{{$cliente->nombre}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Apellido</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" disabled name="apellido" value="{{$cliente->apellido}}">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Documento</strong></label>
			<div class="col-7">
				<input class="form-control" type="number" disabled name="documento" value="{{$cliente->documento}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Domicilio</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="domicilio" disabled value="{{$cliente->domicilio}}">
			</div>
		</div>
	</div>
		<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Piso</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  name="piso" disabled value="{{$cliente->piso}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Depto</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="depto" disabled value="{{$cliente->depto}}">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Localidad</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="localidad" disabled value="{{$cliente->localidad}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>cp</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="cp" disabled value="{{$cliente->cp}}">
			</div>
		</div>
	</div>
	
		<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Destino</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="destino" disabled value="{{$cliente->destino}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Viajes</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="viajes" disabled value="{{$cliente->viajes}}">
			</div>
		</div>
	</div>
	
		<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Importe</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="importe" disabled value="{{$cliente->importe}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Precio</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="precio" disabled value="{{$cliente->precio}}">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-password-input" class="col-5 col-form-label"><strong>Descuento</strong></label>
			<div class="col-7" >
				<input class="form-control" type="text" name="descuento" disabled value="{{$cliente->descuento}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Telefono 1</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="tel1" disabled value="{{$cliente->tel1}}">
			</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Telefono 2</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="tel2" disabled value="{{$cliente->tel2}}">
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Telefono 3</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="tel3" disabled value="{{$cliente->tel3}}">
			</div>
		</div>
		
	</div>

	<div class="form-group row">
	
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Telefono 4</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="tel4" disabled value="{{$cliente->tel4}}">
			</div>
		</div>
		
		
				<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Telefono 5</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="tel5" disabled value="{{$cliente->tel5}}">
			</div>
		</div>
	
	</div>
	
		<div class="form-group row">
	
		<div class="col-md-6">
			<label class="col-4 col-form-label"><strong>Tipo Cliente</strong></label>
			<div class="col-7">				
				<select name="tipoCliente" class="form-control">
                  <option {{ $cliente->tipo_id == 1 ? 'selected="selected"' : '' }}>Cliente Normal</option>
                  <option {{ $cliente->tipo_id == 2 ? 'selected="selected"' : '' }}>Pool</option>
                   <option {{ $cliente->tipo_id == 3 ? 'selected="selected"' : '' }}>Empresa</option>
                </select>
             </div>
		</div>
	
	
	</div>

	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-4">
			<button type="submit" class="btn btn-primary btn-lg">Volver</button>
		</div>
	</div>
</form>
</div>


<script>
window.onload = function() {
   document.getElementById("nombre").focus();
}
</script>
@endsection
