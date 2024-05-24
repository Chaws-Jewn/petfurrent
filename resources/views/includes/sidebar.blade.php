<style>
  body {
    margin: 0;
    font-family: "Lato", sans-serif;
    background-color: #f8f9fa; /* Set your desired background color */
  }

  .admin {
    margin-left: 48px;
    font-size: 30px;
    font-weight: 600;
    margin-bottom: -5px
  }

  .adminrole{
    font-size: 15px;
    margin-left: 75px;
    font-weight: 200;

  }

  .sidebar {
    width: 200px;
    background-color: #343a40; /* Updated sidebar background color */
    position: fixed;
    height: 100%;
    overflow: auto;
    color: #ffffff; /* Updated text color */
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
    max-height: 200px;
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
</style>

<!-- Your existing HTML code follows -->
<!-- ... -->

</head>

<body>

  <div class="sidebar">
  <img src="{{ asset('logo-circle.png') }}" alt="PetFurrent Logo" style="height: 100px;">
  <h1 class="admin">{{ Auth::user()->lname }}</h1>
  <p class="adminrole">Admin</p>
<hr>
    <!--
  <a class="active" href="{{route('admin.index')}}">Dashboard</a>
  <a href="{{ route('admin.create') }}">Add Dogs</a>
  <a href="{{ route('admin.show', ['admin' => 'all']) }}">Show All Dogs</a>
-->
    <a class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{route('admin.index')}}">Dashboard</a>
    <!-- <a class="{{ request()->routeIs('admin.create') ? 'active' : '' }}" href="{{ route('admin.create') }}">Add Pets</a>
    <a class="{{ request()->routeIs('admin.show') ? 'active' : '' }}" href="{{ route('admin.show', ['admin' => 'all_dogs']) }}">Show All Pets</a> -->

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

                                    <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> -->
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

                              <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                              </div>
  </div>
</body>

</html>