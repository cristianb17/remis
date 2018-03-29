@extends('layouts.app') @section('content')

<div class="container">


	<div class="form-group row">
		<h1>Administracion de Reservas</h1>
	</div>
	
	 <div class="form-group row">
		<div class="col-md-4">
			<div class="col-12">
				     <table class="table table-striped table-sm">
        <tr>
			<th>Coche</th>
			<th>Ult. Destino</th>
			<th>Hora</th>
			<th>Tipo</th>
		</tr>
        @foreach ($autos as $auto)
        <tr>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->ultimoDestino }}</td>
			<td>{{ $auto->horaUltimoDestino }}</td>
			@if($auto->tipoUltimoDestino == 1)
				<td>IDA</td>
			@else
				<td>C/ Regreso</td>
			@endif
		</tr>
		
        @endforeach
      </table>
			</div>
		</div>

		<div class="col-md-8">
					<div class="col-md-12">
			<div class="col-12">
				     <table class="table table-striped table-sm ">
        <tr>
			<th>Coche</th>
			<th>Desde</th>
			<th>Numero</th>
			<th>Piso</th>
			<th>Hora</th>
			<th>Hasta</th>
			<th>Tipo</th>
			<th>Observaciones</th>
		</tr>
        @foreach ($reservasAsignadas as $reservaAsig)
        <tr>
        	<td>{{ $reservaAsig->auto }}</td>
			<td>{{ $reservaAsig->desde }}</td>
			<td>{{ $reservaAsig->numero }}</td>
			<td>{{ $reservaAsig->piso }}</td>
			<td>{{ $reservaAsig->diaHoraViaje }}</td>
			<td>{{ $reservaAsig->hasta }}</td>
			@if($reservaAsig->tipo == 1)
				<td>IDA</td>
			@else
				<td>C/ Regreso</td>
			@endif
			<td>{{ $reservaAsig->observaciones }}</td>
		</tr>
		
        @endforeach
      </table>
			</div>
		</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-12">
			<div class="col-12">
            	<table id="tabla" class="table table-striped table-sm">
                    <tr>
                    	<th>Num</th>
            			<th>Desde</th>
            			<th>Numero</th>
            			<th>Piso</th>
            			<th>Hora</th>
            			<th>Hasta</th>
            			<th>Tipo</th>
            			<th>Observaciones</th>
            		</tr>
            
                    @foreach ($reservas as $reserva)
                    <tr id="{{$reserva->id}}">
                	    <td>{{ $loop->iteration }}</td>
                	    <td>{{ $reserva->desde }}</td>
                	    <td>{{ $reserva->numero }}</td>
                	    <td>{{ $reserva->piso }}</td>
                	    <td>{{ $reserva->diaHoraViaje }}</td>
                	    <td>{{ $reserva->hasta }}</td>
                	    @if($reserva->tipo == 1)
            				<td>IDA</td>
            			@else
            				<td>C/ Regreso</td>
            			@endif
            			<td>{{ $reserva->observaciones }}</td>
            			
            		</tr>
            		
                    @endforeach
                 </table>
			</div>
		</div>
	</div>
	
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seleccione Auto para la reserva...</h4>
      </div>
      <div class="modal-body">
        	   <div class="form-group row">
    
    		<div class="col-md-10">
    			<label for="example-text-input" class="col-2 col-form-label">Autos</label> 
    				<div class="col-8">
        				<select class="form-control" autofocus name="auto" id="reserva" required onchange="agregarAuto(this);">
        				    <option value="0">Seleccion auto...</option> 
    						@foreach($autos as $auto)
    							<option value="{{ $auto->id }}"> {{ $auto->id }}</option> 
    						@endforeach
    
    					</select>
					</div>
				</div>
    	</div>
      </div>
      <div class="modal-footer">
         <a href="" id="link" class="btn btn-primary">Aceptar</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>

<script>

    function agregarAuto(valor){
    	var a = document.getElementById('link');
    	var url = a.href;
    	var posicionAcortar = url.indexOf("&");
    	if(posicionAcortar != -1)
        	url = url.substring(0,posicionAcortar);
	    a.href = url + '&autoID=' + valor.value ;
    }
	
	function seleccion(e){	
		var tecla1 = "49";
		var tecla2 = "50";
		var tecla3 = "51";
		var tecla4 = "52";
		var tecla5 = "53";
		
	    var evt = e ? e : event;
	    var key = window.Event ? evt.which : evt.keyCode;
		var idRow = '';
		var URL = "http://localhost:82/remis/public/asignarReserva?idReserva=";
    	var a = document.getElementById('link');
		
        	switch (key.toString()) {
            	    case tecla1:
						idRow = document.getElementById("tabla").rows[1].id;
	            	    a.href = URL + idRow;	 
            	    	$("#myModal").modal();
            	        break;
            	    case tecla2:
						 idRow = document.getElementById("tabla").rows[2].id;
		            	 a.href = URL + idRow; 
            	    	$("#myModal").modal();
            	        break;
            	    case tecla3:
						 idRow = document.getElementById("tabla").rows[3].id;
		            	 a.href = URL + idRow; 
            	    	$("#myModal").modal();
            	        break;
            	    case tecla4:
						 idRow = document.getElementById("tabla").rows[4].id;
		            	 a.href = URL + idRow; 
            	    	$("#myModal").modal();
            	        break;
            	    case tecla5:
						 idRow = document.getElementById("tabla").rows[5].id;
		            	 a.href = URL + idRow; 
            	    	$("#myModal").modal();
            	        break;
    		}
		
		}

	</script>
@endsection
