@extends('layouts.app_nav')

@section('content')
<div class="container">
    <div class="row">
        <!-- Dog image-->
        <div class="col-md-6">
            <img src="/dog/{{ $dog->image }}" alt="{{ $dog->name }}" style="width: 100%; height: 100%; max-width: 475px; max-height: 475px; border-radius: 50% 20% / 10% 40%;">
        </div>

        <!-- Dog details on the (right side) -->
        <div class="col-md-6">
            <h1><strong style="color: #3490dc;">Name: {{ $dog->name }}</strong></h1>

            <!-- Dog details (left side and in grid) -->
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Age: {{ $dog->age }} months old</strong></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Type: {{ $dog->breed }}</strong></p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Gender: {{ $dog->gender }}</strong></p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Details:</strong></p>
                </div>

            </div>
            <div class="col-md">
                    <p>{{ $dog->description }}</p>
                </div>

            <!-- ADOPT and Back to Home button -->
            <div class="d-flex flex-column mt-3">
                <!-- Proceed to Adopt -->
                <a href="{{ route('adopt.form', $dog) }}" class="btn btn-primary mb-2">Adopt</a>

                <!-- Back to Home-->
                <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
