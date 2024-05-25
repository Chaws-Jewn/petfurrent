<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app_nav')
    @section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <style>
        body{
            background-color: whitesmoke;
            font-family: "Trirong", serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            margin-top: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(128, 0, 128, 0.5); 
            max-width: 350px;
            margin: auto;
            text-align: center;
            font-family: arial;
            margin-bottom: 20px;
            overflow: hidden;
            /* background: linear-gradient(135deg, white,purple); */
        }

        .card img {
            max-width: 100%;
            max-height: 200px;
            object-fit: cover;
            margin-top: 10px;
        }

        .card-content {
            padding: 20px;
            padding: 20px;
            height: 200px;
        }

        .card-details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
            margin-bottom: 15px;
            text-align: center;

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
    </style>
</head>

<body>

<!------------------------ USER DASHBOARD -------------------------------->

    <div class="container">
        <div class="section-heading">
            <h1 style="font-family: Trirong, serif;">Available Pets</h1>
            <h3 style="font-family: Trirong, sans-serif;">Welcome to Pet Adoption!</h3>
       <!--     <a href="{{ route('customer.index') }}" class="btn btn-secondary">View Adoption Status</a>-->
        </div>
        <div class="row">
            @foreach ($dogs as $dog)
            <div class="col-md-4">
                <div class="card">
                    <a href="">
                        @if ($dog->image != null)
                            <img src="/dog/{{ $dog->image }}" alt="{{ $dog->name }} Image">
                        @else
                            <img src="{{ asset('images/noImage.png') }}" alt="{{ $dog->name }} Image">
                        @endif
                    </a>
                    <div class="card-content" style="font-family: Trirong, serif;">
                        <div class="card-details-grid">
                            <div>
                                <h3>Name:</h3>
                                <p>{{ $dog->name }}</p>
                            </div>
                            <div>
                                <h3>Age:</h3>
                                <p>{{ $dog->age }} months old</p>
                            </div>
                            <div>
                                <h3>Type:</h3>
                                <p>{{ $dog->breed }}</p>
                            </div>
                        </div>
                        <!--<a href="{{ route('adopt.form', $dog) }}" class="btn btn-primary">Proceed to Adopt</a>-->
                        <a href="{{ route('details', $dog) }}" class="btn btn-primary">Adopt Now!</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>