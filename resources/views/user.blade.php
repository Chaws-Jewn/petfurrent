<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PetFurrent</title>
        
    </head>

    <body>
        <h1>Form</h1>
        <form method="POST" action="{{ route('users.delete') }}">
            @csrf @method('DELETE')
            
            <div>
                <label for="id">ID:</label>
                <input type="text" id="id_field" name="id">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
        
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
        </form>
        
    </body>
</html>
