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
    .header{
        padding-left: 5px;
    }
    .d-flex{
        padding-top: 65px;
        width: 300px;
    }

    </style>









    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage user</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">


                <section>
                    <div class="row">
                        <div class="col md-6" >
                             <h1 class="header" style="text-align: left;margin: 50px 0;">Manage User Account</h1>
                        </div>
                        <div class="col md-6" >

                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success btn-sm" type="submit">Search</button>
                                <div class="form-group col-lg-2" style="display: grid; align-items: flex-end;">
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add new User">
                                </div>

                            </form>
                        </div>

                    </div>

                        <table>
                           <div class="row">
                                <div class="form-group col-lg-3">
                                    <label for="">User Id</label>
                                    <br>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">User Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>


                                <div class="form-group col-lg-2" style="display: grid; align-items: flex-end;">
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add New User">
                                </div>
                           </div>
                        </table>
                    </div>
                </section>
            </div>

    </body>

    </html>
