<!DOCTYPE html>
<html lang="en">
    <title>PetFurrent</title>

<head>

    @extends('layouts.app_without_navbar')


</head>

<body>

<div class="container-fluid">
    <!-- Content Section -->
    @section('content')

    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-lg-2 col-sm-2">
            @include('includes.sidebar')
        </div>

        <!-- Main Content -->
        
        <div class="col-lg-9 col-sm-9 content-padding py-4">

            <div class="header">
                <!-- Button to redirect to 'Completed Adoption' page -->
                <a href="{{ route('admin.completedAdoption') }}" class="btn btn-success mr-auto">Completed Adoption</a>
                <hr>
            </div>

            <!-- Table Part -->
            <div class="col-lg-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <!-- Table for Adoption Information-->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!-- Table Column Names -->
                                    <th class="text-center" style="width: 10%">Adopt ID</th>
                                    <th class="text-center" style="width: 20%">Customer Name</th>
                                    <th class="text-center" style="width: 10%">Pet Name</th>
                                    <th class="text-center">Adopt Status</th>
                                    <th class="text-center">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop for each adoption record -->
                                @foreach ($adopts->where('adopt_status', '!=', 'Completed') as $adopt)
                                <tr>
                                    <td class="text-center">{{ $adopt->id }}</td>
                                    <td class="text-center">{{ $adopt->user->name }} {{ $adopt->user->fname }}</td>
                                    <td class="text-center">{{ optional($adopt->dog)->name }}</td>

                                    <td class="text-center">
                                        <!-- Form for updating the adoption status -->
                                        <form action="{{ route('admin.updateStatus', $adopt) }}" method="post"
                                            onsubmit="return confirm('Are you sure you want to update the status?');">
                                            @csrf
                                            @method('PUT')
                                            <!-- <span class="badge bg-{{ getStatusColor($adopt->adopt_status) }}">
                                                {{ $adopt->adopt_status }}
                                            </span> -->
                                            <select name="adopt_status" id="adopt_status" class="form-select"
                                                onchange="this.form.submit()">
                                                <option value="Pending" {{ $adopt->adopt_status === 'Pending' ?
                                                    'selected' : '' }}>Pending</option>
                                                <option value="Processing" {{ $adopt->adopt_status === 'Processing'
                                                    ? 'selected' : '' }}>Processing</option>
                                                <option value="Completed" {{ $adopt->adopt_status === 'Completed' ?
                                                    'selected' : '' }}>Completed</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <!-- Button to view the adoption details -->
                                        <a href="{{ route('admin.adopt.details', $adopt->id) }}"
                                            class="btn btn-info">Adoption Details</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- End of Content Section -->
                @endsection
            </div>
        </div>
    </div>
</div>
</body>

</html>