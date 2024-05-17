@extends('layouts.app_without_navbar')

@section('content')
<style>
    .full-height {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="full-height">
    <div class="col-md-8 text-center">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white">{{ __('Verify Your Email Address') }}</div>

            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="mb-3">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </p>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('Resend Verification Email') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
