<!------------------------ CURRENT ADOPTION STATUS ON THE USER PAGE -------------------------------->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-9 col-sm-9 content-padding">
        <div class="header">
            <div class="row">
                <div class="col-md-1">
                    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Back</a>
                </div>
                <div class="col-md-6">
                    <h2>Current Adoption Status</h2>
                </div>
            </div>
        </div>

        <ul class="list-group center">
            @if($userAdopts)
            <li class="list-group-item ">
                <div class="d-flex w-200 justify-content-between">
                    <h5 class="mb-1">Order ID: {{ $userAdopts->id }}</h5>
                    <medium> {{ $userAdopts->adopt_status }}</medium>
                </div>
                <p class="mb-1">Pet Name: {{ $userAdopts->dog ? $userAdopts->dog->name : 'N/A' }}</p>
                <img src="{{ asset('dog/' . $userAdopts->dog->image) }}" alt="Dog Image"
                    style="max-width: 200px; max-height: 200px;">
                @else
                <p>No records found.</p>
            </li>
            @endif
        </ul>
    </div>
</div>
@endsection