<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Administracion de Viajes') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('datepicker/css/datepicker.css') }}">
    
</head>
<body style="background-color: #C1C3C3">
    <div id="app" >
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <div class="container">
           @guest
            @else
             <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu Principal
                     </button>
                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('listarClientes') }}">Listar Clientes</a>
                            <a class="dropdown-item" href="{{ route('listarChoferes') }}">Listar Choferes</a>
                            <a class="dropdown-item" href="{{ route('listarAutos') }}">Listar Autos</a>
                            <a class="dropdown-item" href="{{ route('ingresarReserva') }}">Ingresar Reserva</a>                 
                      </div>
           	 	</div>
                   <a class="btn btn-success  offset-1" href="{{ route('home') }}" role="button">Pagina Principal</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                        @if(Auth::user()->privilegio == 1)
                       		 <li><a class="btn btn-secondary" href="{{ route('register') }}" role="button">Registrar Usuario</a> </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-secondary dropdown-toggle offset-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->nombreUsuario }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
