@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="log">
        <div class="col-md-8">
            <div class="card opacity-75">
                <div class="card-header">{{ __('Confirmar Contraseña') }}</div>

                <div class="card-body">
                    {{ __('Por favor confirme su contraseña antes de continuar.') }}

                    <form method="POST" action="{{ route('password.confirm') }}" novalidate>
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar Contraseña') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
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
