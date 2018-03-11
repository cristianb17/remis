@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>
			Gestion de Coches
		</h1>
	</div>
 <form method="GET" action="{{ route('listarAutos') }}">
                        @csrf
	<div style="border-style: solid; font-size: 16px" >
    	<div class="form-group row">
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-3 col-form-label">Coche</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" value="{{$auto->coche}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Marca</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" value="{{$auto->marca}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Modelo</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" value="{{$auto->modelo}}">
    			</div>
    		</div>
    	</div>
    
    	<div class="form-group row">
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Año</label>
    			<div class="col-8">
    				<input class="form-control"  type="number" value="{{$auto->ano}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Color</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" value="{{$auto->color}}">
    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Patente</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" value="{{$auto->patente}}">
    			</div>
    		</div>
    	</div>
    
    	<div class="form-group row">
    
    		<div class="col-md-4">
    			<label for="example-text-input" class="col-2 col-form-label">Chofer</label>
    			<div class="col-8">
    				<input class="form-control"  type="text" value="{{$auto->chofer}}">
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
				<input class="form-control"  type="text" value="{{$auto->propietario}}">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label">Domicilio</label>
			<div class="col-8">
				<input class="form-control"  type="text" value="{{$auto->domicilio}}">
			</div>
		</div>
		
		<div class="col-md-4">
			<label for="example-text-input" class="col-2 col-form-label">Localidad</label>
			<div class="col-8">
				<input class="form-control"  type="text" value="{{$auto->localidad}}">
			</div>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Telefono 1</label>
			<div class="col-8">
				<input class="form-control"  type="tel" value="{{$auto->tel1}}">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Telefono 2</label>
			<div class="col-8">
				<input class="form-control"  type="tel" value="{{$auto->tel2}}">
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
				<input class="form-control"  type="date" value="{{$auto->altaAgencia}}">
			</div>
		</div>

		<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Venc. Poliza</label>
			<div class="col-8">
				<input class="form-control"  type="date" value="{{$auto->vencPoliza}}">
			</div>
		</div>
		
	<div class="col-md-4">
			<label for="example-text-input" class="col-4 col-form-label">Venc. GNC</label>
			<div class="col-8">
				<input class="form-control"  type="date" value="{{$auto->vencGNC}}">
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
                  <option  {{ $auto->gasolero == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->gasolero == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Aire Acondicionado</label>
        		<select name="aire" >
                   <option  {{ $auto->aire == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->aire == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Odometro</label>
				<select name="odometro" >
                   <option  {{ $auto->odometro == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->odometro == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Radio</label>
				<select name="radio" >
                   <option  {{ $auto->radio == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->radio == 0 ? 'selected="selected"' : '' }}>NO</option>
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
                   <option  {{ $auto->odometroDatosFac == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->odometroDatosFac == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Radio</label>
				<select name="radioDatosFact" >
                   <option  {{ $auto->radioDatosFact == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->radioDatosFact == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

	</div>
	
	<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Celular</label>
				<select name="celular" >
                   <option  {{ $auto->celular == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->celular == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Lavadero</label>
				<select name="lavadero" >
                   <option  {{ $auto->lavadero == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->lavadero == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		</div>
		
			<div class="form-group row">
		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label">Alquiler</label>
				<select name="alquiler" >
                   <option  {{ $auto->alquiler == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->alquiler == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-4 col-form-label">Prevision de Multas</label>
				<select name="previsionMultas" >
                   <option  {{ $auto->previsionMultas == 1 ? 'selected="selected"' : '' }}>SI</option>
                  <option {{ $auto->previsionMultas == 0 ? 'selected="selected"' : '' }}>NO</option>
                </select>
		</div>

		</div>
	</div>
	</br>
	<div class="form-group">
		<div class="col-md-8 offset-md-5">
			<button type="submit" class="btn btn-primary btn-lg">Regresar</button>
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
