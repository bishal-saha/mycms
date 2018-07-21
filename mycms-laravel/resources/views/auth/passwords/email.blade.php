@extends('backEnd.layouts.login')

@section('content')
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <a href="{{ route('index') }}">
                            <img class="brand-img" src="{{ asset('backEnd/assets/images/logo.png') }}"
                                 alt="{{ config('app.name', '') }}">
                        </a>
                        <h1 class="brand-text font-size-18">{{ __('Reset Password') }}</h1>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
                        @csrf
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required/>
                            <label for="email" class="floating-label">Email</label>
                        </div>

                        <button type="submit"
                                class="btn btn-primary btn-block btn-lg mt-40">{{ __('Send Password Reset Link') }}</button>
                        <a href="{{ route('login') }}" class="btn btn-info btn-block btn-lg mt-20" style="margin-left: 0">
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
