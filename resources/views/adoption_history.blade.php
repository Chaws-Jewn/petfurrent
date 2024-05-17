@extends('layouts.app_nav')

@section('content')

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="display-4 font-weight-bold text-primary">Adoption History</h2>
    </div>
        <p>Table where you can see the status of your adoption form.</p>
    <!-- Table for Adoption History -->
    <table class="table table-bordered">
        <thead >
            <tr>
                <th class="text-center bg-secondary" style="width: 10%">Adopt ID</th>
                <th class="text-center bg-secondary" style="width: 20%">Dog Name</th>
                <th class="text-center bg-secondary" style="width: 20%">Adopt Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
            <tr>
                <td class="text-center bg-primary">{{ $adoption->id }}</td>
                <td class="text-center bg-secondary">{{ optional($adoption->dog)->name }}</td>
                <td class="text-center bg-secondary">
                    <span class="badge bg-primary {{ $adoption->adopt_status }}">
                        {{ $adoption->adopt_status }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
