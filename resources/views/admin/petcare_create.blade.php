@extends('layouts.app_without_navbar')

@section('content')

<style type="text/css">
    input[type=text],
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

    .container-fluid {
        padding-left: 0;
    }

    .col-lg-2 {
        width: 240px;
    }

    .description-container,
    .image-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .image-preview {
        max-width: 300px;
        max-height: 300px;
        margin-top: 10px;
    }

    /* Style for the label */
    .custom-file-label {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Limit the height of the description preview */
    .description-preview {
        max-height: 100px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-top: 10px;
    }
</style>

<div class="container-fluid">
<form action="{{ route('admin.petcares.store') }}" method="post" enctype="multipart/form-data">

@csrf
    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-lg-2 col-sm-2">
            @include('includes.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-sm-15 content-padding py-4">
            <div class="header">
                <div class="row">
                    <div class="col-md-1">
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Back</a>
                    </div>
                    <div class="col-md-6">
                        <h2>Post Petcare</h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-sm-9">
                <div class="container">
                    <div class="row">
                        <hr>
                        <div class="col-md-11">
                            <!-- Petcare Form for Adding Petcares -->
                            <form action="{{ route('admin.petcares.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" name="title" placeholder="Petcare Title" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" placeholder="Write Description about Petcare" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="image">Choose File</label>
                                                <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage(this);" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <input type="submit" value="Add Petcare">
                                    </div>
                                    <div class="col-md-6 mb-6 image-container">
                                        <h3>Post Preview:</h3>
                                        <img src="#" alt="Image Preview" class="image-preview" id="preview-image">
                                    </div>
                                    <div class="col-md-6 mb-6 description-container">
                                        <h3>Description:</h3>
                                        <p id="preview-description">This is a preview description for the Petcare.</p>
                                    </div>
                                
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

<script>
    // Update the description preview
    document.getElementById('description').addEventListener('input', function () {
        document.getElementById('preview-description').innerText = this.value;
    });

    // Function to preview the selected image
    function previewImage(input) {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('preview-image').src = e.target.result;
            document.getElementById('preview-image').style.display = 'block';
        };

        reader.readAsDataURL(file);
    }
    
</script>

@endsection
