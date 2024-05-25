@extends('layouts.app_without_navbar')

@section('content')
<style type="text/css">
    .header {
        padding-top: 0px;
        margin-left: 0px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 16px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    .image_size {
        width: 100px;
        height: 120px;
    }

    .center-buttons {
        text-align: center;
    }
</style>

</head>

<body>
    <!------------------------ SHOW ALL DOGS / LIST OF ALL ADDED DOGS -------------------------------->

    <div class="container-fluid">

        @section('content')

        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-lg-2 col-sm-2">
                @include('includes.sidebar')
            </div>

            <!-- Main Content Section -->
            <div class="col-lg-9 col-sm-9 content-padding py-4">

                <div class="header">
                    <div class="row">
                        <div class="col-md-1">
                            <!-- Back button to go back to the admin index -->
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                        </div>
                        <div class="col-md-6">
                            <!-- Page Title -->
                            <h2>All pets</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <hr>

                            @if(count($dogs) > 0)
                            <table>
                                <tr>
                                    <!-- Table Column Names -->
                                    <th>Pet Name</th>
                                    <th>Age</th>
                                    <th>Type/Breed</th>
                                    <th>Gender</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th class="head_design">Update/Delete</th>
                                </tr>

                                <!-- Loop for each dog and display its details -->
                                @foreach($dogs as $dog)
                                <tr>
                                    <td>{{$dog->name}}</td>
                                    <td>{{$dog->age}}</td>
                                    <td>{{$dog->breed}}</td>
                                    <td>{{$dog->gender}}</td>
                                    <td>{{ implode(' ', array_slice(explode(' ', $dog->description), 0, 3)) . '...' }}</td>
                                    <td class="image">
                                        <!-- Display the uploaded dog's image -->
                                        @if ($dog->image != null)
                                            <img class="image_size" src="/dog/{{ $dog->image }}" alt="{{ $dog->name }} Image">
                                        @else
                                            <img class="image_size" src="{{ asset('images/noImage.png') }}" alt="{{ $dog->name }} Image">
                                        @endif
                                    </td>

                                    <td class="center-buttons">
                                        <!-- Edit button navigating to the admin edit route with dog's id -->
                                        <a class="btn btn-success" href="{{ route('admin.edit', $dog->id) }}">Update</a>
                                        <hr>
                                        <form action="{{ route('admin.destroy', $dog->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this pet?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            @else
                            <p>No pets found.</p>
                            @endif

                            @endsection
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
