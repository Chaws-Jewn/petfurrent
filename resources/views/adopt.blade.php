@extends('layouts.app_nav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <style>
         body{
            font-family: "Trirong", serif;
        }
    </style>

</head>

<body>
    <!------------------------ ADOPTION FORM (UPON CLICKING THE PROCEED TO ADOPT BUTTON) -------------------------------->

    @section('content')

    <!--Container for Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="shadow bg-white p-3">

                    <div class="header">

                        <div class="row">
                            <!-- Back button to go back to the home routes\ -->
                            <div class="col-md-2">
                                <a href="{{ route('details', $dog) }}" class="btn btn-secondary mb-3">Back</a>
                            </div>


                            <div class="col-md-6 text-primary">
                                <!-- Page Title -->
                                <h2>Adoption Form</h2>

                            </div>
                            <hr>
                        </div>

                    </div>

                    <!-- Adoption Form Section -->
                    <div class="row">
                        <div class="col-md-11">
                            <!-- Adoption Form for adopting a dog -->
                            <form class="form-inline" action="{{ route('place.adopt', $dog) }}" method="post">
                                @csrf
                                <div class="row">
                                
                                <h4>Personal Information</h4>
                                    <!-- Display user's first name from authenticated user data -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                id="first_name" name="first_name" value="{{ auth()->user()->fname }}" required readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" placeholder="last Name"
                                                id="last_name" name="last_name" value="{{ auth()->user()->lname }}" required readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Phone number</label>
                                            <input type="text" class="form-control" placeholder="Phone number"
                                                id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number }}" required readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Birth date</label>
                                            <input type="text" class="form-control" placeholder="Birth date"
                                                id="birthdate" name="birthdate" value="{{ auth()->user()->birthdate }}" required readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" placeholder="Address"
                                                id="address" name="address" value="{{ auth()->user()->address }}" required readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" placeholder="N/A"
                                                id="email" name="email" value="{{ auth()->user()->email }}" required readonly>
                                        </div>
                                    </div>
<hr>
                                <h4>Household Information</h4>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Do you have a secure outdoor area?</label>
                                            <input type="text" class="form-control" placeholder="secure outdoor area?"
                                                id="first_name" name="first_name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Where will the animal sleep at night? </label>
                                            <input type="text" class="form-control" placeholder="Inside/Outside"
                                                id="last_name" name="last_name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Age of the youngest child in your house?</label>
                                            <input type="text" class="form-control" placeholder="Age"
                                                id="phone_number" name="phone_number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Do you own or rent your home?</label>
                                            <input type="text" class="form-control" placeholder="If renting, does your lease allow pets?" id="city"
                                                name="city" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Does anyone in your household have allergies to animals?</label>
                                            <input type="text" class="form-control" placeholder="Allergies to animals" id="street"
                                                name="street" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Are you willing to invest time and effort in training and socializing your new pet? </label>
                                            <input type="text" class="form-control" placeholder="Training and socializing your new pet"
                                                id="house_number" name="house_number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Will the animal be left alone for long periods of time?</label>
                                            <input type="text" class="form-control" placeholder="Left alone"
                                                id="email_address" name="email_address" required="">
                                        </div>
                                    </div>
                                    <h6>Note: Upon the procedure of your adoption form are you willing to wait? (We will reach you using your provide information)</h6>
                                    <div class="center">
                                        <button type="submit" class="btn btn-primary">Adopt Now</button>
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