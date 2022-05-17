@extends('layouts.app')

@section('content')
@if($errors->any())
<script>
Swal.fire({
  icon: 'error',
  title: 'Acceso invalido',
  text: '{{$errors->first()}}',
  showCancelButton: false,
  confirmButtonText: 'Ok',
})
</script>
<!-- <center><strong>{{$errors->first()}}</strong></center> -->
<br>
@endif
<div class="container">
    <center><img src="{{ asset('imgs/logo.jpeg') }}" alt="logo" class="img-thumbnail logo"></center> 
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><i class="fa-solid fa-lock"></i> {{ __('Inicio de sesion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('email') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span class="input-group-btn">
                                        <button id="eyebutton" class="btn btn-primary" type="button" onclick="mostrarContraseña();"><i class="fa-solid fa-eye-slash"></i></button>
                                    </span>
                                </div>
                                <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvido su contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        function mostrarContraseña(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
                $('#eyebutton').find("i").removeClass('fa-solid fa-eye-slash').addClass('fa-solid fa-eye');
            } else{
                tipo.type = "password";
                $('#eyebutton').find("i").removeClass('fa-solid fa-eye').addClass('fa-solid fa-eye-slash');
            }
        }
    </script>
@endsection