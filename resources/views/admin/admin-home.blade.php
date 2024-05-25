<!DOCTYPE html>
<html lang="en">
    <title>PetFurrent</title>

<head>

    @extends('layouts.app_without_navbar')


</head>

<style>
    .t-head{
        background-color: #343a40;
        border-radius: 30px;
        color: white;
    }

    table {
        width: 100%;
        padding: 10px;
        background-color: #DEDEDE;
        border-radius: 30px;
    }
    
    th, td {
        font-weight: 300;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .drp-dwm {
        width: auto;
        padding-left: 30px;
    }



</style>

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
                <div class="text-center mb-4">
                <h2 class="display-4 font-weight-bold">Client Request</h2>
                </div>
                    <div class="row">
                        <!-- Table for Adoption Information-->
                        <table>
                            <thead class="t-head">
                                <tr class="table-content">
                                    <!-- Table Column Names -->
                                    <th class="text-center">Adopt ID</th>
                                    <th class="text-center">Customer Name</th>
                                    <th class="text-center">Pet Name</th>
                                    <th class="text-center">Adopt Status</th>
                                    <th class="text-center">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop for each adoption record -->
                                @foreach ($adopts->where('adopt_status', 'Pending') as $adopt)
                                <tr>
                                    <td class="text-center">{{ $adopt->id }}</td>
                                    <td class="text-center">{{ $adopt->user->name }} {{ $adopt->user->fname }}</td>
                                    <td class="text-center">{{ optional($adopt->dog)->name }}</td>

                                    <td class="drp-dwm">
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

                                                <option value="Not Eligible" {{ $adopt->adopt_status === 'Not Eligible' ?
                                                    'selected' : '' }}>Not Eligible</option>

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