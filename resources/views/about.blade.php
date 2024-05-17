<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app_nav')
    @section('content')

    <style>
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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 350px;
            margin: auto;
            text-align: center;
            font-family: arial;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;
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
            <h1>Available Pets</h1>
            <h5>Welcome to Pet Adoption!</h5>
     
        </div>
    </div>

</body>

</html>