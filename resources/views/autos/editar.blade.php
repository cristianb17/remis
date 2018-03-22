@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>
			Gestion de Coches
		</h1>
	</div>
 <form method="POST" action="{{ route('actualizarAuto') }}">
                        @csrf
	<div style="border-style: solid; font-size: 16px" >
		<input class="form-control"  type="hidden" name="id" value="{{$auto->id}}">
    	<div class="form-group row">
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-3 col-form-label">Coche</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" name="coche" value="{{$auto->coche}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Marca</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" name="marca" value="{{$auto->marca}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Modelo</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" name="modelo" value="{{$auto->modelo}}">
    			</div>
    		</div>
    	</div>
    
    	<div class="form-group row">
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Año</label>
    			<div class="col-8">
    				<input class="form-control"  type="number" name="ano" value="{{$auto->ano}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Color</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" name="color" value="{{$auto->color}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Patente</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" name="patente" value="{{$auto->patente}}">
    			</div>
    		</div>
    	</div>

	</div>
	</br>
	
	<div style="border-style: solid;font-size: 16px">
	  <div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label">Propietario</label>
			<div class="col-8">
				<input class="form-control"  type="text" name="propietario" value="{{$auto->propietario}}">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label">Domicilio</label>
			<div class="col-8">
				<input class="form-control"  type="text" name="domicilio" value="{{$auto->domicilio}}">
			</div>
		</div>
		
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label">Localidad</label>
			<div class="col-8">
				<input class="form-control"  type="text" name="localidad" value="{{$auto->localidad}}">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Telefono 1</label>
			<div class="col-8">
				<input class="form-control"  type="tel" name="tel1" value="{{$auto->tel1}}">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Telefono 2</label>
			<div class="col-8">
				<input class="form-control"  type="tel" name="tel2" value="{{$auto->tel2}}">
			</div>
		</div>
	</div>
</div>
	
	</br>
	<div style="border-style: solid;font-size: 14px">
	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Alta agencia</label>
			<div class="col-8">
				<input class="form-control"  type="date" name="altaAgencia" value="{{$auto->altaAgencia}}">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Venc. Poliza</label>
			<div class="col-8">
				<input class="form-control"  type="date" name="vencPoliza" value="{{$auto->vencPoliza}}">
			</div>
		</div>
		
	<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Venc. GNC</label>
			<div class="col-8">
				<input class="form-control"  type="date" name="vencGNC"  value="{{$auto->vencGNC}}">
			</div>
		</div>
		
	</div>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Venc. Pago Seguro (0-28)</label>
			<div class="col-7">
				<input class="form-control"   type="date" name="vencPagoSeg" value="{{$auto->vencPagoSeg}}">
			</div>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Venc. Hab. Auto</label>
			<div class="col-7">
				<input class="form-control"   type="date" name="vencHabAuto" value="{{$auto->vencHabAuto}}">
			</div>
		</div>


</div>
</div>
</br>
<div style="border-style: solid;font-size: 16px">
<h3>Caracteristicas del vehiculo</h3>
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Es gasolero</label>
				<select name="gasolero" >
                  <option value="1" {{ $auto->gasolero == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0" {{ $auto->gasolero == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Aire Acondicionado</label>
        		<select name="aire" >
                   <option value="1" {{ $auto->aire == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0"  {{ $auto->aire == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Odometro</label>
				<select name="odometro" >
                   <option  value="1" {{ $auto->odometro == 1 ? 'selected="selected"' : '' }}>SI</option>
                   <option value="0" {{ $auto->odometro == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Radio</label>
				<select name="radio" >
                   <option value="1" {{ $auto->radio == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0"  {{ $auto->radio == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		</div>
	</div>
	</br>
<div style="border-style: solid;font-size: 16px">
<h3>Datos de Facturacion</h3>
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Odómetro</label>
				<select name="odometroDatosFac" >
                   <option value="1"  {{ $auto->odometroDatosFac == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value= "0" {{ $auto->odometroDatosFac == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Radio</label>
				<select name="radioDatosFact" >
                   <option value="1" {{ $auto->radioDatosFact == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0" {{ $auto->radioDatosFact == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Celular</label>
				<select name="celular" >
                   <option value="1" {{ $auto->celular == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0" {{ $auto->celular == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Lavadero</label>
				<select name="lavadero" >
                   <option value="1" {{ $auto->lavadero == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0" {{ $auto->lavadero == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		</div>
		
			<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Alquiler</label>
				<select name="alquiler" >
                   <option  value="1" {{ $auto->alquiler == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0" {{ $auto->alquiler == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Prevision de Multas</label>
				<select name="previsionMultas" >
                   <option value="1" {{ $auto->previsionMultas == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option value="0" {{ $auto->previsionMultas == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		</div>
	</div>
	</br>
	<div class="form-group">
		<div class="col-md-8 offset-md-5">
			<button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
		</div>
	</div>
</form>
</div>
<script>
window.onload = function() {
   document.getElementById("coche").focus();
}
</script>
@endsection
