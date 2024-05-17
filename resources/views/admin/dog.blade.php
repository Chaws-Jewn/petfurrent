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

        .custom-file {
            position: relative;
            margin-top: 10px;
            overflow: hidden;
            display: inline-block;
        }

        .custom-file-input {
            opacity: 0;
            font-size: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
            background-color: #04AA6D;
            color: white;
            text-align: center;
        }

        .custom-file-label::after {
            content: "Browse";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-weight: normal;
        }

        .custom-file input[type="file"]:focus+.custom-file-label {
            border-color: #04AA6D;
        }



        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .image-preview {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
        }

        /* Adjusted styles for layout expansion */
        .col-md-3,
        .col-md-9 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @section('content')

        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-lg-2 col-sm-2">
                @include('includes.sidebar')
            </div>

            <!-- Main Content -->
            <div class="col-lg-10 col-sm-10 content-padding py-4">
                <div class="header">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                        </div>
                        <div class="col-md-6">
                            <h2>Add pets</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 col-sm-10">
                    <div class="container">
                        <div class="row">
                            <hr>
                            <div class="col-md-3">
                                <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Pet's Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Sex</label>
                                        <select id="gender" name="gender" required="">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="breed">Type</label>
                                        <select id="breed" name="breed" required="">
                                            <option value="Dog">Dog</option>
                                            <option value="Cat">Cat</option>
                                            <option value="...">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" id="age" name="age" pattern="\d+" placeholder="Pet Age (in months)" required="">
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" value="Post Pet">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="description">Details</label>
                                    <textarea id="description" name="description" placeholder="Write Description about the pet" style="height: 200px;" required=""></textarea>
                                </div>
                                <div class="form-group">
                                        <label for="image">Choose File</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage(this);" required="">
                                            <label class="custom-file-label" for="image" id="file-label">Browse</label>
                                        </div>
                                    </div>
                                    <div class="form-group image-container">
                                        <img id="preview-image" class="image-preview" src="#" alt="Image Preview" style="display: none;">
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
    // Function to preview the selected image
    function previewImage(input) {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('preview-image').src = e.target.result;
            document.getElementById('preview-image').style.display = 'block';
            document.getElementById('file-label').innerText = file.name; // Display the file name after selection
        };

        reader.readAsDataURL(file);
    }
    
</script>

</html>
