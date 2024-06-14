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

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-brand:focus {
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
            border-radius: 20px; /* rounded corners */
            overflow: hidden; /* hide overflow */
        }

        .search-container input[type="search"] {
            border-radius: 20px; /* rounded corners for input */
        }

        .search-container button[type="submit"] {
            border-radius: 20px; /* rounded corners for button */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            margin-right: 20px; /* added space between logo and text */
        }

        .navbar-brand img {
            margin-right: 10px; /* space between logo and text */
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
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" height="60" class="d-inline-block align-text-top">
            <h2 style="font-size: 1.5rem;">MINISTRY OF DEFENCE <br><span style="font-size: 1rem;">SRI LANKA</span></h2>
        </a>

        <div class="search-container ms-auto me-3">
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
                    <a class="nav-link home" href="{{ route('homepage') }}">Home</a>
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
                    <a class="nav-link contact" href="">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-light me-2" href="{{ route('login') }}" role="button">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="{{ route('register') }}" role="button">Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div>
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
