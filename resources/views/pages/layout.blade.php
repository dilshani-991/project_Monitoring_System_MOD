<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title', 'content')</title>

    <style>
        .navbar-custom {
            background-color: #14213d; /* dark blue background */
        }

        .navbar-custom .navbar-brand {
            color: #ffc107; /* dark yellow color for organization name */
        }

        .navbar-custom .nav-link,
        .navbar-custom .btn-outline-light {
            color: #ffffff; /* white text color */
        }

        .navbar-custom .nav-link.home,
        .navbar-custom .nav-link.category,
        .navbar-custom .nav-link.contact {
            color: #ffffff !important; /* white text color for home, category, and contact links */
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .btn-outline-light:hover {
            color: #ffffff; /* white text color on hover */
        }

        .dropdown-menu {
            background-color: #14213d; /* dark blue background for dropdown menu */
        }

        .dropdown-menu .dropdown-item {
            color: #ffffff; /* white text color for dropdown items */
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #1e3163; /* darker blue background on hover for dropdown items */
        }

        .search-container {
            flex-grow: 1;
            border-radius: 20px; /* rounded corners */
            overflow: hidden; /* hide overflow */
        }

        .search-container input[type="search"] {
            border-radius: 20px; /* rounded corners for input */
        }

        .search-container button[type="submit"] {
            border-radius: 20px; /* rounded corners for button */
        }

        @media (max-width: 768px) {
            .search-container {
                order: 1;
            }
            .nav-item {
                text-align: left;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
    <img src="assets/img/logo.png" alt="logo.png" height="30" class="d-inline-block align-text-top">
    <span style="color: #ffc107;">MINISTRY OF DEFENCE</span>

    <!-- I need to add logo here -->
        <div class="search-container">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link home" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle category" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Army</a></li>
                        <li><a class="dropdown-item" href="#">Navy</a></li>
                        <li><a class="dropdown-item" href="#">AirForce</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <button class="btn btn-outline-light me-2" type="button">Login</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light" type="button">Signup</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div>
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

