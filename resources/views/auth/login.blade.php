@extends('layouts.frontend')

@section('content')
<div class="peers ai-s fxw-nw h-100vh">
    <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("/images/bg.jpg")'>
        <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
                <img class="pos-a centerXY" src="/images/logo.png" alt="logo">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r">
        <h4 class="fw-300 c-grey-900 mB-40">{{ __('Login') }}</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-form-label text-md-right text-normal text-dark">{{ __('Correo Electronico:') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="username@example.com" required autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="password" class="col-form-label text-md-right text-normal text-dark">{{ __('Contraseña:') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="*********" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer">
                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall1" name="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                            <label for="inputCall1" class=" peers peer-greed js-sb ai-c">
                                <span class="peer peer-greed">{{ __('Recuerdame') }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="peer">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </div>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidó su contraseña?') }}
                </a>
                @if(config('template.registration_open'))
                <a class="btn btn-link" href="{{ route('register') }}">
                    {{ __('No esta registrado?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
