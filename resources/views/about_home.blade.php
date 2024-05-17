@extends('layouts.app_nav')

@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="">
        <div class="text-center mb-4">
            <h2 class="display-4 font-weight-bold text-primary">"Welcome to PETODE"</h2>
            <p class="lead">Your go-to place for finding your companions in life!</p>
            <img src="{{ asset('petbanner.png') }}" >
        </div>

        <div class="about-section mt-5">
            <h3 class="mb-4 text-center">About Pet Adoption</h3>
            <p class="lead text-center">
                Welcome to Pet adoption, here in petode you will find your fur friends!
            </p>
            <p class="lead text-center">
                An animal shelter is a staffed facility where homeless animals—and animals seized by authorities in cruelty cases—find safety and comfort, are cared for, and are made available for adoption. Temporarily housing animals in shelters keeps them from being loose on the streets, where they struggle to find clean food and water, can be hit by cars, can be attacked by other animals or cruel humans, or face other potential dangers.
            </p>
            <p class="lead text-center">
                Explore our petcare articles and discover expert advice that will enhance the bond between you and your beloved pets.
            </p>
            <h3 class="mb-4 text-center">Pet Care Details</h3>
            <p class="lead text-center">As pet owners, we all want the best for our furry family members. It is important to every pet parent that their fur friends are getting everything they need to be happy and healthy pets.

                Taking care of a pet is more than just making sure their bowl is full or that the dog is walked and the litter box is scooped.</p>

          <!-- <h3 class="mb-4 text-center">Inquiry</h3>
            <p class="lead text-center">Contact us on:</p>
            <div class="w-full flex items-center py-4 mt-0" style="">
                <p> Facebook : </p>
                <p> Gma : </p>
              </div>  -->

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

    .container {
    background: url();
    display: inline-block;
    padding:5px;
}

</style>>
@endsection
