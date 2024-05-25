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
                        <a href="">
                            @if ($petcare->image != null)
                                <img src="/petcare/{{ $petcare->image }}" alt="{{ $petcare->title }} Image">
                            @else
                                <img src="{{ asset('images/noImage.png') }}" alt="{{ $petcare->title }} image">
                            @endif
                        </a>
                        <div class="card-body text-center">
                            <div class="card-details-grid">
                                <div>
                                    <h3>Title:</h3>
                                    <p>{{ implode(' ', array_slice(explode(' ', $petcare->title), 0, 3)) . '...' }}</p>
                                </div>
                                <div>
                                    <h3>Category:</h3>
                                    <p>{{ $petcare->category }}</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="openPetcareModal({{ $petcare->id }})">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for each pet care item -->
                <div class="modal fade" id="petcareModal{{ $petcare->id }}" tabindex="-1" role="dialog" aria-labelledby="petcareModalLabel{{ $petcare->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="petcareModalLabel{{ $petcare->id }}">{{ $petcare->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('images/' . $petcare->image) }}" class="img-fluid" alt="{{ $petcare->title }}" style="width: 100%; height: 100%; max-width: 475px; max-height: 475px; border-radius: 50% 20% / 10% 40%;">
                                    </div>
                                    <div class="col-md-6">
                                        <p style="padding-left: 15px;">{{ $petcare->description }}</p>
                                    </div>
                                </div>
                                <h5 class="modal-title">FOR: {{ $petcare->category }}</h5>
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
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(128, 0, 128, 0.5); 
        max-width: 350px;
        margin: auto;
        text-align: center;
        font-family: Arial, sans-serif;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .card-details-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        text-align: left;
    }

    .card-details-grid div {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .card-details-grid h3 {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        margin-top: 20px;
    }

    .card button:hover {
        opacity: 0.7;
    }

    .about-section {
        max-width: 800px;
        margin: 0 auto;
    }
</style>
@endsection
