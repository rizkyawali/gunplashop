@extends('layouts.app')

@section('title')
    Login - Gunplashop
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card bg-white border">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST" aria-label="{{ __('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" class="col-sm-12 col-form-label pl-0">{{ __('E-mail Address') }}</label>
                                <br>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-row">
                            <div class="col-md-12">
                                <button type="submit" class="btn-block btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password ?') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
