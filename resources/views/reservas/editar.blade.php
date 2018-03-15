@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Editar Reserva</h1>
	</div>
       <form method="POST" action="{{ route('actualizarReserva') }}">
                        @csrf

		<input class="form-control"  type="hidden" name="id" value="{{$reserva->id}}">

<div style="border-style: solid;">
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Dia y Hora del viajes</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="diaHoraViaje"   value="{{$reserva->diaHoraViaje}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Aviso al Despachador</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="avisoDespachador"  value="{{$reserva->avisoDespachador}}">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Desde</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="desde"  value="{{$reserva->desde}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Hasta</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="hasta"  value="{{$reserva->hasta}}">
			</div>
		</div>
	</div>
		<div class="form-group row">
		<div class="col-md-6">
			<label for="example-search-input" class="col-5 col-form-label"><strong>Numero</strong></label>
			<div class="col-7">
				<input class="form-control" type="text"  name="numero"  value="{{$reserva->numero}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-email-input" class="col-5 col-form-label"><strong>Piso</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="piso"  value="{{$reserva->piso}}">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Depto</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="depto"  value="{{$reserva->depto}}">
			</div>
		</div>
	</div>
</div>

<div style="border-style: solid;">
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Precio Estimado</strong></label>
			<div class="col-7">
				<input class="form-control" type="text" name="precioEstimado"  value="{{$reserva->precioEstimado}}">
			</div>
		</div>
			<div class="col-md-6">
    
    			<label for="example-url-input" class="col-5 col-form-label"><strong>Tipo (1= ida / 2 = C/ reg)</strong></label>
    				<div class="col-7">
    					<select class="form-control" name="tipo" >
                          <option  {{ $reserva->tipo == 1 ? 'selected="selected"' : '' }}>1</option>
                          <option  {{ $reserva->tipo == 2 ? 'selected="selected"' : '' }}>2</option>
                        </select>
    				</div>
    		</div>
	</div>
		<div class="form-group row">
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Desde</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="desdeEstimado"  value="{{$reserva->desdeEstimado}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label" ><strong>Hasta</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="hastaEstimado"  value="{{$reserva->hastaEstimado}}">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-12">
			<div class="col-9">
                <div class="form-group">
                  <label for="comment"><strong>Observaciones:</strong></label>
                  <textarea class="form-control" rows="3" id="observaciones" name="observaciones"  value="{{$reserva->observaciones}}"></textarea>
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
						class="form-check-label" for="inlineCheckbox1"
						 {{ $reserva->lunes == 'lunes' ? 'checked' : '' }}
						>Lunes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox2" name="martes" value="martes"> <label
						class="form-check-label" for="inlineCheckbox2"
						 {{ $reserva->martes == 'martes' ? 'checked' : '' }}
						>Martes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox3" name="miercoles" value="miercoles"> <label
						class="form-check-label" for="inlineCheckbox3"
						 {{ $reserva->miercoles == 'miercoles' ? 'checked' : '' }}
						>Miercoles</label>
				</div>

					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox4" name="jueves" value="jueves"> <label
						class="form-check-label" for="inlineCheckbox4"
						 {{ $reserva->jueves == 'jueves' ? 'checked' : '' }}
						>Jueves</label>
				</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox5" name="viernes" value="viernes"> <label
						class="form-check-label" for="inlineCheckbox5"
						 {{ $reserva->viernes == 'viernes' ? 'checked' : '' }}
						>Viernes</label>
				</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox6" name="sabado" value="sabado"> <label
						class="form-check-label" for="inlineCheckbox6"
						 {{ $reserva->sabado == 'sabado' ? 'checked' : '' }}
						>Sabado</label>
				</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox"
						id="inlineCheckbox7" name="domingo" value="domingo"> <label
						class="form-check-label" for="inlineCheckbox7"
						 {{ $reserva->domingo == 'domingo' ? 'checked' : '' }}
						>Domingo</label>
				</div>
			</div>
		</div>

	<div class="form-group row">
	
		<div class="col-md-6">

			<label for="example-url-input" class="col-5 col-form-label"><strong>Desde</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="desdeEstimado"  value="{{$reserva->desdeEstimado}}">
			</div>
		</div>
		<div class="col-md-6">
			<label for="example-tel-input" class="col-5 col-form-label"><strong>Hasta</strong></label>
			<div class="col-7">
				<input class="form-control" type="date" name="hastaEstimado"  value="{{$reserva->hastaEstimado}}">
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
