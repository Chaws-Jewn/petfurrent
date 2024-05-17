@extends('layouts.app_without_navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <img src="{{ asset('petode-logo.png') }}" alt="Petode Logo" width="120">

                <div class="card shadow-lg border-0">
                    <div class="card-header text-white" style="background-color: purple ;" >
                        <h4 class="mb-0" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ __('Login') }}</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ __('Email Address') }}</label>
                                <input id="email" placeholder="Email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ __('Password') }}</label>
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control rounded-pill @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary btn-block rounded-pill" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    {{ __('Login') }}
                                </button>
                                <div class="text-muted mt-2">
                                    Don't have an account? <a href="{{ route('register') }}" class="text-primary" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Register</a>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-primary" href="{{ route('password.request') }}" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </form>

                        <div class="mt-3">
                            <a href="{{ route('welcome') }}" class="btn btn-secondary btn-block rounded-pill" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-color: grey;
        color: white; /* Set text color to white for better visibility */
    }

    .card-body {
        background-color: #333333; /* Set the background color inside the card */
        color: white; /* Set text color to white inside the card */
    }

    /* Your existing styles remain unchanged */
</style>

@endsection
