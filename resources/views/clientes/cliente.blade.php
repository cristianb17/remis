@extends('layouts.app') @section('content')
<div class="container">


	<div class="form-group row">
		<h1>Listado de Clientes</h1>
	</div>
	
	 <p>
   		 <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Ingresar un nuevo cliente</a>
  	</p>
	
     <table class="table table-striped">
        <tr>
            <th>Full name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
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
