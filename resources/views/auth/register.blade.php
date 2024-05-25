@extends('layouts.public')
@section('content')
    <div class="login-form-container active">
        <div id="close-login-btn">
            <a href="{{ url('/') }}" class="fas fa-times" style="font-size:25px;"></a>
        </div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <h3>Register</h3>
            <span>Name</span>
            <input type="text" name="name" class="box" placeholder="Enter your name" />
            @error('name')
                <span style="color: red;" id="name_error">{{ $message }}</span>
            @enderror
            <span>Email</span>
            <input type="email" name="email" class="box" placeholder="Enter your email" />
            @error('email')
                <span style="color: red;" id="email_error">{{ $message }}</span>
            @enderror
            <span>Password</span>
            <input type="password" name="password" class="box" placeholder="Enter your password" />
            @error('password')
                <span style="color: red;" id="password_error">{{ $message }}</span>
            @enderror
            <span>Confirm Password</span>
            <input type="password" name="password_confirmation" class="box" placeholder="Confirm your password" />
            @error('password_confirmation')
                <span style="color: red;" id="password_confirmation_error">{{ $message }}</span>
            @enderror
            <input type="submit" value="Regiter" class="btn" />
            <p>have a account? <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
