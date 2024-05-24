@extends('layouts.app_without_navbar')

@section('content')
<style type="text/css">
    body {
        margin: 0;
        font-family: "Lato", sans-serif;
    }

    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
        left: 0;
    }

    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    .sidebar a.active {
        background-color: #04AA6D;
        color: white;
    }

    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }

    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }

    .sidebar img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        max-height: 75px;
    }

    /* Additional styles for the table */
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #04AA6D;
        color: white;
    }

    .image_size {
        width: 100px;
        height: 100px;
        display: block;
        margin: 0 auto; /* Center the image */
    }

    .center-buttons {
        text-align: center;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-sm-2">
            @include('includes.sidebar')
        </div>

        <div class="col-lg-10 col-sm-10 content-padding py-4">
            <div class="header">
                <div class="row">
                    <div class="col-md-1">
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                    </div>
                    <div class="col-md-6">
                        <h2>All Petcares</h2>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <hr>
                    <table>
                        <tr>
                            <th>Petcare Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th> <!-- New Delete Column -->
                        </tr>

                        @forelse ($petcares as $petcare)
                        <tr>
                            <td>{{ implode(' ', array_slice(explode(' ', $petcare->title), 0, 3)) . '...' }}</td>
                            <td>{{ implode(' ', array_slice(explode(' ', $petcare->description), 0, 3)) . '...' }}</td>
                            <td>
                                <img class="image_size" src="{{ asset('images/' . $petcare->image) }}" alt="{{ $petcare->title }}">
                            </td>
                            <td class="center-buttons">
                                <!-- Edit button navigating to the admin edit route with petcare's id -->
                                <a class="btn btn-success" href="{{ route('admin.petcares.edit', $petcare->id) }}">Edit</a>
                            </td>
                            <td class="center-buttons">
                                <!-- Delete button for deleting the petcare post -->
                                <form action="{{ route('admin.petcares.destroy', $petcare->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this petcare post?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No petcares found.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
