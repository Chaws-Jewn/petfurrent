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
        </style>
    </head>

    <body>
        <h1>User</h1>
        <h3>Insert Form</h3>
        <form method="POST" action="{{ route('users.add') }}">
            @csrf <!-- CSRF Protection -->

            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
        
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
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
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number">
            </div>
            
            <div>
                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate">
            </div>
        
            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        <h3>Update Form</h3>
        <form method="POST" action="{{ route('users.update') }}">
            @csrf <!-- CSRF Protection -->
            @method('PUT')
            
            <div>
                <label for="id">ID (ID of user to be updated):</label>
                <input type="text" id="id" name="id">
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
        
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
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
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number">
            </div>
            
            <div>
                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate">
            </div>
            
            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        <h3>Deletion Form</h3>
        <form method="POST" action="{{ route('users.delete') }}">
            @csrf @method('DELETE')
            
            <div>
                <label for="id">ID:</label>
                <input type="text" id="id_field" name="id">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        @if (!empty($users))
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Birthdate</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->birthdate }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            <h3>NO USERS FOUND</h3>
        @endif
        
        <a href="{{ route('home')}}">
            <button>Go to Home</button>
        </a>
    </body>
</html>
