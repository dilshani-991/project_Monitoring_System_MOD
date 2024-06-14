<style>


.custom-delete-btn {
    background-color: blue;
    color: white;
    border: 2px solid darkblue;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
}

.custom-delete-btn:hover {
    background-color: darkblue;
    border-color: blue;
}

</style>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View avalible projects</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>

            <section>
                <h1 style="text-align: center;margin: 50px 0;">Available Projects</h1>
                <div class="container">
                    <table>
                       <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="">Project Id</label>
                                <br>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="">Project Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-2" style="display: grid; align-items: flex-end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                            </div>


                            <div class="form-group col-lg-2" style="display: grid; align-items: flex-end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Delete">
                            </div>
                       </div>
                    </table>
                </div>
            </section>
        </div>

</body>

</html>
