<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PetFurrent</title>
        
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            td, th {
                border: 1px solid darkslategrey;
                width: 500px;
                text-align: center;
            }
            .links {
                display: flex;
            }
            .link {
                font-weight: 700;
                font-size: 20px;
                margin-right: 40px;
            }
            </style>
            </head>

            <body>
            <div class="links">
            <a href="{{ route('users.fetchAll') }}"><button class="link">Users</button></a>
            <a href="{{ route('adoptions.fetchAll')}}"><button class="link">Adoptions</button></a>
            </div>
            <div>
                <h1>Oops Error Page!</h1>
                <h3>Error: {{ $error }}</h3>
                <hr><h3>Kindly click the back button</h3>
            </div>
    </body>
</html>
        