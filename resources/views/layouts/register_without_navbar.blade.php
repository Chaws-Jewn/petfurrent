<!-- resources/views/layouts/app_without_navbar.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- FAV ICON -->
    <link rel="icon" href="{{ asset('logo-circle.png') }}" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Petode
    </title>
    <style>

        /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;
}

.container {
    position: relative;
    max-width: 1200px; /* Adjust the maximum width as needed */
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 auto; /* Center the container horizontally */
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.container header {
    position: relative;
    font-size: 24px; /* Increase font size for header */
    font-weight: 700; /* Increase font weight for header */
    color: #333;
    margin-bottom: 20px; /* Increase margin-bottom for header */
}

.container header::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}

.container form {
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}

.container form .form {
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}

.container form .form.second {
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}

form.secActive .form.second {
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}

form.secActive .form.first {
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}

.container form .title {
    display: block;
    margin-bottom: 16px; /* Increase margin-bottom for title */
    font-size: 18px; /* Decrease font size for title */
    font-weight: 600; /* Increase font weight for title */
    color: #333;
}

.container form .fields {
    display: flex;
    align-items: flex-start; /* Align items to the start of the container */
    justify-content: space-between;
    flex-wrap: wrap;
}

form .fields .input-field {
    display: flex;
    width: calc(100% / 3 - 20px); /* Adjust width and margin */
    flex-direction: column;
    margin: 10px 0; /* Adjust margin */
}

.input-field label {
    font-size: 14px; /* Adjust font size for label */
    font-weight: 600; /* Increase font weight for label */
    color: #2e2e2e;
}

.input-field input,
.input-field select {
    outline: none;
    font-size: 16px; /* Increase font size for input/select */
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 10px 15px; /* Adjust padding */
    height: 48px; /* Adjust height */
    margin: 10px 0; /* Adjust margin */
}

.input-field input:focus,
.input-field select:focus {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
}

.container form button,
.backBtn {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 55px; /* Increase height for button */
    max-width: 1200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 20px auto; /* Adjust margin */
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}

.container form .btnText {
    font-size: 16px; /* Increase font size for button text */
    font-weight: 600; /* Increase font weight for button text */
}

form button:hover {
    background-color: #265df2;
}

form button i,
form .backBtn i {
    margin: 0 6px;
}

form .backBtn i {
    transform: rotate(180deg);
}

form .buttons {
    display: flex;
    align-items: center;
}

form .buttons button,
.backBtn {
    margin-right: 20px; /* Adjust margin-right */
}

@media (max-width: 750px) {
    .container form {
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar {
        display: none;
    }
    form .fields .input-field {
        width: calc(100% / 2 - 20px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field {
        width: 100%;
    }
}
    </style>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>
<body>
    <div id="app">
    @yield('content')
        <!-- <main class="py-4">
            @yield('content')
        </main> -->
    </div>
    <script>
       const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    </script>
</body>
</html>
