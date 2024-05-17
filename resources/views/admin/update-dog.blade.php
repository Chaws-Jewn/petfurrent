<!DOCTYPE html>
<html lang="en">

<head>
@extends('layouts.app_without_navbar')


    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0; /* Set margin to 0 to avoid default body margin */
            padding: 0;
            overflow-x: hidden; /* Hide horizontal overflow to prevent scrollbar */
        }

        * {
            box-sizing: border-box;
        }

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

        .container-fluid {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .image_size {
            width: 80px;
            height: 100px;
        }

        .row {
            margin-left: 0; /* Remove default left margin */
            margin-right: 0; /* Remove default right margin */
        }

        .content-padding {
            padding-left: 15px; /* Add padding to content area */
        }
    </style>
</head>

<body>
<!------------------------ UPDATE DOG DETAILS PAGE (UPON CLICKING THE EDIT BUTTON IN THE SHOW-DOG) -------------------------------->
    @section('content')
    @include('includes.sidebar')



        <div class="row">
            <div class="col-lg-3 col-sm-3">
            
            </div>
            <div class="col-lg-9 col-sm-15 content-padding py-4">
            <a href="{{ route('admin.show', ['admin' => 'all_dogs']) }}" class="btn btn-secondary mb-3">Back</a>
                <div class="header">
                    <h4>Update Dog Details</h4>
                </div>
                <div class="col-lg-9 col-sm-9">
                    <div class="container">
                        <div class="row">
                            <hr>
                            <div class="col-md-11">
                                <form action="{{ route('admin.update', $dog->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="name">Pet Name</label>
                                                <input type="text" id="name" name="name" placeholder="Dog's Name"
                                                    required="" value="{{$dog->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="age">Pet Age</label>
                                                <input type="text" id="age" name="age" placeholder="Dog Age" required=""
                                                    value="{{$dog->age}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="breed">Pet Type/Breed</label>
                                                <input type="text" id="breed" name="breed" placeholder="Your Breed"
                                                    required="" value="{{$dog->breed}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="gender">Pet Gender</label>
                                                <input type="text" id="gender" name="gender" placeholder="Dog Gender"
                                                    required="" value="{{$dog->gender}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Write Description" style="height:200px" required="">
            {{$dog->description}}
        </textarea>
    </div>
</div>

<div class="col-md-6 mb-6">
    <div class="form-group">
        <label for="existing_image">Existing Image</label>
        <br>
        <img class="image_size" style="height:200px; width:200px;" src="{{ asset('dog/' . $dog->image) }}">
    </div>
</div>

<div class="col-md-6 mb-6">
    <div class="form-group">
        <label for="image">New Pet Image</label>
        <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage(this);">
        <label class="custom-file-label" for="image" id="file-label">Choose a new pet image</label>
    </div>
</div>



                                        <div class="col-md-6 mb-6">
                                            <input type="submit" value="Update Details">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function previewImage(input) {
    var fileLabel = document.getElementById('file-label');
    var fileName = input.files[0].name;
    fileLabel.innerHTML = fileName;

    // Optional: Display a preview of the selected image
    var preview = document.getElementById('image-preview');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</html>