<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navigation Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .sidenav {
            height: 380px;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 50px;
            left: 40px;
            background-color: #dfd9e3;
            overflow-x: hidden;
            padding-top: 20px;
            border-radius: 20px;



        }

        .sidenav a {
            padding: 20px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #042648;
            display: block;
            border-radius: 10px;
        }

        .sidenav a:hover {
            background-color: #3d90e2;
        }

        .main {
            margin-left: 250px;
            padding: 20px;
            color: #a5d93e;
        }
        .side1{

        }
    </style>
</head>
<body>

<div class="sidenav">
    <div class="side1"><a href="#" align="center">Project List </a></div>

    <div class="side2"><a href="#" align="center">Project Timeline</a></div>
    <div class="side3"><a href="#" align="center">Budget</a></div>
    <div class="side4"><a href="#" align="center">Progress Chart</a></div>
    <div class="side5"><a href="#" align="center">Go Back </a></div>
</div>



</body>
</html>
