@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Administracion de Reservas</h1>
	</div>
	
	 <div class="form-group row">
		<div class="col-md-6">
			<div class="col-8">
				     <table class="table table-striped">
        <tr>
			<th>Coche</th>
			<th>Ult. Destino</th>
			<th>Hora</th>
			<th>Ida</th>
		</tr>
        @foreach ($autos as $auto)
        <tr>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->id }}</td>
			<td>{{ $auto->id }}</td>
		</tr>
		
        @endforeach
      </table>
			</div>
		</div>

		<div class="col-md-6">
			<label for="example-text-input" class="col-5 col-form-label"><strong>Aviso al Despachador</strong></label>
			<div class="col-6">
			</div>
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col-md-12">
			<div class="col-12">
				     <table id="tabla" class="table table-striped">
        <tr>
        	<th>Num</th>
			<th>Dia y Hora del viaje</th>
			<th>Desde</th>
			<th>Hasta</th>
			<th>Numero</th>
		</tr>

        @foreach ($reservas as $reserva)
        <tr id="{{$reserva->id}}">
    	    <td>{{ $loop->iteration }}</td>
			<td><input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s', strtotime($reserva->diaHoraViaje))}}" disabled></td>
			<td>{{ $reserva->desde }}</td>
			<td>{{ $reserva->hasta }}</td>
			<td>{{ $reserva->numero }}</td>
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

        	switch (key.toString()) {
            	    case tecla1:
            	    	var a = document.getElementById('link'); //or grab it by tagname etc
						idRow = document.getElementById("tabla").rows[1].id;
	            	    a.href = "http://localhost:82/remis/public/asignarReserva?idReserva="+idRow;
	   						 
            	    	$("#myModal").modal();
            	        break;
            	    case tecla2:
						 idRow = document.getElementById("tabla").rows[2].id;
            	    	$("#myModal").modal();
            	        break;
            	    case tecla3:
						 idRow = document.getElementById("tabla").rows[3].id;
            	    	$("#myModal").modal();
            	        break;
            	    case tecla4:
						var idRow = document.getElementById("tabla").rows[4].id;
            	    	$("#myModal").modal();
            	        break;
            	    case tecla5:
						 idRow = document.getElementById("tabla").rows[5].id;
            	    	$("#myModal").modal();
            	        break;
    		}
		
		}

	</script>
@endsection
