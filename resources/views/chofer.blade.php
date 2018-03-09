@extends('layouts.app')

@section('content')
<div class="container">


	<div class="form-group row">
		<h1><u>DATOS DEL CHOFER</u></h1>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-2 col-form-label"><strong>Nombre</strong></label>
		<div class="col-5">
			<input class="form-control" type="text" id="nombre">
		</div>
	</div>
	
<div class="form-group row">
		<label for="example-text-input" class="col-2 col-form-label"><strong>Apellido</strong></label>
		<div class="col-5">
			<input class="form-control" type="text"  id="Apellido">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-search-input" class="col-2 col-form-label"><strong>Documento</strong></label>
		<div class="col-5">
				<input class="form-control" type="number" id="previsionMultas">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-email-input" class="col-2 col-form-label"><strong>Domicilio</strong></label>
		<div class="col-5">
			<input class="form-control" type="text" id="domicilio">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-url-input" class="col-2 col-form-label"><strong>Localidad</strong></label>
		<div class="col-5">
			<input class="form-control" type="text" id="localidad">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-tel-input" class="col-2 col-form-label"><strong>Telefono</strong></label>
		<div class="col-5">
			<input class="form-control" type="tel"  id="telefono">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-password-input" class="col-2 col-form-label"><strong>Fecha Nacimiento</strong></label>
		<div class="col-5">
			<input class="form-control" type="date" id="fechaNacimiento">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-number-input" class="col-2 col-form-label"><strong>Celular</strong></label>
		<div class="col-5">
			<input class="form-control" type="tel" id="celular">
		</div>
	</div>

	<div class="form-group row">
		<label for="example-date-input" class="col-2 col-form-label"><strong>Vencimiento Registro</strong></label>
		<div class="col-5">
			<input class="form-control" type="date" id="vencimientoRegistro">
		</div>
	</div>


	<div class="form-group row">
		<label for="example-date-input" class="col-2 col-form-label"><strong>Ingreso Agencia</strong></label>
		<div class="col-5">
			<input class="form-control" type="date" id="ingresoAgencia">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-date-input" class="col-2 col-form-label"><strong>Prevision Multas</strong></label>
		<div class="col-5">
			<input class="form-control" type="number" id="previsionMultas">
		</div>
	</div>
	
		<div class="form-group row">
		<label for="example-date-input" class="col-2 col-form-label"><strong>Saldo Cuenta Corriente</strong></label>
		<div class="col-5">
			<input class="form-control" type="number" id="saldoCuentaCorriente">
		</div>
	</div>
	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-3">
			<button type="submit" class="btn btn-primary">Ingresar Chofer</button>
		</div>
	</div>

</div>
@endsection
