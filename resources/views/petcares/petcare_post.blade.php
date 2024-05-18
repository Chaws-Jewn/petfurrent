@extends('layouts.app_nav')

@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="display-4 font-weight-bold text-primary">PET CARES</h2>
            <p class="lead">Your go-to place for pet care tips and tricks!</p>
        </div>

        <div class="row">
            @foreach ($petcares as $petcare)
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-img-container">
                            @if ($petcare->image != null)
                                <img src="{{ asset('images/' . $petcare->image) }}" class="card-img-top" alt="{{ $petcare->title }}">
                            @else
                                <img src="{{ asset('images/noImage.png') }}" class="card-img-top" alt="{{ $petcare->title }}">
                            @endif
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ implode(' ', array_slice(explode(' ', $petcare->title), 0, 3)) . '...' }}</h5>
                            <p class="card-text">{{ implode(' ', array_slice(explode(' ', $petcare->description), 0, 3)) . '...' }}</p>
                            <!-- Trigger the modal using JavaScript function -->
                            <button type="button" class="btn btn-primary" onclick="openPetcareModal({{ $petcare->id }})">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
<!-- Modal for each pet care item -->
<div class="modal fade" id="petcareModal{{ $petcare->id }}" tabindex="-1" role="dialog" aria-labelledby="petcareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="petcareModalLabel">{{ $petcare->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        @if ($petcare->image != null)
                            <img src="{{ asset('images/' . $petcare->image) }}" class="img-fluid" alt="{{ $petcare->title }}" style="width: 100%; height: 100%; max-width: 475px; max-height: 475px; border-radius: 50% 20% / 10% 40%;">
                        @else
                            
                            <img src="{{ asset('images/noImage.png') }}" class="img-fluid" alt="{{ $petcare->title }}" style="width: 100%; height: 100%; max-width: 475px; max-height: 475px; border-radius: 50% 20% / 10% 40%;">
                        @endif
                        </div>
                    <div class="col-md-6">
                        <!-- Add left padding or margin to create an indent -->
                        <p style="padding-left: 15px;">{{ $petcare->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            @endforeach
        </div>

        <hr>

        <div class="about-section mt-5">
            <h3 class="mb-4 text-center">About Petcares</h3>
            <p class="lead text-center">
                Welcome to Petcares, your trusted source for valuable pet care tips and tricks.
                Our mission is to guide you in providing the best care for your furry companions, ensuring their well-being and happiness.
            </p>
            <p>
                Whether you're a new pet owner or an experienced enthusiast, our curated tips cover various aspects of pet care,
                from health and nutrition to training and grooming. We believe that a well-cared-for pet is a happy and healthy pet.
            </p>
            <p>
                Explore our petcare articles and discover expert advice that will enhance the bond between you and your beloved pets.
            </p>
        </div>
    </div>

        <!-- Include Bootstrap JavaScript at the end of the body -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // JavaScript function to open the modal
    function openPetcareModal(petcareId) {
        var modal = new bootstrap.Modal(document.getElementById('petcareModal' + petcareId));
        modal.show();
    }
</script>
</body>
<style>
    /* Custom styling for the card and container */
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-container {
        height: 200px; /* Set the desired height for the image container */
        overflow: hidden;
        position: relative; /* Added to position the title and description */
    }

    .card-img-top {
        width: 100%;
        height: auto;
    }

    .card-body {
        padding: 15px; /* Adjust padding for better spacing */
    }

    .card-title {
        font-size: 1.5rem; /* Adjust font size for title */
        margin-bottom: 10px; /* Add margin for separation */
    }

    .card-text {
        font-size: 1rem; /* Adjust font size for description */
    }

    /* Styling for the about section */
    .about-section {
        max-width: 800px;
        margin: 0 auto;
    }
</style>>
@endsection
