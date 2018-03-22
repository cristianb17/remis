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
       <form method="post" action="{{ route('actualizarChofer') }}">
                        @csrf
		<input class="form-control"  type="hidden" name="id" value="{{$chofer->id}}">

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Nombre</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  value="{{$chofer->nombre}}" name="nombre">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Apellido</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  value="{{$chofer->apellido}}" name="apellido">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Documento</strong></label>
			<div class="col-7">
				<input class="form-control" type="number"  value="{{$chofer->documento}}" required name="documento">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Domicilio</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  value="{{$chofer->domicilio}}" name="domicilio">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Localidad</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  value="{{$chofer->localidad}}" name="localidad">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>cp</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  value="{{$chofer->cp}}" name="cp">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-password-input" class="col-5 col-form-label"><strong>Fecha
					Nacimiento</strong></label>
			<div class="col-7">
				<input class="form-control" type="date"  value="{{$chofer->fechaNacimiento}}" name="fechaNacimiento">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Celular</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel"  value="{{$chofer->celular}}" name="celular">
			</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-number-input" class="col-5 col-form-label"><strong>Telefono</strong></label>
			<div class="col-7">
				<input class="form-control" type="tel"  value="{{$chofer->telefono}}" name="telefono">
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Vencimiento
					Registro</strong></label>
			<div class="col-7">
				<input class="form-control" type="date"   value="{{$chofer->vencimientoRegistro}}" name="vencimientoRegistro">
			</div>
		</div>
		
	</div>

	<div class="form-group row">
	
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Ingreso
					Agencia</strong></label>
			<div class="col-7">
				<input class="form-control" type="date"   value="{{$chofer->ingresoAgencia}}" name="ingresoAgencia">
			</div>
		</div>
		
		<div class="col-md-6">

			<label for="example-date-input" class="col-5 col-form-label"><strong>Prevision
					Multas</strong></label>
			<div class="col-7">
				<input class="form-control" type="number"  value="{{$chofer->previsionMulta}}" name="previsionMulta">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Saldo
					cuenta corriente</strong></label>
			<div class="col-7">
				<input class="form-control" type="number"  value="{{$chofer->saldoCuentaCorriente}}" name="saldoCuentaCorriente">
			</div>
		</div>
		
			<div class="col-md-6">
    			<label for="example-text-input" class="col-2 col-form-label"><strong>Autos</strong></label> 
    				<div class="col-7">
        				<select class="form-control" name="auto">
    						@foreach($autos as $auto)
    							
    						<option value="{{ $auto->id }}" {{$chofer->auto_id == $auto->id ? 'selected' : '' }} > {{ $auto->id }}</option> 
    						@endforeach
    
    					</select>
					</div>
				</div>
	</div>
	
    
    	
	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-4">
			<button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
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
