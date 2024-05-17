@extends('layouts.app_without_navbar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-4">
                <img src="{{ asset('petode-logo.png') }}" alt="Petode Logo" width="150">
            </div>

            <div class="card">
            <div class="card-header text-white" style="background-color: purple ;"> 
                        <h4 class="mb-0" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align:center;">{{ __('Registration') }}</h4>
                    </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">

                                 <!-- LAST NAME -->
                                 <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your last name" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- GENDER -->
                                <div class="row mb-3">
                                    <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                                    <div class="col-md-8">
                                        <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="others" {{ old('gender') == 'others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- EMAIL ADDRESS -->
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <!-- ADDRESS -->
                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                    <div class="col-md-8">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Enter your address" required autocomplete="address" autofocus>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- PASSWORD -->
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                               <!-- FIRST NAME -->
                               <div class="row mb-3">
                                    <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                                    <div class="col-md-8">
                                        <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" placeholder="Enter your first name" required autocomplete="fname" autofocus>
                                        @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- BIRTHDATE -->
                                <div class="row mb-3">
                                    <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input id="birthdate" type="text" class="form-control datepicker @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" placeholder="Select your birthdate" required autocomplete="off">
                                            <span class="input-group-text">
                                                <i class="bi bi-calendar"></i>
                                            </span>
                                        </div>
                                        @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- PHONE NUMBER -->
                                <div class="row mb-3">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Number') }}</label>
                                    <div class="col-md-8">
                                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter your phone number" required autocomplete="tel">
                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- POSTAL CODE -->
                                <div class="row mb-3">
                                    <label for="postal_code" class="col-md-4 col-form-label text-md-end">{{ __('Postal Code') }}</label>
                                    <div class="col-md-8">
                                        <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" placeholder="Enter your postal code" required autocomplete="postal_code" autofocus>
                                        @error('postal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- CONFIRM PASSWORD -->
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                            <span class="ml-2">Already have an account? <a href="{{ route('login') }}">Login</a></span>
                                <button type="submit" class="btn btn-primary btn-block rounded-pill" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    {{ __('Register') }}
                                </button>
                                
                                <div class="mt-3">
                                    <a href="{{ route('login') }}" class="btn btn-secondary btn-block rounded-pill" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-body {
        background-color: #333333; /* Set the background color inside the card */
        color: white; /* Set text color to white inside the card */
    }
</style>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
@endsection
