<!-- Army Project List page  -->

@extends('pages.header')
@extends('pages.footer')

@section('title', 'army-projectlist')
@section('content')

<style>
    .page-content {
        color: #045174;
    }
    .stu-table {
    width: 20%; /* Adjust as needed */
    display: flex;
    justify-content: center; /* Center the table within the stu-table div */
    align-items: center;
    margin-bottom: 30px;
    color: #045174
    }
   



    .headline {
        text-align: left;
        font-size: 50px;
        font-family: 'Times New Roman', Times, serif;
        color: black;
    }
    .align-items {
        display: flex;
        align-items: left;
        left: 30px;
    }
    .align-items img {
        margin-right: 10px;
        max-height: 50px;
    }


    .sidenav {
    height: 50%;
    width: 250px;
    position: fixed; /* Fix the position to the left side of the page */
    top: 200px;
    left: 30px;
    background-color: #ede8e8;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    border-radius: 25px;
}

.sidenav a {
    padding: 5px 5px 5px 5px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    margin-bottom: 10px; /* Add space between links */
}

.sidenav a:last-child {
    margin-bottom: 0;
}

.sidenav a:hover {
    color: #f1f1f1;
}
a{
    text-align: center;
}
.headtable{
    align-content: center;
}
</style>

<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-md-12 p-4 align-items">
                <img src="{{ asset('assets/img/army.png') }}" alt="Sri Lanka Army logo">
                <h2 class="headline">Sri Lanka Army projects</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="sidenav" >
                    <a href="#section1">Section 1</a>
                    <a href="#section2">Section 2</a>
                    <a href="#section3">Section 3</a>
                    <a href="#section4">Section 4</a>
                    <a href="#section4">Section 4</a>
                </div>
            </div>

            <div class="col-md-6 headtable ">
                <div class="caption" >
                    <h3 >Project List</h3>


                    <div class="stu-table">
                      <div class="datatable mt-5 ">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>done</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>done</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry the Bird</td>
                                    <td>@twitter</td>
                                    <td>done</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
