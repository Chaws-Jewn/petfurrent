<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
      background-color: #f8f9fa; /* Set your desired background color */
    }

    .sidebar {
      width: 200px;
      background-color: #343a40; /* Updated sidebar background color */
      position: fixed;
      height: 100%;
      overflow: auto;
      color: #ffffff; /* Updated text color */
      display: flex;
      flex-direction: column;
    }

    .sidebar a {
      display: block;
      padding: 16px;
      text-decoration: none;
      color: #ffffff; /* Link text color */
      transition: background-color 0.3s;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
    }

    .sidebar img {
      display: block;
      margin: 20px auto; /* Center logo vertically and horizontally */
      max-width: 100%;
      max-height: 75px;
    }

    .sidebar hr {
      border-top: 1px solid #6c757d; /* Updated hr color */
    }

    .dropdown-item {
      color: #000000; /* Dropdown item text color */
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }

    .dropdown-menu {
      background-color: #343a40; /* Updated background color */
      border: 1px solid #6c757d; /* Updated border color */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Added shadow effect */
    }

    .dropdown-item {
      color: #ffffff; /* Updated text color */
    }

    .dropdown-item:hover {
      background-color: #555;
    }

    .logout-section {
      margin-top: auto;
      padding: 16px;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <img src="{{ asset('landscape-preview.png') }}" alt="Petode Logo" style="height: 75px;">
    <hr>
    <a class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{route('admin.index')}}">Dashboard</a>
    <div class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ __('Manage Pets') }}
      </a>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('admin.create') }}">
          {{ __('Add Pets') }}
        </a>
        <a class="dropdown-item" href="{{ route('admin.show', ['admin' => 'all_dogs']) }}">
          {{ __('All Pets') }}
        </a>
      </div>
    </div>

    <div class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ __('Manage Pet Care') }}
      </a>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('admin.petcares.create') }}">
          {{ __('Add Pet Care') }}
        </a>
        <a class="dropdown-item" href="{{ route('admin.petcares.index') }}">
          {{ __('View All Pet Cares') }}
        </a>
      </div>
    </div>

    <div class="logout-section">
      <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
