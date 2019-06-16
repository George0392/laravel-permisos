@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A sido enviado un enlace de validación a su correo de usuario') }}
                        </div>
                    @endif

                    {{ __(' Antes de proceder por favor revise su E-mail para conseguir el link de verificación.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('Click para Enviar') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
