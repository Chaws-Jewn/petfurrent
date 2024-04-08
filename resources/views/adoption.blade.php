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
            .table-image {
                height: 100px;
                width: 200px;
            }
        </style>
    </head>

    <body>
        <h1>Adoption</h1>
        <h3>Insert Form</h3>
        <form method="POST" action="{{ route('adoptions.add') }}" enctype="multipart/form-data">
            @csrf <!-- CSRF Protection -->
        
            <div>
                <label for="user_id">User ID:</label>
                <input type="number" id="user_id" name="user_id">
            </div>
        
            <div>
                <label for="pet_id">Pet ID:</label>
                <input type="number" id="pet_id" name="pet_id">
            </div>

            <div>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name">
            </div>
            
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name">
            </div>
            
            <div>
                <label for="email_address">Email:</label>
                <input type="text" id="email_address" name="email_address">
            </div>

            <div>
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number">
            </div>
            
            <div>
                <label for="house_number">House Number:</label>
                <input type="number" id="house_number" name="house_number">
            </div>
        
            <div>
                <label for="street">Street:</label>
                <input type="text" id="street" name="street">
            </div>

            <div>
                <label for="city">City:</label>
                <input type="text" id="city" name="city">
            </div>
            
            <div>
                <label for="front_id">Front ID Image:</label>
                <input type="file" id="front_id" name="front_id">
            </div>

            <div>
                <label for="back_id">Back ID Image:</label>
                <input type="file" id="back_id" name="back_id">
            </div>

            <div>
                <button type="submit">SUBMIT</button>
            </div>
        </form><hr>

        <h3>Update Form</h3>
        <form method="POST" action="{{ route('adoptions.update') }}" enctype="multipart/form-data">
            @csrf <!-- CSRF Protection -->
            @method('PATCH')
                    
            <div>
                <label for="id">Edit ID:</label>
                <input type="number" id="id" name="id">
            </div>

            <div>
                <label for="user_id">User ID:</label>
                <input type="number" id="user_id" name="user_id">
            </div>
        
            <div>
                <label for="pet_id">Pet ID:</label>
                <input type="number" id="pet_id" name="pet_id">
            </div>

            <div>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name">
            </div>
            
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name">
            </div>
            
            <div>
                <label for="email_address">Email:</label>
                <input type="text" id="email_address" name="email_address">
            </div>

            <div>
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number">
            </div>
            
            <div>
                <label for="house_number">House Number:</label>
                <input type="number" id="house_number" name="house_number">
            </div>
        
            <div>
                <label for="street">Street:</label>
                <input type="text" id="street" name="street">
            </div>

            <div>
                <label for="city">City:</label>
                <input type="text" id="city" name="city">
            </div>
            
            <div>
                <label for="front_id">Front ID Image:</label>
                <input type="file" id="front_id" name="front_id">
            </div>

            <div>
                <label for="back_id">Back ID Image:</label>
                <input type="file" id="back_id" name="back_id">
            </div>

            <div>
                <button type="submit">UPDATE</button>
            </div>
        </form><hr>

        <h3>Deletion Form</h3>
        <form method="POST" action="{{ route('adoptions.delete') }}">
            @csrf @method('DELETE')
            
            <div>
                <label for="id">ID:</label>
                <input type="text" id="id_field" name="id">
            </div>

            <div>
                <button type="submit">DELETE</button>
            </div>
        </form><hr>

        @if (count($adoptions) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Breed</th>
                        <th>Pet Name</th>
                        <th>Front ID</th>
                        <th>Back ID</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($adoptions as $adoption)
                    <tr>
                        <td>{{ $adoption->id }}</td>
                        <td>{{ $adoption->first_name }} {{ $adoption->last_name }}</td>>
                        <td>{{ $adoption->phone_number }}</td>
                        <td>{{ $adoption->breed }}</td>
                        <td>{{ $adoption->name }}</td>
                        <td><img class="table-image" src="{{ asset($adoption->front_id) }}" alt="Front id image"></td>
                        <td><img class="table-image" src="{{ asset($adoption->back_id) }}" alt="Back id image"></td>   
                    </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            <h3>NO adoptionS FOUND</h3>
        @endif
        
    </body>
</html>