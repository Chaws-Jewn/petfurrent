<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app_without_navbar')

    <style type="text/css">
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .image_size {
            width: 80px;
            height: 100px;
        }

        .form-group {
            font-weight: bold;
        }

        /* Adjust the sidebar styles to remove the gap */
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

        .sidebar img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            max-height: 75px;
        }
    </style>
</head>

<body>
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-2">
                @include('includes.sidebar')
            </div>

            <div class="col-lg-9 col-sm-15 content-padding py-4">
                <div class="header">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                        </div>
                        <div class="col-md-6">
                            <h2>Edit Petcare</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-sm-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11">
                              <!-- Petcare Form for Editing Petcares -->
<form action="{{ route('admin.petcares.update', $petcare->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6 mb-6">
            <div class="form-group">
                <label for="image">Existing Image</label>
                <img class="image_size" src="{{ asset('images/' . $petcare->image) }}" alt="Existing Image">
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Petcare Title" value="{{ $petcare->title }}" required="">
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Write Description about Petcare" style="height:200px" required="">{{ $petcare->description }}</textarea>
            </div>
        </div>
        <div class="col-md-6 mb-6">
            <div class="form-group">
                <label for="new_image">New Image</label>
                <input type="file" accept=".png, .jpg, .jpeg" name="new_image">
            </div>
        </div>
        <div class="col-md-6 mb-6">
            <input type="submit" value="Update Petcare">
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
