@extends('backEnd.layouts.login')


@section('content')
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <a href="{{ url('/') }}">
                            <img class="brand-img" src="{{ asset('backEnd/assets/images/logo.png') }}" alt="{{ config('app.name', '') }}" >
                        </a>
                        <h1 class="brand-text font-size-18">Administrator Login</h1>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{ session('warning') }}
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
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required/>
                            <label for="email" class="floating-label">Email</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required/>
                            <label for="password" class="floating-label">Password</label>
                        </div>
                        <div class="form-group clearfix">
                            <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                                <input type="checkbox" id="remember"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember me</label>
                            </div>
                            <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Login</button>
                        @if(Helper::GeneralWebmasterSettings("register_status"))
                            <a href="{{ route('register') }}">
                                <button type="button" class="btn btn-info btn-block btn-lg">Create a new account</button>
                            </a>
                        @endif
                    </form>
                </div>
            </div>

            <footer class="page-copyright page-copyright-inverse" style="margin-top: 0">
                <p>© {{ date('Y') }}. All RIGHT RESERVED.</p>

            </footer>
        </div>
    </div>
@endsection
