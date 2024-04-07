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
            th {
                width: auto;
            }
            td, th {
                border: 1px solid darkslategrey;
            }
            .table-header {
                border: 2px solid black;
                width: 100%;
            }
        </style>
    </head>

    <body>
        
        <h3>Insert Form</h3>
        <form method="POST" action="{{ route('users.add') }}">
            @csrf <!-- CSRF Protection -->

            <!-- Input field for username -->
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}">
            </div>
        
            <!-- Input field for password -->
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
        
            <!-- Submit button -->
            <div>
                <button type="submit">Submit</button>
            </div>
        </form><hr>

        <h3>Update Form</h3>
        <form method="POST" action="{{ route('users.add') }}">
            @csrf <!-- CSRF Protection -->

            <!-- Input field for username -->
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}">
            </div>
        
            <!-- Input field for password -->
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
        
            <!-- Submit button -->
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

        <table>
            <tr class="table-header">
                <th class="big-col">Name</th>
                <th class="big-col">Email</th>
                <th>Phone Number</th>
                <th>Birthdate</th>
            </tr>

            @foreach ($users as $user)
            <tr class="table-body">
                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->birthdate }}</td>
            </tr>
            @endforeach

        </table>
        
    </body>
</html>
