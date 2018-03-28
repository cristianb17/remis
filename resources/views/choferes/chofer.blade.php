@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>DATOS DEL CHOFER</h1>
	</div>
	@if($errors->any())
       <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
               <li >{{ $error }}</li>
           @endforeach
        </ul>
	@endif 
       <form method="POST" action="{{ route('guardarChofer') }}">
                        @csrf

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Nombre</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="nombre">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Apellido</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="apellido">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Documento</strong></label>
			<div class="col-7">
				<input class="form-control" type="number" required name="documento">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Domicilio</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="domicilio">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Localidad</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="localidad">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>cp</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="cp">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-password-input" class="col-5 col-form-label"><strong>Fecha
					Nacimiento</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="fechaNacimiento">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Celular</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="celular">
			</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Telefono</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel" name="telefono">
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Vencimiento
					Registro</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="vencimientoRegistro">
			</div>
		</div>
		
	</div>

	<div class="form-group row">
	
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Ingreso
					Agencia</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="ingresoAgencia">
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Prevision
					Multas</strong></label>
			<div class="col-7">
				<input class="form-control" type="number" name="previsionMulta">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Saldo
					cuenta corriente</strong></label>
			<div class="col-7">
				<input class="form-control" type="number" name="saldoCuentaCorriente">
			</div>
		</div>
		
			<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Saldo
					cuenta corriente</strong></label>
			<div class="col-7">
				<input class="form-control" type="number" name="saldoCuentaCorriente">
			</div>
		</div>
	</div>
	
	   <div class="form-group row">
    
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Autos</label> 
    				<div class="col-8">
        				<select class="form-control" name="auto">
    						@foreach($autos as $auto)
    						<option value="{{ $auto->id }}"> {{ $auto->id }}</option> 
    						@endforeach
    
    					</select>
					</div>
				</div>
    	</div>
	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-4">
			<button type="submit" class="btn btn-primary btn-lg">Ingresar Chofer</button>
		</div>
	</div>
</form>
</div>

@endsection
