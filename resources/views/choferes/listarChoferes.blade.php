@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Choferes</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('crearChofer') }}" class="btn btn-primary">Ingresar un nuevo chofer</a>
  	</p>
	
     <table class="table table-striped">
        <tr>
            <th>Full name</th>
            <th>Email</th>
        </tr>
        @foreach ($choferes as $chofer)
        <tr>
            <td>{{ $chofer->nombre }}</td>
            <td>{{ $chofer->apellido }}</td>
        </tr>
        @endforeach
      </table>
      
      

</div>


<script>
window.onload = function() {
   document.getElementById("nombre").focus();
}
</script>
@endsection
