@extends('backEnd.layouts.login')

@section('content')
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <a href="{{ route('main') }}">
                            <img class="brand-img" src="{{ asset('images/logo/kineticfastag-logo.png') }}"
                                 alt="{{ config('app.name', '') }}">
                        </a>
                        <h1 class="brand-text font-size-18">{{ __('Reset Password') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('password.request') }}" autocomplete="off">
                        @csrf
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required/>
                            <label class="floating-label">Email</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required/>
                            <label class="floating-label">Password</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                            <label class="floating-label">Confirm Password</label>
                        </div>
                        <button type="submit"
                                class="btn btn-primary btn-block btn-lg mt-40">{{ __('Reset Password') }}</button>
                        <a href="{{ route('login') }}" class="btn btn-success btn-block btn-lg mt-20" style="margin-left: 0">
                            {{ __('Login') }}
                        </a>
                    </form>
                </div>
            </div>

            <footer class="page-copyright page-copyright-inverse" style="margin-top: 0">
                <p>© {{ date('Y') }}. All RIGHT RESERVED.</p>

            </footer>
        </div>
    </div>
@endsection
