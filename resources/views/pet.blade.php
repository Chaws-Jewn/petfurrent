<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/pet.css">

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
            .table-image {
                height: 100px;
                width: 200px;
            }
            .links {
                display: flex;
            }
            .link {
                font-weight: 700;
                font-size: 20px;
                margin-right: 40px;
            }

            .adoption-form {
                display: inline;
            }
        </style>
    </head>

    <body>
        <div class="links">
            <a href="{{ route('users.fetchAll') }}"><button class="link">Users</button></a>
            <a href="{{ route('adoptions.fetchAll')}}"><button class="link">Adoptions</button></a>
            <a href="{{ route('pets.fetchAll')}}"><button class="link">Pets</button></a>
        </div>

        <h1>Pets</h1>
        <h3>Insert Form</h3>
        <form class="pet" method="POST" action="{{ route('pets.add') }}">
            @csrf <!-- CSRF Protection -->

            <div>
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" placeholder="type">
            </div>
        
            <div>
                <label for="breed">Breed</label>
                <input type="text" id="breed" name="breed" autocomplete="off">
            </div>
            
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            
            <div>
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender">
            </div>

            <div>
                <label for="description">description:</label>
                <input type="text" id="description" name="description">
            </div>

            <div>
                <label for="image">image:</label>
                <input type="file" id="image" name="image">
            </div>
            
        
            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        <h3>Update Form</h3>
        <form method="POST" action="{{ route('pets.update') }}">
            @csrf <!-- CSRF Protection -->
            @method('PUT')
            
            <div>
                <label for="id">ID (ID of pet to be updated):</label>
                <input type="text" id="id" name="id">
            </div>

            <div>
                <label for="type">Type:</label>
                <input type="text" id="type" name="type">
            </div>
        
            <div>
                <label for="breed">Breed:</label>
                <input type="text" id="breed" name="breed" autocomplete="off">
            </div>
            
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            
            <div>
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender">
            </div>

            <div>
                <label for="description">Description:</label>
                <input type="text" id="description" name="description">
            </div>

            <div>
                <label for="image">image:</label>
                <input type="file" id="image" name="image">
            </div>
            
            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        <h3>Deletion Form</h3>
        <form method="POST" action="{{ route('pets.delete') }}">
            @csrf @method('DELETE')
            
            <div>
                <label for="id">ID:</label>
                <input type="text" id="id_field" name="id">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        @if (!empty($pets))
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Breed</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pets as $pet) 
                    <tr>
                        <td>{{ $pet->id }}</td>
                        <td>{{ $pet->type }}</td>
                        <td>{{ $pet->breed }}</td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->gender }}</td>
                        <td>{{ $pet->description }}</td>
                        <td><img class="table-image" src="{{ asset($pet->image) }}" alt="image"></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            <h3>NO petS FOUND</h3>
        @endif
        
        <a href="{{ route('home')}}">
            <button>Go to Home</button>
        </a>
    </body>
</html>
