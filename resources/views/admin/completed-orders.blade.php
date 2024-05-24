<!DOCTYPE html>
<html lang="en">

<head>
@extends('layouts.app_without_navbar')
</head>

<body>
    <!------------------------ COMPLETED ORDERS PAGE -------------------------------->

    <div class="container-fluid">
        @section('content')
        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-lg-2 col-sm-2">
                @include('includes.sidebar')
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-sm-9 content-padding py-4">
                <div class="header">
                    <div class="row">
                        <!-- Header and Back button -->
                        <div class="col-md-1">
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                        </div>
                        <div class="col-md-6">
                            <!-- Page Title -->
                            <h2>Completed Adoption</h2>

                        </div>

                    </div>
                    <hr>
                </div>

<!-- List of Orders with 'Completed' status -->
<div class="col-md-9">
                            <h6>Dogs : 1</h6>
                        <h6>Cats : 0</h6>
                            </div>
<ul class="list-group">
    @foreach ($completedOrders as $adopt)
        <li class="list-group-item">
            <!-- Displaying details for each completed adoption -->
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Adopter ID: {{ $adopt->id }}</h5>
                <small>{{ $adopt->adopt_status }}</small>
            </div>
            <div class="form-group">
                <label for="">Adopter name:</label>
                <input type="text" class="form-control" value="{{ optional($adopt->user)->fname . ' ' . optional($adopt->user)->name ?? 'N/A' }}" readonly>

                <label for="">Phone number:</label>
                <input type="text" class="form-control" value="{{ $adopt->user->phone_number ?? 'N/A' }}" readonly>

                <label for="">User Email:</label>
                <input type="text" class="form-control" value="{{ $adopt->user->email ?? 'N/A' }}" readonly>

                <label for="">Breed:</label>
                <!-- lalo -->
                <input type="text" class="form-control" value="{{ optional($adopt->dog)->breed ?? 'N/A' }}" readonly>
            </div>
        </li>
        <hr>
    @endforeach
</ul>



            </div>
        </div>
        @endsection
    </div>

</body>

</html>
