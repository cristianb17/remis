@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>
			Gestion de Coches
		</h1>
	</div>

	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-3 col-form-label"><strong>Coche</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Marca</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Modelo</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Año</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Color</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Patente</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
	</div>

	<div class="form-group row">

		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Chofer</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Propietario</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Domicilio</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label"><strong>Localidad</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label"><strong>Telefono 1</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label"><strong>Telefono 2</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
	</div>
	
	
	
	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label"><strong>Alta agencia</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label"><strong>Venc. Poliza</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		
	<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label"><strong>Venc. GNC</strong></label>
			<div class="col-8">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>
		
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Venc. Pago Seguro (0-28)</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label"><strong>Venc. Hab. Auto</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" id="Apellido">
			</div>
		</div>

	</div>




	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-3">
			<button type="submit" class="btn btn-primary">Ingresar Coche</button>
		</div>
	</div>

</div>
@endsection
