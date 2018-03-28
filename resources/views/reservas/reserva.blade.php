@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Ingresar Nueva Reserva</h1>
	</div>
       <form method="POST" action="{{ route('crearReserva') }}">
                        @csrf

<div style="border-style: solid;">
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Dia y Hora del viajes</strong></label>
			<div class="col-7">
				<input class="form-control" type="datetime-local" name="diaHoraViaje" autofocus>
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Aviso al Despachador</strong></label>
			<div class="col-7">
				<input class="form-control" type="datetime-local" name="avisoDespachador">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Desde</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="desde">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Hasta</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="hasta">
			</div>
		</div>
	</div>
		<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Numero</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  name="numero">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Piso</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="piso">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Depto</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="depto">
			</div>
		</div>
	</div>
</div>

<div style="border-style: solid;">
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Precio Estimado</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="precioEstimado">
			</div>
		</div>
			<div class="col-md-6">
    
    			<label for="example-url-input" class="col-5 col-form-label"><strong>Tipo (1= ida / 2 = C/ reg)</strong></label>
    				<div class="col-7">
    					<select class="form-control" name="tipo">
                          <option value="1">1</option>
                          <option value="0">2</option>
                        </select>
    				</div>
    		</div>
	</div>
		<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Desde</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="desdeEstimado">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Hasta</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="hastaEstimado">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-12">
			<div class="col-9">
                <div class="form-group">
                  <label for="comment"><strong>Observaciones:</strong></label>
                  <textarea class="form-control" rows="3" id="observaciones" name="observaciones"></textarea>
                </div>			
                
             </div>
		</div>
	</div>
</div>
<div style="border-style: solid;">
		<div class="form-group row">
		<div class="col-md-6">
			<label for="example-date-input" class="col-5 col-form-label"><strong>Repeticion Viajes</strong></label>

		</div>
	</div>
	
		<div class="form-group row">
		<div class="col-md-12 offset-0">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox1" name="lunes" value="lunes"> <label
						class="form-check-label" for="inlineCheckbox1">Lunes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox2" name="martes" value="martes"> <label
						class="form-check-label" for="inlineCheckbox2">Martes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox3" name="miercoles" value="miercoles"> <label
						class="form-check-label" for="inlineCheckbox3">Miercoles</label>
				</div>

					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox4" name="jueves" value="jueves"> <label
						class="form-check-label" for="inlineCheckbox4">Jueves</label>
				</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox5" name="viernes" value="viernes"> <label
						class="form-check-label" for="inlineCheckbox5">Viernes</label>
				</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox6" name="sabado" value="sabado"> <label
						class="form-check-label" for="inlineCheckbox6">Sabado</label>
				</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox7" name="domingo" value="domingo"> <label
						class="form-check-label" for="inlineCheckbox7">Domingo</label>
				</div>
			</div>
		</div>

	<div class="form-group row">
	
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Desde</strong></label>
			<div class="col-7">
				<input class="form-control" type="datetime-local" name="desdeEstimado">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Hasta</strong></label>
			<div class="col-7">
				<input class="form-control" type="datetime-local" name="hastaEstimado">
			</div>
		</div>
	</div>
	

		<div class="form-group row">
    		<div class="col-md-6">
    
    			<label for="example-url-input" class="col-5 col-form-label"><strong>Repetir</strong></label>
    			<div class="col-7">
    					<select class="form-control" name="repetir">
                          <option value="1">SI</option>
                          <option value="0">NO</option>
                        </select>
    			</div>
    		</div>
		</div>
</div>
</br>
	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-5">
			<button type="submit" class="btn btn-primary btn-lg">Ingresar Reserva</button>
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
