<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel 10 App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* public/css/app.css */

.sidebar {
    border: 5px;
    padding: 5px;
}

.nav-link {
    font-weight: bold;
    text-align: center;
    color: rgb(107, 27, 210);
}
.nav-item-border {
    border: 1px solid #e76868;
    padding: 5px;
    border-radius: 20px;
    margin: 3px;

}




body {
            display: flex;
        }
        .sidebar {
            width: 200px; /* Adjust width as needed */
            position: fixed;
            top: 200px;
            left: 0;
            height: 0px;

            padding-top: 20px;
        }
        .nav-item-border {
            border: 2px solid #db1515;
        }
        .nav-container {
            padding-left: 10px;
        }



    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="sidebar">
                    <div class="nav-container">
                         <ul class="nav flex-column">
                            <li class="nav-item nav-item-border">
                               <a class="nav-link" href="{{ url('/project_list') }}">Project List</a>
                            </li>
                            <li class="nav-item nav-item-border">
                               <a class="nav-link" href="{{ url('/project_timeline') }}">Project Timeline</a>
                            </li>
                            <li class="nav-item nav-item-border">
                                <a class="nav-link" href="{{ url('/budget') }}">Budget</a>
                            </li>
                            <li class="nav-item nav-item-border">
                                <a class="nav-link" href="{{ url('/progress_chart') }}">Progress Chart</a>
                            </li>
                            <li class="nav-item nav-item-border">
                                <a class="nav-link" href="{{ url('/back') }}">Go Back</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>


            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
