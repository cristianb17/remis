@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>LIQUIDACION</h1>
	</div>
       <form method="get" action="{{ route('listarChoferes') }}">
                        @csrf

	<div class="form-group row">
				<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Coche</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>VW</strong></label>
			</div>
		</div>
				<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Chofer</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Cristian</strong></label>
			</div>
		</div>
	</div>


	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Abierta</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>12/12/2012 12:12</strong></label>
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Cantidad De Viajes</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Recaudacion</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Comision</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-password-input" class="col-5 col-form-label"><strong>Odometro</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Radio</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Celular</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Pool</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
		
	</div>

	<div class="form-group row">
	
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Subtotal</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Combustible</strong></label>
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Lavadero</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Alquiler</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
	</div>
		<div class="form-group row">
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Prevision Multa</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>Dato Liquidacion</strong></label>
			</div>
		</div>
	</div>
	
			<div class="form-group row">
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Total</strong></label>
			<div class="col-7">
				<label for="example-text-input" class="col-7 col-form-label"><strong>12121212$</strong></label>
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
@endsection
