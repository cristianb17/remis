@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombreUsuario" class="col-md-4 col-form-label text-md-right">Nombre Usuario</label>

                            <div class="col-md-6">
                                <input id="nombreUsuario" type="text" class="form-control{{ $errors->has('nombreUsuario') ? ' is-invalid' : '' }}" name="nombreUsuario" value="{{ old('nombreUsuario') }}" required>

                                @if ($errors->has('nombreUsuario'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombreUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Privilegios</label>

                            <div class="col-md-6">
                          		 <select name="privilegio" class="form-control">
									<option value="1">ADMIN</option>
									<option value="0">USUARIO DEL SISTEMA</option>
								</select>
                          	  </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
